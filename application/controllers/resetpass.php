<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class Resetpass extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index($rs = FALSE) {

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[7]|max_length[20]|md5');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            echo form_open();
            //$this->load->view('template/header');
            $this->load->view('resetpass_form');
           // $this->load->view('template/footer');
        } else {
            $query = $this->db->get_where('wg_users', array('rs' => $rs), 1);

            if ($query->num_rows() == 0) {
                show_error('Sorry!!! Invalid Request!');
            } else {
                $data = array(
                    'password' => $this->input->post('password'),
                    'rs' => ''
                );

                $where = $this->db->where('rs', $rs);

                $where->update('wg_users', $data);
                //$this->load->view('template/header');
                $this->load->view('login');
                //$this->load->view('template/footer');
                echo "<script>alert('Congratulations!');</script>";
            }
        }
    }

}
