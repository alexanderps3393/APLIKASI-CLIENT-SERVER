<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_server extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}
	public function  dataPemakai(){
		$this->load->view('v_pemakai');
	}
	public function peminjam(){
		$this->load->view('v_peminjam');
	}
}
