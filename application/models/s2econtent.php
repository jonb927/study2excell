<?php
class S2econtent extends CI_Model {

	public function __construct(){
	
		$this->load->database();
	}
	public function getHomeArticles(){
		$query = $this->db->get('aHomePage');
		$row = $query->result_array();
		
		return $row;
	}
	public function getTipArticles(){
		$query = $this->db->get('aTipsPage');
		$row = $query->result_array();
		
		return $row;
	}
	public function getMiddleschoolArticles(){
		$query = $this->db->get('aMiddleschoolPage');
		$row = $query->result_array();
		
		return $row;
	}
	public function getHighschoolArticles(){
		$query = $this->db->get('aHighschoolPage');
		$row = $query->result_array();
		
		return $row;
	}
	public function getCollegeArticles(){
		$query = $this->db->get('aCollegePage');
		$row = $query->result_array();
		
		return $row;
	}
}