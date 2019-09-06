<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_category extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');

	}

	public function submitCategory()
	{

		$categoryName = $this->input->post('categoryName');
		$url = str_replace(' ', '-', strtolower($categoryName));
		$categoryStatus = $this->input->post('status');

		$this->db->where('CategoryName', $categoryName);
		$query = $this->db->get('tbl_category');

		$data = array(
			'CategoryName' => $categoryName,
			'Status' => $categoryStatus
		);

		$this->db->insert('tbl_category', $data);
		$lastInsertedId = $this->db->insert_id();


		if ($query->num_rows() > 0) {
			$categoryURL = $url . '-' . $lastInsertedId;
			$data = array('URL' => $categoryURL);
			$this->db->where('id', $lastInsertedId);
			$this->db->update('tbl_category', $data);
		} else {
			$data = array('URL' => $url);
			$this->db->where('id', $lastInsertedId);
			$this->db->update('tbl_category', $data);
		}
	}

	public function getAllCategories()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');

		return $this->db->get();
	}

	public function getCategoryInfoById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_category');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}

	public function submitUpdatedCategory($id)
	{
		$data = array(
			'CategoryName' => $this->input->post('categoryName'),
			'Status' => $this->input->post('status')
		);

		$this->db->where('id', $id);
		$this->db->update('tbl_category', $data);
	}

	public function getAllActiveCategories()
	{
		$this->db->where('Status', '1');
		return $this->db->get('tbl_category')->result();
	}

	public function getAllCategoryDataByURL($page_url)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('URL', $page_url);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}

	public function getWebTitleByURL($url) {
		$this->db->select('WebTitle');
		$this->db->from('tbl_category');
		$this->db->where('URL', $url);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}
}
