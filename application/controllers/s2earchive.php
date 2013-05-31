<?php
class S2earchive extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('s2eModel');
		$this->load->model('s2egraph');
	}
	public function index()// home page
	{
		$newdata = array(
				'Login' => FALSE
				);
		$this->session->set_userdata($newdata);
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Admin Login';

		//Load Page View
		$this->load->view('adminheader', $data);
		$this->load->view('adminlogin');
		$this->load->view('adminfooter');

	}
	public function articles(){
		$sd = $this->session->all_userdata();
		if($sd['Login']===false){
			redirect('/s2earchive');
		}
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Admin Home';

		//Load Page View
		$this->load->view('adminheader', $data);
		$this->load->view('article');
		$this->load->view('adminfooter');
	}
	public function updateArticle(){
		$sd = $this->session->all_userdata();
		if($sd['Login']===false){
			redirect('/s2earchive');
		}
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Admin Login';

		//Load Page View
		$this->load->view('adminheader', $data);
		$this->load->view('updateArticle');
		$this->load->view('adminfooter');
	}
	public function updatecomplete(){
		$sd = $this->session->all_userdata();
		if($sd['Login']===false){
			redirect('/s2earchive');
		}
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Update Complete';

		//Load Page View
		$this->load->view('adminheader', $data);
		$this->load->view('updatecomplete');
		$this->load->view('adminfooter');
	}
	public function logout(){
		$sd = $this->session->all_userdata();
		if($sd['Login']===false){
			redirect('/s2earchive');
		}
		$sd = array('Page' => '', 'Title' => '', 'Content' => '', 'Login' => '');
		$this->session->unset_userdata($sd);
		$newdata = array(
				'Login' => FALSE
				);
		$this->session->set_userdata($newdata);

		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Update Complete';

		//Load Page View
		$this->load->view('adminheader', $data);
		$this->load->view('adminlogout');
		$this->load->view('adminfooter');
	}
	public function adminLoginValidation(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');
		
		// validats form input
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[12]|xss_clean');
		$this->form_validation->set_message('is_unique', "That name is already in use");

		$user = $this->input->post('username');//creates post for email
		$password = $this->input->post('password');// creates post for password
		$row = $this->s2egraph->getCode($user);
		$salt = $row[0]['aAdminSalt'];
		$pass= md5($password.$salt);

		
		
		if ($this->form_validation->run() == FALSE)
		{
			// reload form
			$data['page_title'] = 'STUDY2EXCELL | Admin Login';

			//Load Page View
			$this->load->view('header', $data);
			$this->load->view('adminlogin');
			$this->load->view('footer');

		} else {

			$row = $this->s2egraph->getPass($pass);//calls function to check email and password	
			
			$newdata = array(
				'Login' => TRUE
				);
			// set new session data
			$this->session->set_userdata($newdata);
			redirect('/s2earchive/articles');
			
			}/**/
		}
		public function changeArticle(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="rerror">', '</div>');

			// check input
		$this->form_validation->set_rules('admdate', 'Date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
			
			//post input to variables
		$date = $this->input->post('date');
		$title = $this->input->post('Title');
		$message = $this->input->post('Message');
		$page = $this->input->post('Adminpage');
		$section = $this->input->post('Adminsection');

		/*var_dump($date);
		var_dump($title);
		var_dump($message);
		var_dump($page);
		var_dump($section);*/

		switch ($page){
			case 'HOME':
				# code...
				$newdata = array('Page' => 'aHomePage');
				$this->session->set_userdata($newdata);
				break;
			case 'MIDS':
				# code...
				$newdata = array('Page' => 'aMiddleschoolPage');
				$this->session->set_userdata($newdata);
				break;
			case 'HS':
				# code...
				$newdata = array('Page' => 'aHighschoolPage');
				$this->session->set_userdata($newdata);
				break;
			case 'COL':
				# code...
				$newdata = array('Page' => 'aCollegePage');
				$this->session->set_userdata($newdata);
				break;
			case 'TIP':
				# code...
				$newdata = array('Page' => 'aTipsPage');
				$this->session->set_userdata($newdata);
				break;
			default:
				# code...
				redirect('/s2earchive');
				break;
		}
		switch ($section) {
			case 'Featured':
				# code...
				$newdata1 = array('Title' => 'aFeaturedTitle', 'Content' => 'aFeaturedContent');
				$this->session->set_userdata($newdata1);
				break;
			case 'Quick Look':
				# code...
				$newdata1 = array('Title' => 'aQuickTitle', 'Content' => 'aQuickContent');
				$this->session->set_userdata($newdata1);
				break;
			case 'Main':
				# code...
				$newdata = array('Title' => 'aMainTitle', 'Content' => 'aMainContent');
				$this->session->set_userdata($newdata1);
				break;
			case 'Sub1':
				# code...
				$newdata1 = array('Title' => 'aSubTitle1', 'Content' => 'aSubTitle1Content');
				$this->session->set_userdata($newdata1);
				break;
			case 'Sub2':
				# code...
				$newdata1 = array('Title' => 'aSubTitle2', 'Content' => 'aSubTitle2Content');
				$this->session->set_userdata($newdata1);
				break;
			case 'Sub3':
				# code...
				$newdata = array('Title' => 'aSubTitle3', 'Content' => 'aSubTitle3Content');
				$this->session->set_userdata($newdata1);
				break;
			
			default:
				# code...
				redirect('/s2earchive');
				break;
		}
		$sd = $this->session->all_Userdata();
		//var_dump($sd);/**/
		$this->s2egraph->archiveArticle();

		}









		
}