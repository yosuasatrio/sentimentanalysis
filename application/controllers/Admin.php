<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("log"));
		}
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}
	public function index()
	{
		$data['content'] = 'home';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}
}