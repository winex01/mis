<?php 

$this->load->view('templates/header');
if (!empty($vars)) {
	$this->load->view($body, $vars);
}else {
	$this->load->view($body);
}
$this->load->view('templates/footer');