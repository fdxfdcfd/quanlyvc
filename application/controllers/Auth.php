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
		else{
            $result=$this->user->read('user',['userid'=>$this->input->post('userid')]);
			$session_data = $result[0];
			$this->session->set_userdata($session_data);
            redirect('Main', 'refresh');
		}
	}
	public function username_check($str)
	    {
		$user_login=$this->user->read('user',['userid'=>$this->input->post('userid')]);
		if(!empty($user_login)){
			$pass= $this->input->post('password');
			$passsalt= md5($pass);
			$pass= md5($pass.$passsalt);
			if($pass == $user_login[0]['password'])
			    return true;
			else{
				$this->form_validation->set_message('username_check', 'Mật khẩu chưa đúng');
				return false;
			}
		}
		else{
			$this->form_validation->set_message('username_check', 'Tên đăng nhập không tồn tại');
			return false;
		}
	}
    public function signout(){
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect('Main/signin','refresh'); 
    }
}
