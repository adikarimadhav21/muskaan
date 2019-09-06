<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_users extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');

	}

	public function addNewUser($photo)
	{

		$password = $this->input->post('password');
   //print_r($this->input->post());
		$data = array(
			'Name' => $this->input->post('name'),
			'Address' => $this->input->post('address'),
			'Phone' => $this->input->post('phone'),
			'Email' => $this->input->post('email'),
			'UserName' => $this->input->post('username'),
			'Password' => sha1($password),
			'Image' => $photo,
			'UserStatus' => $this->input->post('userStatus')
			);

		$this->db->insert('tbl_users', $data); 
	}

	public function loginCheck()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$encryptedpassword = sha1($password);
    //echo $encryptedpassword

		$this->db->select("*");
		$this->db->from('tbl_users');
		$this->db->where('UserName', $username);
		$this->db->where('Password', $encryptedpassword);
		$this->db->where('UserStatus', '1');
		$result = $this->db->get();
		return $result->row_array();
	}

	public function getCurrentUserInfo($currentUser) {
		$this->db->select("*");
		$this->db->from('tbl_users');
		$this->db->where('UserName', $currentUser);
		$query= $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function listAllUsers() {
		$this->db->select('*');
		$this->db->from('tbl_users' );

		return $this->db->get();
	}

	public function getUserInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_users');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedUserPassword($id) {
		$password = $this->input->post('password');
		$encryptedpassword = sha1($password);

		$data = array('Password' => $encryptedpassword);
		$this->db->where('id', $id);
		$this->db->update('tbl_users', $data);
	}

	public function submitUpdatedUser($id) {
		$data = array(
			'Name' => $this->input->post('name'),
			'Address' => $this->input->post('address'),
			'Phone' => $this->input->post('phone'),
			'Email' => $this->input->post('email'),
			'UserName' => $this->input->post('username'),
			'UserStatus' => $this->input->post('userStatus')
			);
		$this->db->where('id', $id);
		$this->db->update('tbl_users', $data);

		if(!empty($photo)) {
			$data1=array('Image' => $photo);
			$this->db->where('id',$id);
			$this->db->update('tbl_users',$data1);
		}
	}
}
