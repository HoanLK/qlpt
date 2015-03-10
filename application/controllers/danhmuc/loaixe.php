<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loaixe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		
		$this->data['subview'] = 'danhmuc/loaixe/index';

		$this->load->view('main_layout', $this->data);

	}

}

/* End of file loaixe.php */
/* Location: ./application/controllers/danhmuc/loaixe.php */