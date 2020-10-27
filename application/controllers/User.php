<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
        
        $this->load->model('user_model');
    }

	public function index()
	{
		$this->load->view('v_login');
    }

    public function signin(){
        if($this->user_model->logged_in()){
            //jika memang session sudah terdaftar
            redirect('dashboard');
        } else {
            $in['username'] = $this->input->post('username');
            $in['password'] = $this->input->post('password');
            $this->user_model->check_login($in);
       }
    }

    public function signout(){
        $this->session->sess_destroy();
		redirect('user');
    }

}