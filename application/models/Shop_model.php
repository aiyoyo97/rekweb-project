<?php

class Shop_model extends CI_model {
    public function getAllShop()
    {
        return $this->db->get('shop')->result_array();
    }
}