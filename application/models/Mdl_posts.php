<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_posts extends CI_Model {
	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');
	}

	public function submitPost($photo) {
		$postTitle = $this->input->post('postTitle');
		$post_url = str_replace(' ', '-', strtolower($postTitle));
		$postStatus = $this->input->post('postStatus');
		$parentId = $this->input->post('parentId');

		$this->db->where('PostTitle', $postTitle);
		$query = $this->db->get('tbl_posts');


		$data = array(
			'PostTitle' => $postTitle,
			'PostImage' => $photo,
			'PostContent' => $this->input->post('editor'),
			'ParentPageId' => $parentId,
			'Status' => $postStatus
			);

		$this->db->insert('tbl_posts', $data); 
		$lastInsertedId = $this->db->insert_id();

		if($query->num_rows() > 0) {
			$post_url = $post_url.'-'.$lastInsertedId;
			$data = array('URL' => $post_url);
			$this->db->where('id',$lastInsertedId);
			$this->db->update('tbl_posts', $data);
		} else {
			$data = array('URL' => $post_url);
			$this->db->where('id',$lastInsertedId);
			$this->db->update('tbl_posts', $data);
		}
	}

	public function getAllPosts() {
		$this->db->select('*');
		$this->db->from('tbl_posts');

		return $this->db->get();
	}

	public function getPostInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_posts');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedPost($id, $photo) {
		$postTitle = $this->input->post('postTitle');
		$postStatus = $this->input->post('postStatus');
		$parentId = $this->input->post('parentId');

		$data = array(
			'PostTitle' => $postTitle,
			'PostContent' => $this->input->post('editor'),
			'Status' => $postStatus,
			'ParentPageId' => $parentId
			);

		$this->db->where('id', $id);
		$this->db->update('tbl_posts', $data);

		if(!empty($photo)) {
			$data1=array('PostImage' => $photo);
			$this->db->where('id',$id);
			$this->db->update('tbl_posts',$data1);
		}
	}

	public function getAllPostsByParentId($url) {

    // Sub Query
		$this->db->select('id')->from('tbl_pages')->where('URL', $url);
		$subQuery =  $this->db->get_compiled_select();

// Main Query
		$this->db->select('*');
		$this->db->from('tbl_posts');
		$this->db->where("ParentPageId IN ($subQuery)", NULL, FALSE);
		$this->db->where('Status', '1');
		return $this->db->get();
	}
}
