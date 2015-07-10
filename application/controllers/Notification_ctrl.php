<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Notification_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->model('select_item');
    }

    public function index() {

        $this->load->helper('url');
        $data['title'] = 'bootstrap 3.3.2 + CodeIgniter';
//        $this->load->view('template/admin_new_header_for_login',$data);
//        $this->load->view('template/admin_header_view', $data);
        $data['user_data1'] = $this->select_item->notification();
        $data['user_data2'] = $this->select_item->giftlow();
        $data['user_data3'] = $this->select_item->electronictlow();
        $data['user_data4'] = $this->select_item->fassionlow();
        $data['user_data6'] = $this->select_item->notification_count();


        $this->load->view('admin/Notification_view', $data);
    }

//    function getAlerts() {
//        $query = $this->db->query("SELECT id, notification_message,  FROM notification WHERE readMessage = 0");
//        $result = $query->num_rows();
//
//        if ($result > 0) {
//            return $result;
//            echo $result;
//        }
//    }

    public function notification1() {
        $this->load->helper('url');
//        $data['title'] = 'bootstrap 3.3.2 + CodeIgniter';
        $data['user_data6'] = $this->select_item->notification_count();
        $this->load->view('admin/Notification_view', $data);
    }

    public function notification_view() {
        $this->load->helper('url');
        $data['title'] = 'bootstrap 3.3.2 + CodeIgniter';
//         $this->load->view('template/admin_new_header_for_login',$data);
//       $this->load->view('template/admin_header_neuser_view',$data);
        $id = $this->input->get('id');
        $data['resultSet']=$this->select_item->notification_rowselect($id);
        $this->load->view('admin/notification_details_view',$data);
    }
     public function notification_approve(){
        $this->load->helper('url');
        $id = $this->input->get('id');
        $this->select_item->notification_updata1($id);
        //echo "<script>alert('Are you sure to add this user !');</script>";
        $this->index();
   
    }
    
    //$this->load->view('home');
    //$this->load->view('template/user_view');
}
