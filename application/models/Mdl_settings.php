<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_settings extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');
	}

	public function submitSettings($image) {
		$data = array(
			'CompanyName' => $this->input->post('companyName'),
			'Address' => $this->input->post('companyAddress'),
			'Telephone' => $this->input->post('companyPhone'),
			'Mobile' => $this->input->post('companyMobile'),
			'Email' => $this->input->post('companyEmail'),
			'Facebook' => $this->input->post('companyFB'),
			'Logo' => $image
			);

		$this->db->insert('tbl_settings', $data); 
	}

	public function listWebsiteSettings() {
		$this->db->where('id', 2);
		$query = $this->db->get('tbl_settings');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedWebsiteSettings($photo) {
		$data = array(
			'CompanyName' => $this->input->post('companyName'),
			'Address' => $this->input->post('companyAddress'),
			'Telephone' => $this->input->post('companyPhone'),
			'Mobile' => $this->input->post('companyMobile'),
			'Email' => $this->input->post('companyEmail'),
			'Facebook' => $this->input->post('companyFB')
			);

		$this->db->where('id', 2);
		$this->db->update('tbl_settings', $data);

		if(!empty($photo)) {
			$data1=array('Logo' => $photo);
			$this->db->where('id',2);
			$this->db->update('tbl_settings',$data1);
		}
	}

	public function listAllSettings() {
		$this->db->select('*');
		$this->db->from('tbl_settings');
		$this->db->where('id', '2');
		$query= $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}
}
