<?php
class S2e extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('s2eModel');
		$this->load->model('s2eJson');
	}
	public function index()// home page
	{
		//$this->session->unset_userdata('aUserLogin');
		$sd = $this->session->all_userdata();
		//$this->load->library('calendar');
		//$length = count($sd);
		//if($sd['userID']===NULL){print_r('empty');}else{print_r('Full');}
		//var_dump($sd);
			if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('home');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('home');
				$this->load->view('footer');
			}/*
		
		$now= time();
		$datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
		$date= mdate($datestring);
		$tnow= unix_to_human($now);
		//var_dump($now);
		//var_dump($date);
		//var_dump($tnow);*/
	}
	public function login(){// login page
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Login';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function logout(){
		$sd = array('Name' => '', 'Email' => '', 'userID' => '', 'Login' => '', 'Subject' => '');
		$this->session->unset_userdata($sd);
		redirect('/s2e');
	}
	public function loginfail(){// login fail page
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Login';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('loginfail');
		$this->load->view('footer');
	}
	public function tips(){// tips page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | Tips';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('tips');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | Tips';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('tips');
				$this->load->view('footer');
			}
	}
	public function sTrack(){// strack page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | sTrack';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('strack');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | Tips';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('strack');
				$this->load->view('footer');
			}
	}
	public function about(){// about page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | About';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('about');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | About';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('about');
				$this->load->view('footer');
			}
	}
	public function contact(){//contact page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | Contact';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('contact');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | Contact';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('contact');
				$this->load->view('footer');
			}
	}
	public function howdoyoulearn(){// how do you learn page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | How Do You Learn';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('howdoyoulearn');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | How Do You Learn';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('howdoyoulearn');
				$this->load->view('footer');
			}
	}
	public function middleschool(){// middleschool page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | Middle School';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('middleschool');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | Middle School';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('middleschool');
				$this->load->view('footer');
			}
	}
	public function highschool(){// highschool page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | High School';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('highschool');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | High School';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('highschool');
				$this->load->view('footer');
			}
	}
	public function college(){// college page
		$sd = $this->session->all_userdata();
		if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | College';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('college');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | College';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('college');
				$this->load->view('footer');
			}
	}
	public function newstrack(){// new strack page
		
		$sd = $this->session->all_userdata();
		////var_dump($sd);
		if ( count($sd) <= 5){
				//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Login';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('registerfromstrack');
		$this->load->view('footer');
		}else{

		//Set page title

			$data['page_title'] = 'STUDY2EXCELL | New sTrack';
			$data['name'] = element('Name',$sd);
			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('logout', $data);
			$this->load->view('newstrack');
			$this->load->view('footer');
			////var_dump($sd);
		}/**/
	}
	public function cnewstrack(){// new strack page
		
		$sd = $this->session->all_userdata();
		
		//Set page title

			$data['page_title'] = 'STUDY2EXCELL | New sTrack';
			$data['name'] = element('Name',$sd);
			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('logout', $data);
			$this->load->view('cnewstrack');
			$this->load->view('footer');
			
	}
	public function subjects(){// subjects page
		
		$sd = $this->session->all_userdata();
		//var_dump($sd);
		if ( count($sd) <= 5){
				//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Register';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('registerfromstrack');
		$this->load->view('footer');
		}else{
			$subject = $this->session->userdata('Subject');
			if($subject == 'None'){redirect('/s2e/cnewstrack');}
			//get subject names
			$subjects = $this->s2eJson->getSubjects($sd);
			$subject = $this->session->userdata('Subject');
			//var_dump($subject);
			$uid = array('aUserID' => element('userID',$sd));
			$sub = $this->s2eModel->getSubjectID($subject);
			////var_dump($sub);
			$subid = $sub[0];
			//var_dump($subid);
			////var_dump($uid);
			$gdata = $this->s2eModel->getGraphData($subid, $uid);
			//var_dump($gdata);
			$n = count($gdata);
			while($n < 5){
				array_push($gdata, array('aStudyTime' => 0, 'aStudyDate' => ' ', 'aCurrentGrade' => 0, 'aStudyGoal' => ' '));
				$n++;
			}

			$data['page_title'] = 'STUDY2EXCELL | Subjects';
			$data['name'] = element('Name',$sd);
			$data['graph'] = $gdata;
			$data['subname'] = ucfirst($subject);
			$data['subjects'] = $subjects;

				//Load Page View
			$this->load->view('header', $data);
			$this->load->view('logout', $data);
			$this->load->view('subjects', $data);
			$this->load->view('footer');
			
			}
		
	}
	public function register(){// register page
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Register';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function registerValidation(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');
		
		// validats form input
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[12]|is_unique[aUser.aUserName]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[aUser.aUserEmail]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|is_unique[aUser.aUserPass]|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
		
		
		// message if username or email already exists
		$this->form_validation->set_message('is_unique', "That name is already in use");
		
		if ($this->form_validation->run() == FALSE)
		{
			// reload form
			$data['page_title'] = 'STUDY2EXCELL | Register';

			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('register');
			$this->load->view('footer');
		} else {
			
			// create new user
			
			$this->s2eModel->createNewUser();
			
			// create new session
			$name = $this->input->post('username');
			$this->db->select('aUserID');
			$query= $this->db->get_where('aUser',array('aUserName' => $name )); 
			$row = $query->result_array();
			$id = $row[0]['aUserID'];
			
			$newdata = array(
				'Name' => $this->input->post('username'),
				'Email' => $this->input->post('email'),
				'userID' => $id,
				'Login' => TRUE,
				'Subject' => 'None'
				);
			$this->session->set_userdata($newdata);
			
			
			redirect('/s2e');

			}
		}
		public function loginValidation(){
		$sd = $this->session->all_userdata();

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');
		
		// validats form input
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|md5');
		$this->form_validation->set_message('is_unique', "That name is already in use");

		$email = $this->input->post('email');//creates post for email
		$password = $this->input->post('password');// creates post for password
		$pass = md5($password);
		
		if ($this->form_validation->run() == FALSE)
		{
			// reload form
			$data['page_title'] = 'STUDY2EXCELL | Login';

			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('login');
			$this->load->view('footer');

		} else {

			$row = $this->s2eModel->getUsernamePass($email, $pass);//calls function to check email and password	
		
			if (!empty($row))
			{
				//if row is not empty get name and id
			$id = $row[0]['aUserID'];
			$name = $row[0]['aUserName'];
			
			//place new data in session data
			$newdata = array(
				'Name' => $name,
				'userID' => $id,
				'Login' => TRUE
				);
			// set new session data
			$this->session->set_userdata($newdata);
			redirect('/s2e');
			} else {
				// redirect to fail 
				redirect('/s2e/loginfail');
			}
		}
		}
		public function contactValidation(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');


		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
		$this->form_validation->set_rules('from', 'From', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		$subject = $this->input->post('subject');
		$from = $this->input->post('from');
		$message = $this->input->post('message');

		if($this->form_validation->run() == FALSE)
		{
			// reload form
			$data['page_title'] = 'STUDY2EXCELL | Contact';

			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('contact');
			$this->load->view('footer');
		} else {
			$this->email->from($from);
			$this->email->to('jb@study2excell.com');

			$this->email->subject($subject);
			$this->email->message($message);

			$this->email->send();

			$this->email->print_debugger();
		}
		redirect('/s2e');

		}
		public function newStrackValidation(){
			//Load validation and errors
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');

			// check input
		$this->form_validation->set_rules('date', 'Date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|strtolower|xss_clean');
		$this->form_validation->set_rules('currentgrade', 'Grade', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('goals', 'Goals', 'trim|required|xss_clean');

			//post input to variables
		$date = $this->input->post('date');
		$subject = $this->input->post('subject');
		$grade = $this->input->post('currentgrade');
		$goals = $this->input->post('goals');

		$newdata = array(
				'Subject' => strtolower($subject)
				);
			// set new session data
		$this->session->set_userdata($newdata);

			//get session data make inputted subjects all lowercase
		$sub = strtolower($subject);
		$sd = $this->session->all_userdata();
		////var_dump($sd);
		$uid = array('aUserID' => element('userID',$sd));
		$now = time();
		$tnow = unix_to_human($now);
				
			//validate data
		if($this->form_validation->run() == FALSE)
		{
			// reload form if failed
			$data['page_title'] = 'STUDY2EXCELL | New sTrack';

			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('newstrack');
			$this->load->view('footer');
		} else {
				//add subjects
			$row = $this->s2eModel->addNewSubject($sub);
			
			$subid = array('aSubjectID' => $row[0]['aSubjectID']);
				//add study session to database
			$this->s2eModel->addStudySession($subid, $uid);
			
			}
		}
		public function subjectUpdateValidation(){
			//Load validation and errors
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');

			// check input
		$this->form_validation->set_rules('date', 'Date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('studytime', 'Duration', 'trim|numeric|xss_clean');
		$this->form_validation->set_rules('grade', 'Grade', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('goals', 'Goals', 'trim|xss_clean');
			
			//post input to variables
		$date = $this->input->post('date');
		$stime = $this->input->post('studytime');
		$grade = $this->input->post('grade');
		$goals = $this->input->post('goals');
		$select = $this->input->post('sub');
			
			//validate data
		if($this->form_validation->run() == FALSE)
		{
			// reload form if data is bad
			$data['page_title'] = 'STUDY2EXCELL | Subjects';

			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('subjects');
			$this->load->view('footer');
		} else {
				//get subject ID's
			$subid = $this->s2eModel->getSubjectID($select);
		
			$subid1 = array('aSubjectID' => $subid[0]['aSubjectID']);
				//get session data to use in pulling from database
			$sd = $this->session->all_userdata();
			$uid = array('aUserID' => element('userID',$sd));
				//update database with input
			$this->s2eModel->updateSubjects($subid1, $uid);
				// get updated data to place into graph
			$gdata = $this->s2eModel->getGraphData($subid1, $uid);
		}
				// graph uses 5 points of data
				// add in empty arrays if there is not enough data for chart
			$n = count($gdata);
			while($n < 5){
				array_push($gdata, array('aStudyTime' => 0, 'aStudyDate' => '', 'aCurrentGrade' => 0, 'aStudyGoal' => ' '));
				$n++;
			}
			
				// Load page again
			$sd = $this->session->all_userdata();
			$subjects = $this->s2eJson->getSubjects($sd);

				
			$data['page_title'] = 'STUDY2EXCELL | Subjects';
			$data['name'] = element('Name',$sd);
			$data['graph'] = $gdata;
			$data['subname'] = ucfirst($select);
			$data['subjects'] = $subjects;

				//Load Page View
			$this->load->view('header', $data);
			$this->load->view('logout', $data);
			$this->load->view('subjects', $data);
			$this->load->view('footer');

		}
		public function privatep(){
		// home page
		$sd = $this->session->all_userdata();
		
			if ( count($sd) <= 5){
				$data['page_title'] = 'STUDY2EXCELL | Private Policy';

				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('privatep');
				$this->load->view('footer');
			}else{

				$data['page_title'] = 'STUDY2EXCELL | Private Policy';
				$data['name'] = element('Name',$sd);
				//Load Page View
				$this->load->view('header', $data);
				$this->load->view('logout', $data);
				$this->load->view('privatep');
				$this->load->view('footer');
			}
		}

}