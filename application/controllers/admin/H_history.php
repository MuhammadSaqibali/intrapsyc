<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class H_history extends Home_Controller
{

    public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_staff() && !is_user() && !is_patient()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        // $id = $this->session->userdata('id'); 
        // $test = post::where('user_id','=',$id)->get();
        // if(count($test) == 0){
        // die;// $this->load->model('admin_model');
        // $user_id = $this->session->userdata('id');
        // echo $user_id;
        $data = array();
        $data['patient_id'] = $this->session->userdata('id');
        $this->load->model('admin_model'); // Load the model
        $data['contact_info'] = $this->admin_model->get_contact_info($data);
        $data['page_title'] = 'Health History';
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/user/hh_contact', $data, TRUE);
        $this->load->view('admin/index', $data);
        // $data['fname']=$this->input->post('fname');
        // $data['lname']=$this->input->post('lname');
        // }else{

        // }    
    }
    public function addcontactinfo()
    {
        $this->load->model('admin_model');
        $data = array(
            'patient_id' => $this->session->userdata('id'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'date'  => $this->input->post('date'),
            'guardian'  => $this->input->post('guardian'),
            'email'  => $this->input->post('email'),
            'phone'  => $this->input->post('phone'),
            'address'  => $this->input->post('address'),
            'econtact1'  => $this->input->post('econtact1'),
            'erelation1'  => $this->input->post('erelation1'),
            'ephone1'  => $this->input->post('ephone1'),
            'econtact2'  => $this->input->post('econtact2'),
            'erelation2'  => $this->input->post('erelation2'),
            'ephone2'  => $this->input->post('ephone2'),
            'phy_name'  => $this->input->post('phy_name'),
            'phy_address'  => $this->input->post('phy_address'),
            'phy_phone'  => $this->input->post('phy_phone'),
            'refer'  => $this->input->post('refer')
        );
        $this->admin_model->putcontactinfo($data);
        $data['page_title'] = 'Health History';
        $data['health_info'] = $this->admin_model->get_health_info($data);
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/user/hh_healthinfo', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    function addhealthinfo()
    {
        $this->load->model('admin_model');
        $data = array(
            'patient_id' => $this->session->userdata('id'),
            'gender' => $this->input->post('gender'),
            'age' => $this->input->post('age'),
            'dob'  => $this->input->post('dob'),
            'd2r1'  => $this->input->post('d2r1'),
            'd2r2'  => $this->input->post('d2r2'),
            'd2r3'  => $this->input->post('d2r3'),
            'd2s1'  => $this->input->post('d2s1'),
            'd2p1'  => $this->input->post('d2p1'),
            'd2s2'  => $this->input->post('d2s2'),
            'd2p2'  => $this->input->post('d2p2'),
            'd2s3'  => $this->input->post('d2s3'),
            'd2p3'  => $this->input->post('d2p3'),
            'd2s4'  => $this->input->post('d2s4'),
            'd2s5'  => $this->input->post('d2s5'),
            'd2p4'  => $this->input->post('d2p4'),
            'd2r4'  => $this->input->post('d2r4'),
            'd2r5'  => $this->input->post('d2r5'),
            'd2r6'  => $this->input->post('d2r6'),
            'd2r7'  => $this->input->post('d2r7'),
            'd2text'  => $this->input->post('d2text')
        );
        $this->admin_model->puthealthinfo($data);
        $data['page_title'] = 'Health History';
        $data['family_info'] = $this->admin_model->get_family_info($data);
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/user/hh_familyhistory', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    function addfamilyinfo()
    {
        $this->load->model('admin_model');
        $checkboxs = $this->input->post('checkboxs');
        $data = array(
            'patient_id' => $this->session->userdata('id'),
            'checkboxs' => json_encode($checkboxs),
            'd3text' => $this->input->post('d3text'),
            'd3name1' => $this->input->post('d3name1'),
            'd3relation1'  => $this->input->post('d3relation1'),
            'd3age1'  => $this->input->post('d3age1'),
            'd3s1'  => $this->input->post('d3s1'),
            'd3name2'  => $this->input->post('d3name2'),
            'd3relation2'  => $this->input->post('d3relation2'),
            'd3age2'  => $this->input->post('d3age2'),
            'd3s2'  => $this->input->post('d3s2')
        );
        $this->admin_model->putfamilyinfo($data);
        $data['page_title'] = 'Health History';
        $data['additional_info'] = $this->admin_model->get_additional_info($data);
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/user/hh_additionalinfo', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    function addadditionalinfo()
    {
        $this->load->model('admin_model');
        $data = array(
            'patient_id' => $this->session->userdata('id'),
            'education' => $this->input->post('education'),
            'occupaition' => $this->input->post('occupaition'),
            'd4s1'  => $this->input->post('d4s1'),
            'd4r1'  => $this->input->post('d4r1'),
            'd4r2'  => $this->input->post('d4r2'),
            'd4r3'  => $this->input->post('d4r3'),
            'd4text1'  => $this->input->post('d4text1'),
            'd4text2'  => $this->input->post('d4text2'),
            'd4therapy1'  => $this->input->post('d4therapy1'),
            'd4therapy2'  => $this->input->post('d4therapy2'),
            'd4text3'  => $this->input->post('d4text3')
        );
        $this->admin_model->putadditionalinfo($data);
        $data['page_title'] = 'Patient Dashboard';
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/dash', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    function listchat()
    {
        $data = array();
        $data['page_title'] = 'Chat';
        $data['page'] = 'listchat';
        $data['patients'] = FALSE;
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['main_content'] = $this->load->view('admin/listchat', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    function chatbox($patientid,$name)
    {
        $this->load->model('admin_model');
        $data = array(
            'sender_id' => $this->session->userdata('id'),
            's_name' => $this->session->userdata('name'),
            'receiver_id' => $patientid,
            'r_name' => $name,
        );
        
        $chat_id = $this->admin_model->storechat($data);

        if ($chat_id == 0) {
            // If chat_id is 0, it means the record wasn't inserted.
            // Try to fetch the chat ID based on sender, receiver, and names.
            $chat_id = $this->admin_model->fetch_chatid($data);
        }
    
        $data['chat_id'] = $chat_id;
        $data['page_title'] = 'Chat';
        $data['main_content'] = $this->load->view('admin/chatbox', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    function addchat()
    {
        $timestamp = date('Y-m-d H:i:s'); // Current timestamp
        $data = array(
            'message' => $this->input->post('text'),
            's_name' => $this->input->post('s_name'),
            'r_name' => $this->input->post('r_name'),
            'sender_id' => $this->session->userdata('id'),
            'receiver_id' => $this->input->post('patient'),
            'timestamp' => $timestamp,
            'chat_id'=>$this->input->post('id')
        );
        $this->load->model('admin_model');
        $this->admin_model->chatbox($data);
        echo  "success";
    }
    function fetch_chat(){
        $this->load->model('admin_model');
        $patient = $this->input->post('patient');
        $s_name = $this->input->post('s_name');
        $r_name = $this->input->post('r_name');
        $id =  $this->session->userdata('id');
        $data = $this->admin_model->fetchchat($id,$patient,$s_name,$r_name);
        echo json_encode($data);

    }
    function dlistchat(){
        $data = array();
        $data['page_title'] = 'Chat';
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/appointments/listchat',$data,TRUE);
        $this->load->view('admin/index',$data);
    }
}
