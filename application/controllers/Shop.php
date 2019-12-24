<?php

class Shop extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shop_model');

    }
   
    public function index()
    {
        $data['title'] = 'Shop Page';
        $data['shop'] = $this->Shop_model->getAllShop();
        $this->load->view('templates/header', $data);
        $this->load->view('shop/index', $data);
        $this->load->view('templates/footer');

    }

}
