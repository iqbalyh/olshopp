<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Data_user extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function submit($data){
		$this->db->insert("t_user", $data);
	}

	function gets(){
		return $this->db->get('t_user')->result();
	}

	function get($id){}
	function add(){}
	function del($id){
		$this->db->delete('t_user', ["id"=>$id]);
	}
	function edit($id){}
}