<?php
class Main extends MY_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->model('Calendar');
        }

        public function index()
        {
            $this->data['subpages']= array('dashboard_v');
             $where= array('calendardate >= '=> date('Y-m-d',strtotime('first day of this month')) ,
                            'calendardate <= ' => date('Y-m-d',strtotime('last day of this month')));
            $calendar= $this->Calendar->read('calendar', $where);
            $events=array();
            foreach($calendar as $key=> $val)
            {
                $event=array('id' => $val['userid'], 'title'=> $val['userid']. $val['calendartype'], 'start'=> date("m/d/Y",strtotime($val['calendardate'])),'className'=> 'event-orange');
                array_push($events, $event);
            }
            $this->data['event']=json_encode($event);
            $this->load->view('layout/layout',$this->data);
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