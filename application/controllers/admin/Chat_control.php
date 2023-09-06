<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat_control extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_admin()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data = array();
        $data['page'] = 'Users'; 
        $data['page_title'] = 'Chat Control';
        $data['main_content'] = $this->load->view('admin/user/chat_control', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
}