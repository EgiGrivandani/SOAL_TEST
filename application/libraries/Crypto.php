<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crypto {
	protected $method  = "AES-256-CBC";
	protected $key	  = "1kLIF5mgCxdJv7cXlfx0aYLOZO0DmGR8"; //32
	protected $iv 	  = "IxgLT950Z5LpoNQe"; //16


	function encrypt($plaintext) {
		// pakai fungsi bawaan php openssl_encrypt
		// penerapan openssl_encrypt(plaintext, method, key, 0, iv)
		// kemudian return dengan base64_encode(iv, encrptedPassword)

	}

	function decrypt($encryptedPassword) {
		// decode terlebih dahulu $encryptedPassword menggunakan base64_decode
		// kemudian substr $encryptedPassword dengan offset 16
		// return menggunakan openssl_decrypt(hasil subtr, method, key, 0, iv)

	}
}
