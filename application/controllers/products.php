<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper(array('url', 'html', 'form'));
    }

    public function index() {
        $this->load->view('add_products');
    }

    public function save_products() {
        $img_fullpath = base_url()."uploads/default_product.png";
        if (!empty($_FILES)) {
            $filename = time() . ".png";
            $target_dir = "uploads/";
            $target_file = $target_dir . $filename;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
             if(!empty($_FILES["up_file"]["name"])){
            $check = getimagesize($_FILES["up_file"]["tmp_name"]);
            }
            else{
                $check = 0;
            }
            if ($check !== false) {
                //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
// Check if file already exists
            if (file_exists($target_file)) {
                echo $target_file . "Sorry, file already exists.";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES["up_file"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["up_file"]["tmp_name"], $target_file)) {

                    $img_fullpath = base_url() . "uploads/" . $filename;
                    // echo "The file ". basename( $_FILES["up_file"]["name"]). " has been uploaded.";
                    // echo $img_fullpath;
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
            }
            $products = array(
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'product_currency' => $this->input->post('product_currency'),
                'merchant_email' => $this->input->post('merchant_email'),
                'product_description' => $this->input->post('product_description'),
                'payment_mode' => $this->input->post('payment_mode'),
                'product_image' => $img_fullpath
            );
            $result = $this->product_model->inser_product($products);
            if ($result === TRUE) {
                echo "TRUE";
            } else {
                echo "FALSE";
            }
        }
    }

    public function show_all() {

        $data['query'] = $this->product_model->get_all_products();
        $this->load->view('show_all_products', $data);
    }

    public function checkout() {
        $data['product_id'] = base64_encode($this->input->post('product_id'));
        
        $this->load->view('checkout', $data);
    }

    public function save_billing_info() {
        $product_id = base64_decode($this->input->post('product_id'));
         $full_name = $this->input->post('full_name');
        $email_address = $this->input->post('email_address');
        $billing_info =array(
           'product_id'=>$product_id,
            'full_name'=> $full_name,
            'email_address'=>$email_address
        );
        $result_bill = $this->product_model->insert_billing_details($billing_info);
        $result = $this->product_model->get_product_by_id($product_id);
        echo json_encode($result);
    }

    public function get_value_for_update() {
        $product_id = $this->input->post('product_id');
        $result = $this->product_model->get_product_by_id($product_id);
        echo json_encode($result);
    }

    public function update_product() {
        $img_fullpath = '';
        if (!empty($_FILES)) {
            $filename = time() . ".png";
            $target_dir = "uploads/";
            $target_file = $target_dir . $filename;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
            if(!empty($_FILES["up_file"]["name"])){
            $check = getimagesize($_FILES["up_file"]["tmp_name"]);
            }
            else{
                $check = 0;
            }
            if ($check !== false) {
                //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
// Check if file already exists
            if (file_exists($target_file)) {
                echo $target_file . "Sorry, file already exists.";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES["up_file"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["up_file"]["tmp_name"], $target_file)) {

                    $img_fullpath = base_url() . "uploads/" . $filename;
                    // echo "The file ". basename( $_FILES["up_file"]["name"]). " has been uploaded.";
                    // echo $img_fullpath;
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
            }
            $product_id = $this->input->post('product_id');
            $products_n = array(
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'product_currency' => $this->input->post('product_currency'),
                'merchant_email' => $this->input->post('merchant_email'),
                'product_description' => $this->input->post('product_description'),
				'payment_mode' => $this->input->post('payment_mode'),
                'product_image' => $img_fullpath
            );

            $products_o = array(
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'product_currency' => $this->input->post('product_currency'),
                'merchant_email' => $this->input->post('merchant_email'),
                'product_description' => $this->input->post('product_description'),
				'payment_mode' => $this->input->post('payment_mode'),
                'product_image' => $this->input->post('import_file_text')
            );
        
        
        if (empty($img_fullpath)) {
            $product_val = $products_o;
        } else {
           $product_val = $products_n;
        }
        
        $result = $this->product_model->update_product($product_id,$product_val);
         if ($result === TRUE) {
                echo "TRUE";
            } else {
                echo "FALSE";
            }
        } 
            
    }
    
    public function  delete_product(){
        $product_id = $this->input->post('product_id');
        $result = $this->product_model->delete_product($product_id);
        
        echo $result;
    }

    
    public function  notification(){
        print_r($_REQUEST);
        $this->load->view('notification');
    }
}

?>