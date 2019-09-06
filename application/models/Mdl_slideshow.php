<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_slideshow extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');

	}

	public function submitSlide($photo)
	{
		//print_r($this->input->post());
		$data = array(
			'SlideImage' => $photo,
			'Title' => $this->input->post('title'),
			'SmallDesc' => $this->input->post('slideDesc'),
			'Status' => $this->input->post('slideStatus')
		);

		$this->db->insert('tbl_slideshow', $data);
	}

	public function listAllSlides()
	{
		$this->db->select('*');
		$this->db->from('tbl_slideshow');

		return $this->db->get();
	}

	public function getSlideInfoById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_slideshow');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}

	public function submitUpdatedSlide($id, $photo)
	{
		$data = array(
			'Title' => $this->input->post('title'),
			'SmallDesc' => $this->input->post('slideDesc'),
			'Status' => $this->input->post('slideStatus')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_slideshow', $data);

		if (!empty($photo)) {
			$data1 = array('SlideImage' => $photo);
			$this->db->where('id', $id);
			$this->db->update('tbl_slideshow', $data1);
		}
	}

	public function getAllActiveSlideshow()
	{
		$this->db->select('*');
		$this->db->from('tbl_slideshow');
		$this->db->where('Status', '1');

		return $this->db->get();
	}

}
