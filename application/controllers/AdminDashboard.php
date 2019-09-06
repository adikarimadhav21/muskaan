<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->helper('string');
		$this->load->library('image_lib');
		// $this->load->library('session');
		$this->load->model('Mdl_users');
		$this->load->model('Mdl_category');
		$this->load->model('Mdl_product');
		$this->load->model('Mdl_pages');
		$this->load->model('Mdl_posts');
		$this->load->model('Mdl_slideshow');
		$this->load->model('Mdl_settings');
		$this->load->model('Mdl_dealers');
		$this->load->model('Mdl_staffs');
		$this->load->model('Mdl_certificates');
	}

	public function index() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}
	}

	public function addUser() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/user/addUser');
			$this->load->view('admin/footer');
		}
		}
	}

	public function addNewUser() {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_users->addNewUser($photo);
		redirect('AdminDashboard/viewAllUsers');
	}

	public function viewAllUsers() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$userdata['users'] = $this->Mdl_users->listAllUsers();
			$this->load->view('admin/user/viewAllUsers', $userdata);
			$this->load->view('admin/footer');
		}
	}

	public function viewUser($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$userdata['users'] = $this->Mdl_users->getUserInfoById($id);
			$this->load->view('admin/user/viewUser', $userdata);
			$this->load->view('admin/footer');
		}
	}

	public function updatePassword($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$postData['userArray'] = $this->Mdl_users->getUserInfoById($id);
			$this->load->view('admin/user/updatePassword', $postData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedPassword($id) {
		$this->Mdl_users->submitUpdatedUserPassword($id);
		redirect('AdminDashboard/viewAllUsers');
	}

	public function updateUser($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$postData['userArray'] = $this->Mdl_users->getUserInfoById($id);
			$this->load->view('admin/user/updateUser', $postData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedUser($id) {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_users->submitUpdatedUser($id, $photo);
		redirect('AdminDashboard/viewAllUsers');
	}

	public function addCategory() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/category/addCategory');
			$this->load->view('admin/footer');
		}
	}

	public function submitCategory() {
		$this->Mdl_category->submitCategory();
		redirect('AdminDashboard/viewAllCategories');
	}

	public function viewAllCategories() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$categoryData['allCategories'] = $this->Mdl_category->getAllCategories();
			$this->load->view('admin/category/viewAllCategories', $categoryData);
			$this->load->view('admin/footer');
		}
	}

	public function updateCategory($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$categoryData['CategoryById'] = $this->Mdl_category->getCategoryInfoById($id);
			$this->load->view('admin/category/updateCategory', $categoryData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedCategory($id) {
		$this->Mdl_category->submitUpdatedCategory($id);
		redirect('AdminDashboard/viewAllcategories');
	}

	public function addProduct() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$categoryData['getAllCategories'] = $this->Mdl_category->getAllCategories();
			$this->load->view('admin/product/addProduct', $categoryData);
			$this->load->view('admin/footer');
		}
	}

	public function submitProduct() {
		$photo1 = $this->uploadfile($_FILES['photo1']['name'], "photo1");
		$photo2 = $this->uploadfile($_FILES['photo2']['name'], "photo2");
		$photo3 = $this->uploadfile($_FILES['photo3']['name'], "photo3");
		$this->Mdl_product->submitProduct($photo1, $photo2, $photo3);
		redirect('AdminDashboard/viewAllProducts');
	}

	public function viewAllProducts() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$productData['listAllProducts'] = $this->Mdl_product->listAllProducts();
			$productData['listAllCategories'] = $this->Mdl_category->getAllCategories();
			$this->load->view('admin/product/viewAllProducts', $productData);
			$this->load->view('admin/footer');
		}
	}

	public function UpdateProduct($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$productData['ProductById'] = $this->Mdl_product->getProductInfoById($id);
			$this->load->view('admin/product/updateProduct', $productData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedProduct($id) {
		$photo1 = $this->uploadfile($_FILES['photo1']['name'], "photo1");
		$photo2 = $this->uploadfile($_FILES['photo2']['name'], "photo2");
		$photo3 = $this->uploadfile($_FILES['photo3']['name'], "photo3");
		$this->Mdl_product->submitUpdatedProduct($id, $photo1, $photo2, $photo3);
		redirect('AdminDashboard/viewAllProducts');
	}

	public function addPage() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$categoryData['getAllCategories'] = $this->Mdl_category->getAllCategories();
			$this->load->view('admin/pages/addPage', $categoryData);
			$this->load->view('admin/footer');
		}
	}

	public function submitPage() {
		$this->Mdl_pages->submitPage();
		redirect('AdminDashboard/viewAllPages');
	}

	public function viewAllPages() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$productData['listAllPages'] = $this->Mdl_pages->getAllPages();
			$this->load->view('admin/pages/viewAllPages', $productData);
			$this->load->view('admin/footer');
		}
	}

	public function updatePage($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$pageData['PageInfoById'] = $this->Mdl_pages->getPageInfoById($id);
			$this->load->view('admin/pages/updatePage', $pageData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedPage($id) {
		$this->Mdl_pages->submitUpdatedPage($id);
		redirect('AdminDashboard/viewAllPages');
	}

	public function addPost() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$pageData['AllPages'] = $this->Mdl_pages->getAllSubPages();
			$this->load->view('admin/post/addPost', $pageData);
			$this->load->view('admin/footer');
		}
	}

	public function submitPost() {
		$photo = $this->uploadfile($_FILES['photo']['name'], "photo");
		$this->Mdl_posts->submitPost($photo);
		redirect('AdminDashboard/viewAllPosts');
	}

	public function viewAllPosts() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$PostData['listAllPosts'] = $this->Mdl_posts->getAllPosts();
			$this->load->view('admin/post/viewAllPosts', $PostData);
			$this->load->view('admin/footer');
		}
	}

	public function updatePost($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$pageData['AllSubPages'] = $this->Mdl_pages->getAllSubPages();
			$pageData['PostInfoById'] = $this->Mdl_posts->getPostInfoById($id);
			$this->load->view('admin/post/updatePost', $pageData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedPost($id) {
		$photo = $this->uploadfile($_FILES['photo']['name'], "photo");
		$this->Mdl_posts->submitUpdatedPost($id, $photo);
		redirect('AdminDashboard/viewAllPosts');
	}

	public function addSlideshow() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/slideshow/addSlideshow');
			$this->load->view('admin/footer');
		}
	}

	public function submitSlideshow() {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_slideshow->submitSlide($photo);
		redirect('AdminDashboard/viewAllSlides');
	}

	public function viewAllSlides() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$slideshow['AllSlides'] = $this->Mdl_slideshow->listAllSlides();
			$this->load->view('admin/slideshow/viewAllSlides', $slideshow);
			$this->load->view('admin/footer');
		}
	}

	public function UpdateSlide($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$slideData['SlideInfoById'] = $this->Mdl_slideshow->getSlideInfoById($id);
			$this->load->view('admin/slideshow/updateSlide', $slideData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedSlide($id) {
		$photo = $this->uploadfile($_FILES['photo']['name'], "photo");
		$this->Mdl_slideshow->submitUpdatedSlide($id, $photo);
		redirect('AdminDashboard/viewAllSlides');
	}

	public function addSettings() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/settings/addWebSettings');
			$this->load->view('admin/footer');
		}
	}

	public function SubmitSettings() {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_settings->submitSettings($photo);
		redirect('AdminDashboard/viewWebsiteSettings');
	}

	public function viewWebsiteSettings() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$settings['WebsiteSettings'] = $this->Mdl_settings->listWebsiteSettings();
			$this->load->view('admin/settings/viewWebsiteSettings', $settings);
			$this->load->view('admin/footer');
		}
	}

	public function EditWebsiteSettings() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$settings['WebsiteSettings'] = $this->Mdl_settings->listWebsiteSettings();
			$this->load->view('admin/settings/EditWebsiteSettings', $settings);
			$this->load->view('admin/footer');
		}
	}

	public function UpdateWebsiteSettings() {
		$photo = $this->uploadfile($_FILES['photo']['name'], "photo");
		$this->Mdl_settings->submitUpdatedWebsiteSettings($photo);
		redirect('AdminDashboard/viewWebsiteSettings');
	}

	public function addDealer() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$pageData['AllPages'] = $this->Mdl_pages->getAllSubPages();
			$this->load->view('admin/dealer/addDealer', $pageData);
			$this->load->view('admin/footer');
		}
	}

	public function SubmitDealer() {
		$this->Mdl_dealers->SubmitDealer();
		redirect('AdminDashboard/viewAllDealers');
	}

	public function viewAllDealers() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$dealerData['listAllDealers'] = $this->Mdl_dealers->getAllDealers();
			$this->load->view('admin/dealer/viewAllDealers', $dealerData);
			$this->load->view('admin/footer');
		}
	}

	public function UpdateDealer($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$dealerData['DealerInfoById'] = $this->Mdl_dealers->getDealerInfoById($id);
			$this->load->view('admin/dealer/updateDealer', $dealerData);
			$this->load->view('admin/footer');
		}
	}

	public function SubmitUpdatedDealer($id) {
		$this->Mdl_dealers->submitUpdatedDealer($id);
		redirect('AdminDashboard/viewAllDealers');
	}

	public function addDesignation() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/staffs/addDesignation');
			$this->load->view('admin/footer');
		}
	}

	public function submitDesignation() {
		$this->Mdl_staffs->submitDesignations();
		redirect('AdminDashboard/viewAllDesignations');
	}

	public function viewAllDesignations() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$staffData['designations'] = $this->Mdl_staffs->listAllDesignations();
			$this->load->view('admin/staffs/viewAllDesignations', $staffData);

			$this->load->view('admin/footer');
		}
	}

	public function updateDesignation($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$staffData['designationById'] = $this->Mdl_staffs->getDesigationById($id);
			$this->load->view('admin/staffs/updateDesignation', $staffData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedDesignation($id) {
		$this->Mdl_staffs->submitUpdatedDesignation($id);
		redirect('AdminDashboard/viewAllDesignations');
	}

	public function addStaff() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$allDesignations['allDesignations'] = $this->Mdl_staffs->listAllDesignations();
			$this->load->view('admin/staffs/addStaff', $allDesignations);
			$this->load->view('admin/footer');
		}
	}

	public function submitStaff() {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_staffs->submitStaff($photo);
		redirect('AdminDashboard/viewAllStaffs');
	}

	public function viewAllStaffs() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$staffData['allStaffs'] = $this->Mdl_staffs->listAllStaffsWithDesignation();
			$this->load->view('admin/staffs/viewAllStaffs', $staffData);
			$this->load->view('admin/footer');
		}
	}

	public function UpdateStaff($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$staffData['staffById'] = $this->Mdl_staffs->getStaffInfoById($id);
			$staffData['designations'] = $this->Mdl_staffs->getDesignationsByDesignationId();
			$this->load->view('admin/staffs/updateStaff', $staffData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedStaff($id) {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_staffs->submitUpdatedStaff($id, $photo);
		redirect('AdminDashboard/viewAllStaffs');
	}

	public function DeleteStaff($id) {
		$this->Mdl_staffs->deleteStaffById($id);
		redirect('AdminDashboard/viewAllStaffs');
	}

	public function addCertificate() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$this->load->view('admin/certificate/addCertificate');
			$this->load->view('admin/footer');
		}
	}

	public function submitCertificate() {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_certificates->submitCertificate($photo);
		redirect('AdminDashboard/viewAllCertificates');
	}

	public function viewAllCertificates() {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$certificateData['allcertificates'] = $this->Mdl_certificates->getAllCertificates();
			$this->load->view('admin/certificate/viewAllCertificates', $certificateData);
			$this->load->view('admin/footer');
		}
	}

	public function updateCertificate($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$data['currentUser']=$this->Mdl_users->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $data);
			$certificateInfo['certifiateInfoById'] = $this->Mdl_certificates->getCertificateInfoById($id);
			$this->load->view('admin/certificate/updateCertificate', $certificateInfo);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedCertificate($id) {
		$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_certificates->submitUpdatedCertificate($id, $photo);
		redirect('AdminDashboard/viewAllCertificates');
	}

	public function deleteCertificate($id) {
		$this->Mdl_certificates->deleteCertificateById($id);
		redirect('AdminDashboard/viewAllCertificates');
	}

	public function Logout()
	{

		$u=$this->session->userdata('username');
		if($u)
		{

			$this->session->unset_userdata('username');
			$this->session->sess_destroy();

			redirect('Admin');
		}
	}

	public function uploadfile($actual_filename,$userfile)
	{
      // Load the library - no config specified here
		$this->load->library('upload');

            // Check if there was a file uploaded - there are other ways to
            // check this such as checking the 'error' for the file - if error
            // is 0, you are good to code


		if (!empty($actual_filename))
		{

                    // Specify configuration for File 1
			$config['upload_path'] = './application/assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';

                    // $config['max_size'] = '100';
                    // $config['max_width']  = '10024';
                    // $config['max_height']  = '7680';
			$newFileName = $actual_filename;
			$fileExt = array_pop(explode(".", $newFileName));

			$filename = random_string('alnum', 20) . "." . $fileExt;
			$config['file_name'] = $filename;

                    // Initialize config for File 1
			$this->upload->initialize($config);

                    // Upload file 1
			if ($this->upload->do_upload($userfile)) {
				$image_data = $this->upload->data();

                        //this is the magic line that enables you generate multiple thumbnails
                        //you have to call the initialize() function each time you call the resize()
                        //otherwise it will not work and only generate one thumbnail
				$this->image_lib->initialize($config);
				$this->image_lib->resize();

				$config = array('source_image' => $image_data['full_path'], 'new_image' => './application/assets/uploads/min', 'maintain_ratio' => true, 'height' => 128,'width'=>128, 'file_name' => $filename);

                        //here is the second thumbnail, notice the call for the initialize() function again
				$this->image_lib->initialize($config);
				$this->image_lib->resize();



			} else {
				echo $this->upload->display_errors();
			}
			return $filename;
		}
		else
			return $actual_filename;
	}
}
