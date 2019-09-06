<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('url');
		$this->load->model("Mdl_settings");
		$this->load->model("Mdl_pages");
		$this->load->model("Mdl_category");
		$this->load->model("Mdl_slideshow");
		$this->load->model("Mdl_product");
	}

	public function index() {
		$settings['settingsArray'] = $this->Mdl_settings->listAllSettings();
		$navParentPages['parentMenuArray'] = $this->Mdl_pages->getAllActiveParentMenu();
		$navChildPages['childMenuArray'] = $this->Mdl_pages->getAllActiveChildMenu();
		$navCategory['categoryMenuArray'] = $this->Mdl_category->getAllActiveCategories();
		$slideData['AllActiveSlides'] = $this->Mdl_slideshow->getAllActiveSlideshow();
		$latestProductData['LatestProducts'] = $this->Mdl_product->getLatestProductsOrderedById();
		$pageData['PageData'] = $this->Mdl_pages->getAboutPageInfo("about-us");
		$this->load->view('front/header', $settings);
		$this->load->view('front/nav', array_merge($navParentPages, $navCategory));
		$this->load->view('front/slide', $slideData);
		$this->load->view('front/index', array_merge($pageData, $latestProductData));
		$this->load->view('front/footer', array_merge($settings, $navChildPages, $navCategory));
	}
}
