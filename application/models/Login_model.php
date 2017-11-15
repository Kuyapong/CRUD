<?php
		
	class Login_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_user($user_image){

			$finalpass = md5($this->input->post('password'));

			$data = array(
				'user_pic' => $user_image,
				'user_fname' => $this->input->post('fname'),
				'user_lname' => $this->input->post('lname'),
				'user_username' => $this->input->post('uname'),
				'user_pass' => $finalpass

			);
			return $this->db->insert('table_user', $data);
		}
	}

?>