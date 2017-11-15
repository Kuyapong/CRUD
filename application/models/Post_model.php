<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('table_posts.id', 'DESC');
				$this->db->join('table_category', 'table_category.cat_id = table_posts.cat_id');
				$query = $this->db->get('table_posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('table_posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'post_image' => $post_image,
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'cat_id' => $this->input->post('category_id')

			);

			return $this->db->insert('table_posts', $data);
		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('table_posts');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'cat_id' => $this->input->post('category_id')
			);

			$this->db->where('id', $this->input->post('hid'));
			return $this->db->update('table_posts', $data);

		}

		public function get_categories(){
			$this->db->order_by('cat_name');
			$query = $this->db->get('table_category');
			return $query->result_array();
		}

		public function get_posts_category($category_id){
			$this->db->order_by('table_posts.id', 'DESC');
			$this->db->join('table_category', 'table_category.cat_id = table_posts.cat_id');
				$query = $this->db->get_where('table_posts', array('table_category.cat_id' => $category_id));
				return $query->result_array();
		}
	}