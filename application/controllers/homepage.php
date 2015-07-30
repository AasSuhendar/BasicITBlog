<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_post', 'posting');
	}

	public function index()
	{
		$data['posting']=$this->posting->getAllPost()->result();
		$this->load->view('front/homepage',$data);
	}

	public function login()
	{
		$this->load->view('front/login');
	}

	public function about_me()
	{
		$this->load->view('front/about_me');
	}

}

/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */