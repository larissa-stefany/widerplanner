<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_cliente extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
		
	  if (isset($_POST)) {
		if (!empty($_POST)) {
		  anti_injection($_POST);
		}
	  }
	}
	
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('agenda_cliente');
	}
}