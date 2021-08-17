<?php
require_once('config.php');
require_once(DBAPI);

$customers = null;
$customer = null;


function index() {
	global $customers;
	$customers = find_all('users');
}

function add() {
	if (!empty($_POST['customer'])) {
	  
	  $customer = $_POST['customer'];
	  
	  save('users', $customer);
	  header('location: index.php');
	}
}

function edit() {

	if (isset($_GET['id'])) {
  
	  $id = $_GET['id'];
  
		if (isset($_POST['customer'])) {
	
			$customer = $_POST['customer'];
			update('users', $id, $customer);
			header('location: index.php');
		} else {
	
			global $customer;
			$customer = find('users', $id);
		} 
	} else {
	  header('location: index.php');
	}
}

function view($id = null) {
	global $customer;
	$customer = find('users', $id);
}

function delete($id = null) {

	$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	$customer['softDeletes'] = $today->format("Y-m-d H:i:s");
	
	remove('users', $id, $customer);
	header('location: index.php');
}