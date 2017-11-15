<?php

	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function create_category(){
			$data = array(
				'cat_name' => $this->input->post('name')
				);
			return $this->db->insert('table_category', $data);
		}

		public function get_categories(){
			$this->db->order_by('cat_name');
			$query = $this->db->get('table_category');
			return $query->result_array();
		}

		public function edit_category($id){
			$this->db->where('cat_id', $id);
			$query = $this->db->get('table_category');
			return $query->result_array();
		}

		public function delete_category($id){
			$this->db->where('cat_id', $id);
			$this->db->delete('table_category');
			return true;
		}

		public function update_category($id){
			$slug = url_title($this->input->post('category_name'));

			$data = array(
				'cat_name' => $this->input->post('category_name')
			);

			$this->db->where('cat_id', $id);
			return $this->db->update('table_category', $data);

		}
	}