<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Users extends RestController {
	public function __construct() {
		parent::__construct();
		// load model DataUsers
		// load library Crypto
	}

	public function list_post(){
		/*
		|  1. menerima inputan username, email, password
		|  2. username, dan email harus unique
		|  3. username dan password min length = 4, max length 20
		|  4. valid email, max length = 100
		| -------------------------------------------------------------------
		| Response validasi false:
		| Jika validasi tidak memenuhi syarat, maka trapkan error dan http code yang sesuai
		| untuk no 1, 3, 4 pakai http_code 400
		| untuk no 2 pakai http_code 409
		*/

		/*
		|  5. password dari inputan kemudian encrypt menggunakan library crypto yang sudah diload sejak awal
		|  6. kemudian data dari inputan dan password yang sudah di encrypt insert ke table users
		|  7. jika berhasil save data berikan response message success dan http code nya 200
		|  8. ika gagal save data berikan response message failed dan http code nya 500
		| -------------------------------------------------------------------
		*/
	}

	public function list_get() {
		$data = ''; //panggil model DataUsers->listAll

		// kemudian data tersebut jadikan response API dengan $this->response(data, http_code). http_code nya 200
	}

	public function listById_get(){
		/*
		|  1. ambil inputan id dari method GET
		|  2. kemudian cari id tersebut di table users di model DataUsers->listById_get
		|  3. jika tidak ada, maka berikan response false dengan http code 404
		|  4. jika ada, kemudian decypt password nya dengan library crypto. dan berikan response data users beserta password yang sudah di decrpyt dengan http code nya 200
		| -------------------------------------------------------------------
		*/
	}
}
