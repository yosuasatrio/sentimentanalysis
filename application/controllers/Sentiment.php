<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sentiment extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('Twitteroauth');
		$this->config->load('twitter');	
		$this->load->model('M_analysis');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("log"));
		}
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}
	public function index()
	{
		$data['content'] = 'input';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}
	public function topic($id)
	{
		$data['topic_1'] = $this->M_analysis->get_detail_analysis($id);
		$data['content'] = 'SentimentResult';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}

	public function kelola_topic()
	{
		$data['topic_1'] = $this->M_analysis->get_topic_all();
		$data['content'] = 'TopicAll';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}

	function hapusTopik($id){
		$where = array('topic' => $id);
		$this->M_analysis->hapus_data($where,'analysis');
		redirect('sentiment');
	}
	public function analysis()
	{
				/*Twitter Process*/
		$q = $this->input->post("q");
		$jumlah_tweet = 10;
		$keyword = $q;
		$connection = $this->twitteroauth->create($this->config->item('twitter_consumer_token'), $this->config->item('twitter_consumer_secret'), $this->config->item('twitter_access_token'), $this->config->item('twitter_access_secret'));
		$data['tweets'] = $connection->get("search/tweets", ["q" => $keyword,"count" => $jumlah_tweet,"lang"=>"id"]);		
		$data['content'] = 'analysis';
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/main', $data);
		$this->load->view('admin/template/footer');
	}
}