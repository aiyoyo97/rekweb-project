<?php

class Shop_model extends CI_model
{
    public function getAllShop()
    {
        return $this->db->get('shop')->result_array();
    }

    public function addProduct($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editProduct($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateProduct($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function searchProduct()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        return $this->db->get('shop')->result_array();
    }

    public function getProductID($id)
    {
        return $this->db->get_where('shop', ['id' => $id])->row_array();
    }

    public function getDetailById($id)
    {
        return $this->db->get_where('shop', ['id' => $id])->row_array();
    }

    public function addToCart($id)
    {
        $data = [
            "id" => $id,
            "quantity" => $this->input->post('quantity', true),
        ];

        $this->db->insert('cart', $data);
    }
}
