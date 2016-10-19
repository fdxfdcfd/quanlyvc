<?php
Class User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        // Load form helper library
        $this->load->helper('form');
        
        // Load form validation library
        $this->load->library('form_validation');
        
        // Load session library
        $this->load->library('session');
    }
    
    // Show login page
    public function index() {
        $data['subview']='home/home_v';
        $this->load->view('layout/home_layout',$data);
    }
    public function login(){
        $data['subview']='home/user_login_v';
        $this->load->view('layout/home_layout',$data);
    }
    
}

?>