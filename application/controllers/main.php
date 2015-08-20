<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller
{
	protected $infos = array();
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public  function index()
	{

		$this->load->view('index');
	}
	public function surveys()
	{
		$this->infos['name'] = $this->input->post('name');
		$this->infos['location'] = $this->input->post('location');
		$this->infos['language'] = $this->input->post('language');
		$this->infos['comment'] = $this->input->post('comment');
		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter +1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}
		$this->infos['count'] = $this->session->userdata('counter');
		$this->load->view('success', $this->infos);
	}
	public function go_back()
	{
		$this->load->view('index');
	}
}
?>