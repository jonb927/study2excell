<?php
class S2eModel extends CI_Model {

	public function __construct(){
	
		$this->load->database();
	}
	public function createNewUser(){

		$data = array(
		'aUserName' => $this->input->post('username'),
		'aUserPass' => $this->input->post('password'),
		'aUserEmail' => $this->input->post('email'),
		'aUserLogin' => $this->input->post(TRUE)
		);

		$query = $this->db->insert('aUser', $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	public function getSubjectID($sub){
		$array = array('aSubjectName' => $sub);

		$this->db->select('aSubjectID');
		$this->db->where($array);
		$query1 = $this->db->get('aSubject');
		$row = $query1->result_array();
		return $row;
	}
	public function addNewSubject($sub){
		//check if subject exists
		$array = array('aSubjectName' => $sub);
		//var_dump($array);
		$this->db->select('aSubjectID');
		$this->db->where($array);
		$query1 = $this->db->get('aSubject');
		$row = $query1->result_array();

		//if it exists return row if not insert it into database
		if(!empty($row)){
			return $row;
		}else{
			$data = array(
			'aSubjectName' => $this->input->post('subject')
			);
		
			$query2 = $this->db->insert('aSubject', $data);
			$this->db->select('aSubjectID');
			$this->db->where($data);
			$query2 = $this->db->get('aSubject');

			$row1 = $query2->result_array();	
			//var_dump($row1);
			return $row1;
		}
	}
	public function addStudySession($subid, $uid){
		//var_dump($subid);
		//var_dump($uid);
		
		$data = array(
		'aSubjectID' => element('aSubjectID',$subid),
		'aUserID' => element('aUserID',$uid),
		'aStudyDate' => $this->input->post('date'),
		'aCurrentGrade' => $this->input->post('currentgrade'),
		'aStudyGoal' => $this->input->post('goals')
		);
		//var_dump($data);
		$query = $this->db->insert('aStudySession', $data);
		//var_dump($query);
		
		redirect('/s2e/subjects');
		/**/
	}
	public function getUsernamePass($email, $pass){
		$array = array('aUserEmail' => $email, 'aUserPass' => $pass);
		$this->db->select('aUserEmail, aUserPass, aUserID, aUserName');//passes variables into database
		$this->db->where($array);
		$query = $this->db->get('aUser');//querys database
		$row = $query->result_array();
		//var_dump($row[0]['aUserID']);
		
		if($row > 0)
		{
			return $row;

		} else {
			//redirect to the home page
			redirect('/s2e/loginfail');
		}
	}
	public function updateSubjects($subid, $uid){

		//data array to update to database
		$data = array(
		'aSubjectID' => element('aSubjectID',$subid),
		'aUserID' => element('aUserID',$uid),
		'aStudyDate' => $this->input->post('date'),
		'aStudyTime' => $this->input->post('studytime'),
		'aCurrentGrade' => $this->input->post('grade'),
		'aStudyGoal' => $this->input->post('goals')
		);
		//var_dump($data);

		//insert data into table
		$query = $this->db->insert('aStudySession', $data);
		//var_dump($query);
	}	
		public function getGraphData($subid, $uid){
		
		//get last 5 study times dates, and current grades
		$array = array('aUserID' => $uid['aUserID'], 'aSubjectID' => $subid['aSubjectID']);
		$this->db->order_by('aStudyDate', 'desc');
		$this->db->select('aStudyTime, aStudyDate, aCurrentGrade, aStudyGoal');
		//$this->db->select_max('aUpdateTime');
		$this->db->where($array);
		$query = $this->db->get('aStudySession', 5);
		
		$row = $query->result_array();
		
		return $row;
	}

}