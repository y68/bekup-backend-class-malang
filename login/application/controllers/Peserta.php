<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_peserta');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function do_login()
	{
		if ( ! $_POST || $_SERVER['REQUEST_METHOD'] != 'POST')
		{
			redirect();
		}

		$uname = trim($_POST['uname']);
		$psw = ($_POST['psw']);

		if ( $this->Model_peserta->loginAuth($uname , $psw))
		{
			redirect('/crud');
		}
		else
		{
			$_SESSION['gagal'] = TRUE;
			redirect('/peserta/login');
		}
	}
}
