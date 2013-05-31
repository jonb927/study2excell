<?php
class S2egraph extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getLastSubject($sess){
			//get users subject id's
		$uid = array('aUserID' => element('userID',$sess));
		
		$this->db->select_max('aStudySessionID');
		$this->db->where($uid);
		$query1 = $this->db->get('aStudySession');
		$row = $query1->result_array();

		$ssid = $row[0]['aStudySessionID'];
		$this->db->select('aSubjectID');
		$this->db->where('aStudySessionID', $ssid);
		$query1 = $this->db->get('aStudySession');
		$row = $query1->result_array();

		$sid = $row[0]['aSubjectID'];
		$this->db->select('aSubjectName');
		$this->db->where('aSubjectID', $sid);
		$query1 = $this->db->get('aSubject');
		$row = $query1->result_array();
		return $row;
	}
	public function getSubjects($sess){
		//var_dump($sess);

			//get users subject id's
		$uid = array('aUserID' => element('userID',$sess));
		
		$this->db->select('aSubjectID');
		$this->db->where($uid);
		$query1 = $this->db->get('aStudySession');
		$row = $query1->result_array();
		$fresults = array();
		foreach ($row as $key => $value) {
			$result = $row[$key]['aSubjectID'];
			array_push($fresults, $result);
		}
		$result = array_unique($fresults);
		//var_dump($result);
		//get users subjects
		$subjects = array();
		foreach ($result as $key => $value) {
			# code...
			$result1 = array('aSubjectID' => $result[$key]);
			//array_push($subjects, $result1);
			$this->db->select('aSubjectName');
			$this->db->where($result1);
			$query2 = $this->db->get('aSubject');
			$row = $query2->result_array();
			//var_dump($row);
			array_push($subjects, $row[0]);
			
		}//var_dump($subjects);
		return $subjects;
	}
	public function getCode($user){
		$array = array('aAdminUser' => $user);
		//var_dump($array);
		$this->db->select('aAdminSalt');
		$this->db->where($array);
		$query = $this->db->get('aAdmin');

		$row = $query->result_array();
		//var_dump($row);
		if($row > 0){
			return $row;
		}else{
			redirect('/s2earchive');
		}
	}
	public function getPass($pass){
		$array = array('aAdminPass' => $pass);
		$this->db->select('aAdminUser');//passes variables into database
		$this->db->where($array);
		$query = $this->db->get('aAdmin');//querys database
		$row = $query->result_array();
		//var_dump($row[0]['aUserID']);
		
		if($row > 0)
		{
			return $row;

		} else {
			redirect('/s2earchive/adminloginfail');
		}
	}
	public function archiveArticle(){
		//select the previoius article
		$sd = $this->session->all_userdata();
		$this->db->select($sd['Title']); 
		$this->db->select($sd['Content']);
		$this->db->select('aArticleType');
		$query = $this->db->get($sd['Page']);
		$row = $query->result_array();

		//insert the precious article into the article archive
		/**/$this->db->set('aArticleType', $row[0]['aArticleType']);
		$this->db->set('aArticleTitle', $row[0][$sd['Title']]);
		$this->db->set('aArticleContent', $row[0][$sd['Content']]);
		$this->db->insert('aArticle');

		// update the article with the new article
		$array = array( $sd['Title'] => $this->input->post('Title'), $sd['Content'] => $this->input->post('Message'));
		$this->db->update($sd['Page'], $array);
		//var_dump($array);
		redirect('s2earchive/updatecomplete');

	}
	
}