<?php 
	class LoginPosts extends CI_Controller{
		public function loggedinpost(){
			$data['title'] = "User&apos;s Login";

			$data['posts'] = $this->post_model->get_posts();
			
			$this->load->view('templates/header');
			$this->load->view('posts/loggedin/index', $data);
			$this->load->view('templates/footer');
		}
	}

?>