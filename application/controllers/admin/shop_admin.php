<?php

class Shop_admin extends CI_Controller{
   
    public function index()
    {
        $this->load->model('Shop_model');
        $data['title'] = 'Admin';
        $data['mahasiswa'] = $this->Shop_model->getAllShop();
        if( $this->input->post('keyword') ) {
            $data['shop'] = $this->Shop_model->findProductData();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template_admin/footer');
    }

    public function add()
    {
        $this->load->model('Shop_model');

        $data['title'] = 'Form Add Products';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('admin/add');
            $this->load->view('template_admin/footer');
        } else {
            $this->Shop_model->addProduct();
            $this->session->set_flashdata('flash', 'Added');
            redirect('admin');
        }

    }

    public function edit()
    {
        $this->load->model('Shop_model');
        
        $data['title'] = 'Form Edit Products';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('admin/edit');
            $this->load->view('template_admin/footer');
        } else {
            $this->Shop_model->editProduct();
            $this->session->set_flashdata('flash', 'Edited');
            redirect('admin');
        }
    }
}