<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    // Bien luu thong tin gui den view
    var $data = array();
    
    /**
     * Ham khoi dong
     */
    function __construct()
    {
        //kế thừa từ CI_Controller
        parent::__construct();
        $this->data['title']="Quản lý VietCad";
        // Xu ly controller
        $controller = $this->uri->segment(1);
        $controller = strtolower($controller);
        switch ($controller)
        {
            //Nếu đang truy cập vào trang Admin
            case 'admin':
            {
                //load các file sử dụng nhiều cho trang admin
                //kiểm tra admin đăng nhập hay chưa
                //kiểm tra quyền của admin
                //....
                break;
            }

            case 'main':
            {
                
                break;
            }
 
            //Trang chủ
            default:
            {
                //load các file sử dụng nhiều cho trang chủ
                //Xử lý ngôn ngữ
                //Xử lý tiền tệ
                //....
                break;
            }
        }
 
    }
}