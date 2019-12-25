<?php

class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shop_model');
        
        
    }

    public function index()
    {
        $this->load->model('Shop_model');
        $data['title'] = 'Admin';
        $data['shop'] = $this->shop_model->getAllShop();

        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function add_action()
    {
        $name           = $this->input->post('name');
        $category       = $this->input->post('category');
        $description    = $this->input->post('description');
        $price          = $this->input->post('price');
        $stock          = $this->input->post('stock');
        $image          = $this->input->post('image');
        if ($image = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

         
        }

        $data = array (
            'name'        => $name,
            'category'    => $category,
            'description' => $description,
            'price'       => $price,
            'stock'       => $stock
        );

        $this->Shop_model->addProduct($data, 'shop');
        redirect('admin/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['shop'] = $this->shop_model->editProduct($where, 'shop')->result();

        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template_admin/footer');

    }

    public function update(){
        $id              = $this->input->post('id');
        $name            = $this->input->post('name');
        $image           = $this->input->post('image');
        $description     = $this->input->post('description');
        $category        = $this->input->post('category');
        $price           = $this->input->post('price');
        $stock           = $this->input->post('stock');

        $data = array(
            'name'          => $name,
            'image'         => $image,
            'description'   => $description,
            'category'      => $category,
            'price'         => $price,
            'stock'         => $stock
        );

        $where = array(
            'id' => $id
        );

        $this->Shop_model->updateProduct($where, $data, 'shop');
        redirect('admin/index');
    }

}