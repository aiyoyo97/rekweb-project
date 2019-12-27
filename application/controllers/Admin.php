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
        $data['shop'] = $this->Shop_model->getAllShop();
        if( $this->input->post('keyword')){
            $data['shop']= $this->Shop_model->searchProduct();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function addProduct()
    {
        $name           = $this->input->post('name');
        $category       = $this->input->post('category');
        $description    = $this->input->post('description');
        $price          = $this->input->post('price');
        $stock          = $this->input->post('stock');
        $image          = $this->input->post('image');
        if(isset($_FILES['image'])){
            $error=array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

            $extensions= array("jpeg", "jpg", "png");


            if(in_array($file_ext,$extensions)===false){
                $error[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            //2.0 MB = 2097152 bytes
            if($file_size > 2097152){
                $error[]="File size must be exactly 2 MB";
            }

            if(empty($error)==true){
                move_uploaded_file($file_tmp,"assets/img/fragrance".$file_name);
                echo "Success";
            } else {
                print_r($errors);
            }
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

    public function editProduct($id)
    {
        $data['title'] = 'Edit';
        $this->load->model('Shop_model');
        $where = array('id' => $id);
        $data['shop'] = $this->Shop_model->editProduct($where, 'shop')->result();

        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('template_admin/footer');

    }

    public function deleteProduct($id) {
        $this->db->where('id', $id);
        $this->db->delete('shop');
        redirect('admin');

    }

}