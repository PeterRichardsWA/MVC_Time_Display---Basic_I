<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()	{

		if($this->session->userdata('counter')) {
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		} else {
			$this->session->set_userdata('counter', 1);
		}

		// ONLY PASS ASSOCIATIVE ARRAY AS SECOND PARAM!
		$this->load->view('index', array('counter' => $this->session->userdata('counter')) );
	}

	public function reset() {
		$this->session->set_userdata('counter', 0);
		redirect('/');
		// not needed because if session counter does exist it's 0
		//$this->load->view('localhost', array('counter' => $this->session->userdata('counter')) );
	}
}

//end of main controller