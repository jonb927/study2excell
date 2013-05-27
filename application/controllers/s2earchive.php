<?php
class S2earchive extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('s2eModel');
		$this->load->model('s2eJson');
	}
	public function index()// home page
	{
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Admin Login';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('adminlogin');
		$this->load->view('footer');

	}
	public function updateArticle(){
		//Set page title
		$data['page_title'] = 'STUDY2EXCELL | Admin Login';

		//Load Page View
		$this->load->view('header', $data);
		$this->load->view('updateArticle');
		$this->load->view('footer');
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
		$row = $this->s2eJson->getCode($user);
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

			$row = $this->s2eJson->getPass($pass);//calls function to check email and password	
		
			redirect('/s2earchive/updateArticle');
			
			}/**/
		}
}