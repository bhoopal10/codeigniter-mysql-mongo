<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('mongo_db',array('activate'=>'default'),'mongo_db');
		$this->load->model('user_model');
		$this->load->helper('url');

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function phpinfo(){
		$res = $this->mongo_db->get('users');
		print_r($res);
	}
	public function storeUser()
	{
		$input = array(
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'email' => $_POST['email'],
			);
		
		// insert into mysql
		$this->user_model->insert_entry($input);

		//insert into mongodb
		$this->mongo_db->insert('users',$input);

		redirect('/users','refresh');
	}
	public function users(){
		$data['mongod'] = $this->mongo_db->get('users');
		$data['mysql'] = $this->user_model->get_entries();
		$this->load->view('users',$data);
	}
}
