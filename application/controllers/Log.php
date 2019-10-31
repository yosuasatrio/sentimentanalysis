<?php

//session_start(); //we need to start session in order to access it through CI

Class log extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function user_login_process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}
		else
		{
			redirect(base_url('Log'));
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('log'));
	}
}