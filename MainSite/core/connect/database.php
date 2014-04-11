<?php 
$config = array(
	'host'		=> 'localhost',
	'username' 	=> 'wisproadmin',
	'password' 	=> 'fPVrm4nhFzJFqUmN',
	'dbname' 	=> 'test'
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);