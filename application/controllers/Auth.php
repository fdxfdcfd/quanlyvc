<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends MY_Controller {
    var $data = array();
    function __construct()
    {
        parent::__construct();
        $this->lang->load('vi', 'vietnamese');
        $this->load->model('user');
        $this->load->database();
    }
    public function user_login_process() {
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('valid_email', $this->lang->line('invalid-email'));
        $this->form_validation->set_rules('userid', 'Username', 'callback_username_check');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('signin_v');
        }
        else
        {
           echo 123;die;
        }
    }
    public function username_check($str)
    {
         $user_login=$this->user->read('user',['userid'=>$this->input->post('userid')]);
            if(!empty($user_login)){
                return true;
            }else{
                $this->form_validation->set_message('username_check', '{field} ko ton tai');
                return false;   
            }
    }
}