<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper("url");
		$this->load->model("Mdl_settings");
		$this->load->model("Mdl_pages");
		$this->load->model("Mdl_category");
		$this->load->model("Mdl_posts");
		$this->load->model("Mdl_dealers");
		$this->load->model("Mdl_staffs");
		$this->load->model("Mdl_certificates");
	}

	function _remap($url) {
        $this->index($url);
    }

	public function index($url) {
		$webTitle['WebTitle'] = $this->Mdl_pages->getWebTitleByURL($url);
		$settings['settingsArray'] = $this->Mdl_settings->listAllSettings();
		$navParentPages['parentMenuArray'] = $this->Mdl_pages->getAllActiveParentMenu();
		$navChildPages['childMenuArray'] = $this->Mdl_pages->getAllActiveChildMenu();
		$navCategory['categoryMenuArray'] = $this->Mdl_category->getAllActiveCategories();
		$pageData['AllPageData'] = $this->Mdl_pages->getAllPageDataByURL($url);
		$postData['FetchAllPosts'] = $this->Mdl_posts->getAllPostsByParentId($url);
		$dealerData['FetchAllDealers'] = $this->Mdl_dealers->getAllDealers();
		$this->load->view('front/header', array_merge($settings, $webTitle));
		$this->load->view('front/nav', array_merge($navParentPages, $navCategory));
		if ($url == "board-of-directors") {
			$allStaffsAndDesignationData['FetchAllStaffs'] = $this->Mdl_staffs->listAllStaffsAndDesignations();
			$this->load->view('front/bod', array_merge($pageData, $postData, $dealerData, $allStaffsAndDesignationData));
		} else if ($url == "our-certificate") {
			$allCertificates['FetchAllCertificates'] = $this->Mdl_certificates->getAllCertificates();
			$this->load->view('front/certificate', array_merge($pageData, $postData, $allCertificates));
		} else {
			$this->load->view('front/page', array_merge($pageData, $postData, $dealerData));
		}
//		$this->load->view('front/page', array_merge($pageData, $postData, $dealerData));
		$this->load->view('front/footer', array_merge($settings, $navChildPages, $navCategory));
	}
}
