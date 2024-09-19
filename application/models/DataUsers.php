<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataUsers extends CI_Model {

	public function listAll_get(){
		//query semua data di table users dan kembalikan hasionya
	}

	public function list_post($data)
	{
		//insert data ke table users, dan berikan return
	}
	public function listById_get($id){
		//query data di table users, where id = $id, return nya row
	}
}
