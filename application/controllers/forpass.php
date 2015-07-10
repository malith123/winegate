<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Forpass extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('encrypt');
       
    }

    public function index() {

        
        $data['categories'] = $this->main_model->getAllCategories();
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');

        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('template/header');
            $this->load->view('forpass_form',$data);
            //$this->load->view('template/footer');
        } else {
            //please see Codeigniter : Get your forgotten Password . Part-2
            $email = $this->input->post('email');

            $this->load->helper('string');
            $rs = random_string('alnum', 12);
            $this->main_model->addRandomString($email, $rs);

            // Configure email library
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = 'malithrodz911102@gmail.com';
            $config['smtp_pass'] = 'malith112';

            // Load email library and passing configured values to email library
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            // Sender email address
            $this->email->from('malithrodz911102@gmail.com', 'E Marketing Portal');
            // Receiver email address
            $this->email->to($email);
            // Subject of email
            $this->email->subject('Get your forgotten Password');
            // Message in email
            $this->email->message('Please go to this link to get your password.
                   http://localhost/winegate/index.php/resetpass/index/' . $rs);


            if ($this->email->send()) {

                //$this->load->view('template/header');
                $this->load->view('login');
                //$this->load->view('template/footer');
                echo "<script>alert('Email Successfully Sent');</script>";
            } else {
                echo '<p class="error_msg">Invalid Gmail Account or Password !</p>';
            }
            //echo "Please check your email address.";
        }
    }

    public function email_check($email) {
        $rst = $this->main_model->checkEmail($email);
        if ($rst) {
            return TRUE;
        } else {
            $this->form_validation->set_message('email_check', 'This Email does not exist.');
            return FALSE;
        }
    }
}
