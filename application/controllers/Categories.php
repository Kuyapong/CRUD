<?php

	class Categories extends CI_Controller{
		public function index(){
			$data['title'] = "Categories";

			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('categories/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = "Create Category";

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('categories/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->category_model->create_category();
				redirect('categories');
			}
		}

		public function posts($id){
			echo $id;
			$data['posts'] = $this->post_model->get_posts_category($id);
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
			/*$data['title'] = $this->category_model->get_categories($id)->cat_name;

			$data['posts'] = $this->post_model->get_posts_category($id);

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');*/

		}

		public function edit($id){

			$data['title'] = 'Edit Category';
			$data['categories'] = $this->category_model->edit_category($id);
			$this->load->view('templates/header');
			$this->load->view('categories/edit', $data);
			$this->load->view('templates/footer');
		}

		public function delete($id){
			$this->category_model->delete_category($id);
			redirect('categories');
		}

		public function update($id){
			$this->category_model->update_category($id);
			redirect('categories');
		}
	}

?>