<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author asamir
 */
class Product extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();

        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
    }

    public function index($id) {
        if ($id) {
            $this->data['product'] = ProductsTable::getOne($id);
            $this->data['page_title'] = $this->data['product']['name'];

            $this->template->write_view('content', 'frontend/product_details', $this->data);
            $this->template->render();
        }
    }

    public function category($cat_id) {
        if ($cat_id) {
            $this->data['category'] = ProductCategoriesTable::getOne($cat_id);
            $this->data['cat_products'] = ProductsTable::getAllCategoryProducts($cat_id, TRUE);

            $this->data['page_title'] = $this->data['category']['name'];

            $this->template->write_view('content', 'frontend/product_category', $this->data);
            $this->template->render();
        } else {
            redirect('/');
        }
    }
    
    public function list_products($cat_id) {
        if ($cat_id) {
            $this->data['category'] = ProductCategoriesTable::getOne($cat_id);
            $this->data['cat_products'] = ProductsTable::getAllCategoryProducts($cat_id, TRUE);

            $this->data['page_title'] = $this->data['category']['name'];

            $this->template->write_view('content', 'frontend/list_products', $this->data);
            $this->template->render();
        } else {
            redirect('/');
        }
    }

    public function new_products() {
        $this->data['new_products'] = ProductsTable::getNewProducts($this->data['lang_id']);

        $this->data['page_title'] = lang('frontend_new_products');

        $this->template->write_view('content', 'frontend/new_products', $this->data);
        $this->template->render();
    }

}
