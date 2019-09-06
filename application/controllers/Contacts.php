<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();

		$this->load->helper("url");
		$this->load->model("Mdl_settings");
		$this->load->model("Mdl_pages");
		$this->load->model("Mdl_category");
		$this->load->model("Mdl_posts");

		$this->load->library('form_validation');

	}

	public function index()
	{
		$settings['settingsArray'] = $this->Mdl_settings->listAllSettings();
		$navParentPages['parentMenuArray'] = $this->Mdl_pages->getAllActiveParentMenu();
		$navChildPages['childMenuArray'] = $this->Mdl_pages->getAllActiveChildMenu();
		$navCategory['categoryMenuArray'] = $this->Mdl_category->getAllActiveCategories();
		$this->load->view('front/header', $settings);
		$this->load->view('front/nav', array_merge($navParentPages, $navCategory));
		$data['postData'] = $this->loadView();
		$this->load->view('front/contacts', array_merge($data, $settings));
		$this->load->view('front/footer', array_merge($settings, $navChildPages, $navCategory));
	}

	public function loadView()
	{
		$data = $formData = array();

		// If contact request is submitted
		if ($this->input->post('contactSubmit')) {

			// Get the form data
			$formData = $this->input->post();

			// Form field validation rules
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'required');

			// Validate submitted form data
			if ($this->form_validation->run() == true) {

				// Define email data
				$mailData = array(
					'name' => $formData['name'],
					'email' => $formData['email'],
					'message' => $formData['message']
				);

				// Send an email to the site admin
				$send = $this->sendEmail($mailData);

				// Check email sending status
				if ($send) {
					// Unset form data
					$formData = array();

					$data['status'] = array(
						'type' => 'success',
						'msg' => 'Your contact request has been submitted successfully.'
					);
				} else {
					$data['status'] = array(
						'type' => 'error',
						'msg' => 'Some problems occured, please try again.'
					);
				}
			}
		}
		return $formData;
	}

	private function sendEmail($mailData)
	{
		// Load the email library
		$this->load->library('email');

		// Mail config
		$to = 'raz3sss@gmail.com';
		$from = 'info@manakamanakagaj.com.np';
		$fromName = 'Manakamana Kagaj Udhyog';
		$mailSubject = 'Contact Form Submitted by ' . $mailData['name'];

		// Mail content
		$mailContent = '
            <h2>Contact Form Submitted</h2>
            <p><b>Name: </b>' . $mailData['name'] . '</p>
            <p><b>Email: </b>' . $mailData['email'] . '</p>
            <p><b>Message: </b>' . $mailData['message'] . '</p>
        ';

		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from($from, $fromName);
		$this->email->subject($mailSubject);
		$this->email->message($mailContent);

		// Send email & return status
		return $this->email->send() ? true : false;
	}


}
