<?php

class select_item extends CI_Model {

    public function row_delete($id) {


        $this->db->where('Item_Id', $id);
        $this->db->delete('additem');
    }

    public function getAll() {

        $query3 = $this->db->get('additem');
        return $query3->result();
    }

    public function getGift() {

        $query3 = $this->db->query("SELECT * FROM additem WHERE Cat = 'Gift'");
        return $query3->result();
    }

    public function getElectronic() {

        $query4 = $this->db->query("SELECT * FROM additem WHERE Cat = 'Electronic'");
        return $query4->result();
    }
      public function getFashion() {

        $query4 = $this->db->query("SELECT * FROM additem WHERE Cat = 'Fashion'");
        return $query4->result();
    }

    public function getFurniture() {

        $query5 = $this->db->query("SELECT * FROM additem WHERE Cat = 'Furniture'");
        return $query5->result();
    }

    public function item_update($data, $id) {
        $this->db->where('Item_Id', $id);
        $this->db->update();
    }

    function getimage($image) {
        $query2 = $this->db->query("SELECT Item_Image FROM additem WHERE Item_Id = $image")->row();
        return $query2->images;
    }

    function getext($id) {
        $query = $this->db->query("SELECT Item_description FROM additem WHERE Item_Id = $id")->row();
        return $query->ext;
    }

    public function notification() {
        $query7 = $this->db->query("SELECT * FROM additem ");

        return $query7->result_array();

//      if (empty($query7->result())) {
//            
//            echo 'Stock Empty';
//        } 
//        else {
//            echo 'Stock Having ';  
//        }
    }

    public function giftlow() {
        $query8 = $this->db->query("SELECT * FROM additem WHERE Cat= 'Gift'");
        return $query8->result_array();
    }
     public function electronictlow() {
        $query8 = $this->db->query("SELECT * FROM additem WHERE Cat= 'Electronic'");
        return $query8->result_array();
    }
    public function fassionlow() {
        $query8 = $this->db->query("SELECT * FROM additem WHERE Cat= 'Fashion'");
        return $query8->result_array();
    }


    public function newusers()  {
       $this->db->where('valid_invalid',0);
       $query9 = $this->db->get('user');
       return $query9->result(); 
    }
   
    public function updata1($id){
        
        $query10 = $this->db->query("UPDATE user SET valid_invalid='1' WHERE id='" . $id . "'");
       
    }
    public function remove($id){
        $query11 = $this->db->query("DELETE FROM user WHERE id='" . $id . "'");
       
    }
    


    public function rowselect($id){
        
        $this->db->where('id', $id);
        $resultSet=$this->db->get('user'); 
        return $resultSet->result();
        
        
        
    }
    public function delete_user($id){
         $this->db->where('id', $id);
         $rr = $this->db->delete('user');
         return $rr->result();  
    }
    public function notification_count(){
        $query13 = $this->db->query("SELECT * FROM notification WHERE readMessage= '0'");
        return $query13->result_array();
    }
    public function notification_rowselect($id){
        
        $this->db->where('user_name', $id);
        $resultSet=$this->db->get('notification'); 
        return $resultSet->result();
        
        
        
    }
    public function notification_updata1($id){
        
        $query10 = $this->db->query("UPDATE notification SET readMessage='1' WHERE id='" . $id . "'");
       
    }

}
