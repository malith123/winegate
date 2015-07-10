<?php

class product_model extends CI_Model {

    public function inser_product($products) {
        $this->db->insert('product', $products);
        return TRUE;
    }
    public function  insert_billing_details($billing_info){
        $this->db->insert('customer_details', $billing_info);
        return TRUE;
    }

    public function get_all_products() {
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();

        return $query->result();
    }
    
    
    public  function get_product_by_id($id){
        $this->db->select('*');
        $where = "(id='$id')";
        $this->db->where($where);
        $query = $this->db->get('product');
        $data = $query->result();
        foreach ($data as $value){
            $pro =array(
                'id'=>$value->id,
                'product_name'=>$value->product_name,
                'product_price'=>$value->product_price,
                'product_currency'=>$value->product_currency,
                'product_description'=>$value->product_description,
                'merchant_email'=>$value->merchant_email,
                'product_image'=>$value->product_image,
				'payment_mode'=>$value->payment_mode,
            );
        }
        return $pro;
    }
    
    public  function update_product($product_id,$product_val){
        
        $this->db->where('id', $product_id);
        $result = $this->db->update('product', $product_val);
        if ($result == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
        
    }
    
    public function delete_product($product_id){
     
            $this->db->where('id', $product_id);
            $this->db->delete('product');
             return TRUE;
       
    }
}

?>