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
        $this->load->view('v_home');
    }
}

/* End of file: Learning.php */
