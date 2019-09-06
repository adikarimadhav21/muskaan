<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_dealers extends CI_Model {
	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');
	}

	public function SubmitDealer() {
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$facebook = $this->input->post('facebook');
		$status = $this->input->post('status');

		$data = array(
			'Name' => $name,
			'Address' => $address,
			'Phone' => $phone,
			'Mobile' => $mobile,
			'Email' => $email,
			'Facebook' => $facebook,
			'Status' => $status
			);

		$this->db->insert('tbl_dealers', $data); 
	}

	public function getAllDealers() {
		$this->db->select('*');
		$this->db->from('tbl_dealers');

		return $this->db->get();
	}

	public function getDealerInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_dealers');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedDealer($id) {
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$facebook = $this->input->post('facebook');
		$status = $this->input->post('status');

		$data = array(
			'Name' => $name,
			'Address' => $address,
			'Phone' => $phone,
			'Mobile' => $mobile,
			'Email' => $email,
			'Facebook' => $facebook,
			'Status' => $status
			);

		$this->db->where('id', $id);
		$this->db->update('tbl_dealers', $data);

	}

// 	public function getAllPostsByParentId($url) {

//     // Sub Query
// 		$this->db->select('id')->from('tbl_pages')->where('URL', $url);
// 		$subQuery =  $this->db->get_compiled_select();

// // Main Query
// 		$this->db->select('*');
// 		$this->db->from('tbl_posts');
// 		$this->db->where("ParentPageId IN ($subQuery)", NULL, FALSE);
// 		$this->db->where('Status', '1');
// 		return $this->db->get();
// 	}
}
