<?php
defined('BASEPATH') OR EXIT ('no direct access');

class Overview extends  CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/add_task');
    }
}
