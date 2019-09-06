<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_product extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');

	}

	public function submitProduct($photo1, $photo2, $photo3)
	{
		$productName = $this->input->post('productName');
		$categoryId = $this->input->post('parent_category');
		$productStatus = $this->input->post('status');
		$product_url = str_replace(' ', '-', strtolower($productName));

		$this->db->where('ProductName', $productName);
		$query = $this->db->get('tbl_product');

		$data = array(
			'CategoryId' => $categoryId,
			'ProductName' => $productName,
			'ProductDesc' => $this->input->post('editor'),
			'ProductImage1' => $photo1,
			'ProductImage2' => $photo2,
			'ProductImage3' => $photo3,
			'Status' => $productStatus
		);

		$this->db->insert('tbl_product', $data);
		$lastInsertedId = $this->db->insert_id();

		if ($query->num_rows() > 0) {
			$productURL = $product_url . '-' . $lastInsertedId;
			$data = array('URL' => $productURL);
			$this->db->where('id', $lastInsertedId);
			$this->db->update('tbl_product', $data);
		} else {
			$data = array('URL' => $product_url);
			$this->db->where('id', $lastInsertedId);
			$this->db->update('tbl_product', $data);
		}
	}

	public function listAllProducts()
	{
		$this->db->select('*');
		$this->db->from('tbl_product');

		return $this->db->get();
	}

	public function getProductInfoById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_product');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}

	public function submitUpdatedProduct($id, $photo1, $photo2, $photo3)
	{
		$productName = $this->input->post('productName');
		$categoryId = $this->input->post('parent_category');
		$productStatus = $this->input->post('status');

		$data = array(
			'CategoryId' => $categoryId,
			'ProductName' => $productName,
			'ProductDesc' => $this->input->post('editor'),
			'Status' => $productStatus
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_product', $data);

		if (!empty($photo1)) {
			$data1 = array('ProductImage1' => $photo1);
			$this->db->where('id', $id);
			$this->db->update('tbl_product', $data1);
		}
		if (!empty($photo2)) {
			$data1 = array('ProductImage2' => $photo2);
			$this->db->where('id', $id);
			$this->db->update('tbl_product', $data1);
		}
		if (!empty($photo3)) {
			$data1 = array('ProductImage3' => $photo3);
			$this->db->where('id', $id);
			$this->db->update('tbl_product', $data1);
		}
	}

	public function getAllProductsByCategoryId($url)
	{
		//Sub Query
		$this->db->select('id')->from('tbl_category')->where('URL', $url);
		$subQuery = $this->db->get_compiled_select();

		// Main Query
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where("CategoryId IN ($subQuery)", NULL, FALSE);
		$this->db->where('Status', '1');
		return $this->db->get();
	}

	public function getProductInformationByURL($page_url)
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('URL', $page_url);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		} else return null;
	}

	public function getLatestProductsOrderedById() {
		$sql = "SELECT * FROM tbl_product WHERE Status = '1' ORDER BY id DESC limit 4";
		return $this->db->query($sql);
	}

	public function getWebTitleByURL($url) {
		$this->db->select('WebTitle');
		$this->db->from('tbl_product');
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
