<?php 
	class Account extends CI_Controller{
		public function login(){
			$data['title'] = "User&apos;s Login";

			$this->form_validation->set_rules('uname', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('account/login', $data);
				$this->load->view('templates/footer');
			}else{
				
			}
		}

		public function register(){
			$data['title'] = "Registration Form";
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('uname', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('account/register', $data);
				$this->load->view('templates/footer');
			}
			else{
				//upload image
				$config['upload_path'] = './assets/images/users';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_height'] = '500';
				$config['max_width'] = '500';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$user_image = 'noimage.png';
				}else{
					$data = array('upload_data' => $this->upload->data());
					$user_image = $_FILES['userfile']['name'];
				}

				$this->login_model->create_user($user_image);
				redirect('posts');
			}
		}
	}