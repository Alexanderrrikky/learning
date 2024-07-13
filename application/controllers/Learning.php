<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Learning extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
        $this->load->view('template/v_header');
        $this->load->view('template/v_home');
        $this->load->view('template/v_footer');
    }

    public function about()
    {
        $this->load->view('template/v_header');
        $this->load->view('template/v_about');
        $this->load->view('template/v_footer');
    }
}

/* End of file: Learning.php */