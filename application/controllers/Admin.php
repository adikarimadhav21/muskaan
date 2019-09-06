<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->helper('string');
		$this->load->model('Mdl_users');
		$this->load->library('image_lib');
		$this->load->library('session');


  //       if(isset($_GET['pageid']))
		// {
		
		
		// 	// echo $_GET['pageid'];
		// 	$_SESSION['pageid']=$_GET['pageid'] ;
		// 	$this->index();

		// }
	}

	public function index() {
		$u=$this->session->userdata('username');
		if($u)
		{
			redirect('AdminDashboard');
		}
		else
		{
			$this->load->view('admin/login');
		}
		
	}

	public function loginCheck() {
		$result=$this->Mdl_users->loginCheck();
		if(count($result)>0)
		{

			$username = $this->input->post('username', TRUE);
			
			$this->session->set_userdata('username', $username);

			redirect('AdminDashboard');
		}
		else
		{
			$data['message']="Wrong Username or Password";
			$this->load->view('admin/login',$data);
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
