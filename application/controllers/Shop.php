<?php

class Shop extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shop_model');
    }

    public function index()
    {
        $data['title'] = 'Shop Page';
        $data['shop'] = $this->Shop_model->getAllShop();
        if ($this->input->post('keyword')) {
            $data['shop'] = $this->Shop_model->searchProduct();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('shop/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $this->load->model('Shop_model');
        $data['shop'] = $this->Shop_model->getProductID($id);
        $data['title'] = 'Detail Page';
        $this->load->view('templates/header', $data);
        $this->load->view('shop/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add($id)
    {
        $data['title'] = 'Shop Page';
        $data['shop'] = $this->Shop_model->addToCart($id);
        // $this->session->set_flashdata('flash', 'add');
        redirect('shop/detail/' . $id);
    }
}
