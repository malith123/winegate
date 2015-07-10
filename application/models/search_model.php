
<?php

class Search_model extends CI_Model {

    public function ElePrice($name, $price) {


        if ($price == '$0-$500') {
            $sql = $this->db->query('SELECT * FROM wg_items where item_price between 0 AND 500  AND cat_id =' . $name . '');
        } elseif ($price == '$500-$1000') {
            $sql = $this->db->query('SELECT * FROM wg_items where item_price between 500 and 1000 AND cat_id =' . $name . '');
        } elseif ($price == '$1000-$1500') {
            $sql = $this->db->query('SELECT * FROM wg_items where item_price between 1000 and 1500 AND cat_id =' . $name . '');
        }



        return $sql->result();
    }

    public function getdateDetails($order_date) {

        $this->db->select('order_id,user_id,order_status,order_date,total_price');
        $this->db->from('wg_orders');
        $this->db->where('order_date', $order_date);

        $q = $this->db->get();
        return $q->result_array();
    }

}
