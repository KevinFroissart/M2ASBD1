<?php
include_once('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	if (isset($_POST['encrypt'])){
		$data = openssl_encrypt($_POST['data'],$ciphering,PASSPHRASE, $options=0, $iv_length);
	}
	if (isset($_POST['decrypt'])){
		$data = openssl_decrypt($_POST['data'],$ciphering,PASSPHRASE,  $options=0, $iv_length);
	}
}

