<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	 // construktor controller auth
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user', 'user');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('front/login');
        } else {
            $this->loginAcount();
        }
	}

	public function loginAcount()
	{
		$username      = $this->input->post('username');
        $password      = $this->input->post('password');

        $login=$this->user->checkLogin();
        print_r($login);
        if ($login !=null) {
        	 $login_session = array(
                'username'  => $login->username,
                'password'  => $login->password,
                'previledge' => $login->previledge,
                'logged_in' => TRUE //true=1, false=0
            );

        	print_r($login_session);
        	$this->session->set_userdata($login_session);
        	redirect('panel/');
        }else{
        	$this->session->set_flashdata('message', '
                                            <div class="alert alert-block alert-danger fade in">
                                                <button data-dismiss="alert" class="close" type="button">
                                                    &times;
                                                </button>
                                                <h4 class="alert-heading"><i class="fa fa-times"></i> Error!</h4>
                                                <p>
                                                    Login gagal! Silahkan periksa lagi username dan password!
                                                </p>
                                            </div>'
            );
        	redirect('auth');
        }
	}

	 // process logout
	public function logout() 
	{
        $this->session->unset_userdata('user_login');
        $this->session->sess_destroy();
        redirect('auth');
    }

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */