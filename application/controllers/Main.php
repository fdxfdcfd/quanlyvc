<?php
class Main extends MY_Controller {

        public function index()
        {
            $data['subpages']= array('dashboard_v');
            $this->load->view('layout/layout',$data);
        }
        public function SignIn()
        {
            $this->load->view('signin_v');
        }
        
        public function SignUp(){
            $this->data['title']="Tạo mới nhân viên";
            $this->data['subpages']= array('signup_v');
            $this->load->view('layout/layout',$this->data);
        }
}