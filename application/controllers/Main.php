<?php
class Main extends CI_Controller {

        public function index()
        {
            $data['subpages']= array('dashboard');
            $this->load->view('layout/layout',$data);
        }
}