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
        $data['chat_data']=$this->db->get('created_chat')->result();
        $data['main_content'] = $this->load->view('admin/user/chat_control', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    public function toggle_chat_status($id){
        // Load the database model if not loaded already
        $this->load->model('admin_model');
        
        // Get the current status of the chat entry
        $current_status = $this->admin_model->get_chat_status($id);
    
        if ($current_status !== false) {
            // Toggle the status between 'active' and 'block'
            $new_status = ($current_status == 'active') ? 'block' : 'active';
            
            // Update the status to the new status
            $this->admin_model->update_chat_status($id, $new_status);
            
            // Redirect back to the chat control page or any other page you prefer
            redirect('admin/chat_control');
        } else {
            // Handle the case where the chat entry with the given ID doesn't exist
            // You can show an error message or perform other actions as needed
        }
    }
    
    
    
}