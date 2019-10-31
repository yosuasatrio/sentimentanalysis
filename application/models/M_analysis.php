<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_analysis extends CI_Model {
public $table = 'analysis';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_detail_analysis($id = NULL){
		$this->db->from('analysis');
		$this->db->where('topic',$id);
        $query=$this->db->get();
		return $query->result();
	}
	public function get_topic_all(){
		$this->db->distinct();
		$this->db->select('topic'); 
		$this->db->from('analysis');
        $query=$this->db->get();
		return $query->result();
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}