<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komparasi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_analysis');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("log"));
		}
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}
	public function index()
	{
		$data['content'] = 'Komparasi';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $data['get_topic_1'] = $this->M_analysis->get_topic_all();
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}
/*	public function index()
	{
		$data['content'] = 'admin/Komparasi';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $data['get_topic_1'] = $this->M_analysis->get_topic_all();
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}*/
}