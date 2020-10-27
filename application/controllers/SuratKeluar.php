<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKeluar extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation','pagination','session'));
        $iduser = $this->session->userdata('id_user');
		if($iduser != ""){
			// $this->load->model('dashboard_model');
		}else{
			redirect('user');
		}
    }

	public function index()
	{
        $this->load->view('parts/header');
        $this->load->view('parts/sidebar');
        $this->load->view('v_suratkeluar');
        $this->load->view('parts/footer');
    }

    public function addsuratkeluar()
	{
        $this->load->view('parts/header');
        $this->load->view('parts/sidebar');
        $this->load->view('v_addsuratkeluar');
        $this->load->view('parts/footer');
    }

}