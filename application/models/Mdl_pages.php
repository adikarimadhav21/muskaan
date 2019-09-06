<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_pages extends CI_Model {
	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');
	}

	public function submitPage() {
		$pageTitle = $this->input->post('page_title');
		$page_url = str_replace(' ', '-', strtolower($pageTitle));
		$pageStatus = $this->input->post('pageStatus');
		$parentId = $this->input->post('parentId');

		$this->db->where('PageTitle', $pageTitle);
		$query = $this->db->get('tbl_pages');

		$data = array(
			'PageTitle' => $pageTitle,
			'ParentId' => $parentId,
			'PageContent' => $this->input->post('editor'),
			'Status' => $pageStatus
			);

		$this->db->insert('tbl_pages', $data); 
		$lastInsertedId = $this->db->insert_id();

		if($query->num_rows() > 0) {
			$page_url = $page_url.'-'.$lastInsertedId;
			$data = array('URL' => $page_url);
			$this->db->where('id',$lastInsertedId);
			$this->db->update('tbl_pages', $data);
		} else {
			$data = array('URL' => $page_url);
			$this->db->where('id',$lastInsertedId);
			$this->db->update('tbl_pages', $data);
		}
	}

	public function getAllPages() {
		$this->db->select('*');
		$this->db->from('tbl_pages');

		return $this->db->get();
	}

	public function getPageInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_pages');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedPage($id) {
		$pageTitle = $this->input->post('page_title');
		$pageStatus = $this->input->post('pageStatus');
		$parentId = $this->input->post('parentId');

		$data = array(
			'PageTitle' => $pageTitle,
			'PageContent' => $this->input->post('editor'),
			'Status' => $pageStatus,
			'ParentId' => $parentId
			);

		$this->db->where('id', $id);
		$this->db->update('tbl_pages', $data);
	}

	public function getAllSubPages() {
		$this->db->select('*');
		$this->db->where('ParentId !=', 0, FALSE);
		$this->db->from('tbl_pages');

		return $this->db->get();
	}

	public function getAllActiveParentMenu() {
		$this->db->where('ParentId', '0');
		$this->db->where('Status', '1');
		return $this->db->get('tbl_pages')->result();
	}

	public function getActiveChildMenuByParentId($parentId) {
		$this->db->where('ParentId', $parentId);
		$this->db->where('Status', '1');
		return $this->db->get('tbl_pages')->result();
	}

	public function getAllActiveChildMenu() {
		$this->db->select('*');
		$this->db->from('tbl_pages');
		$this->db->where('Status', '1');
		$this->db->where('ParentId !=', 0, FALSE);

		return $this->db->get()->result();
	}

	public function getAllPageDataByURL($page_url) {
		$this->db->select('*');
		$this->db->from('tbl_pages');
		$this->db->where('URL', $page_url);
		$query= $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function getAboutPageInfo($page_url) {
		$this->db->select('*');
		$this->db->from('tbl_pages');
		$this->db->where('URL', $page_url);
		$this->db->where('Status', '1');
		$query= $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function getWebTitleByURL($url) {
		$this->db->select('WebTitle');
		$this->db->from('tbl_pages');
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
