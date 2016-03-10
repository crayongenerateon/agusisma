<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index()
	{
		$this->load->view('template/layout');
	}

}

/* End of file Base.php */
/* Location: ./application/controllers/Base.php */