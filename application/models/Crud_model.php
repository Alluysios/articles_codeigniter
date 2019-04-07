<?php 

class Crud_model extends CI_model{


	function __construct(){
		parent::__construct();
	}

	function insert_article($data){
	 	$this->db->insert('articles', $data); // this assumes that the array items have the same name as the DB fields
	}

	function edit_article($data, $id){
		$this->db->where('id', $id);
	 	$this->db->update('articles', $data); // this assumes that the array items have the same name as the DB fields
	}
	
	function delete_article($id){
		$this->db->delete('articles', array('id' => $id));
	}

	function check_owner($entry_id, $user_id) {
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}


	function read_articles($limit, $start){
		$this->db->select('title, description, img, thumbnail, date, articles.id, author_id, tank_users.username');
		$this->db->from('articles');
		$this->db->join('tank_users','tank_users.id=articles.author_id');
		$this->db->limit($limit, $start);
		$query = $this->db->get();

		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
			// return $query->result();
		}else{
			return FALSE;
		}
	}

	function read_article_detail($id) {
		$this->db->select('title, description, img, date, articles.id, author_id, tank_users.username, tank_users.email');
		$this->db->from('articles');
		$this->db->join('tank_users','tank_users.id=articles.author_id');
		$this->db->where('articles.id', $id);
		$query=$this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}
	
	public function record_count() {
		return $this->db->count_all("articles");
	}
}