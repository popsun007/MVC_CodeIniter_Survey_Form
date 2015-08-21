<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('form'))
		{
			$infos = $this->session->userdata('form');
		 	$this->load->view('success', $infos );
		}
		else
		{
			$this->load->view('index');
		}
	}
	public function go_back()
	{
		$this->load->view('index');
	}
}
?>