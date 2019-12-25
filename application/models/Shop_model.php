<?php

class Shop_model extends CI_model {
    public function getAllShop()
    {
        return $this->db->get('shop')->result_array();
    }

    public function addProduct(){
        $data = [
            "name" => $this->input->post('name', true),
            "image" => $this->input->post('image', true),
            "category" => $this->input->post('category', true),
            "description" => $this->input->post('description', true),
            "price" => $this->input->post('price', true),
            "stock" => $this->input->post('stock', true)
        ];
        $this->db->inseer('shop', $data);
    }
}