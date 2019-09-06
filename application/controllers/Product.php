<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper("url");
		$this->load->model("Mdl_settings");
		$this->load->model("Mdl_pages");
		$this->load->model("Mdl_category");
		$this->load->model("Mdl_posts");
		$this->load->model("Mdl_product");

	}

	function _remap($url) {
		$this->index($url);
	}

	public function index($url) {
		$webTitle['WebTitle'] = $this->Mdl_product->getWebTitleByURL($url);
		$settings['settingsArray'] = $this->Mdl_settings->listAllSettings();
		$navParentPages['parentMenuArray'] = $this->Mdl_pages->getAllActiveParentMenu();
		$navChildPages['childMenuArray'] = $this->Mdl_pages->getAllActiveChildMenu();
		$navCategory['categoryMenuArray'] = $this->Mdl_category->getAllActiveCategories();
		$categoryData['AllCategoryData'] = $this->Mdl_category->getAllCategoryDataByURL($url);
		$productData['FetchAllProducts'] = $this->Mdl_product->getAllProductsByCategoryId($url);
		$productDataByURL['FetchProductDataByURL'] = $this->Mdl_product->getProductInformationByURL($url);
		$this->load->view('front/header', array_merge($settings, $webTitle));
		$this->load->view('front/nav', array_merge($navParentPages, $navCategory));
		$this->load->view('front/product', $productDataByURL);
		$this->load->view('front/footer', array_merge($settings, $navChildPages, $navCategory));
	}
}
