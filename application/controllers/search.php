<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Search extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('search_model');
        $this->load->model('main_model');

        //$this->load->view('template/header');
    }

    public function getPrice() {

        $price = $this->input->post('item_price');


        $name = $_SESSION["catid"];
//             echo '<script> alert('.$name.')</script>';
        $data['home_products'] = $this->search_model->ElePrice($name, $price);



        $data['categories'] = $this->main_model->getAllCategories();
        $this->load->view('home', $data);
    }
    
    
    public function getByDate() {
        $order_date = $this->input->post('SearchByDate');
        $data["order"] = $this->search_model->getdateDetails($order_date);
        $this->load->view('admin/search_form', $data);
    }

}
