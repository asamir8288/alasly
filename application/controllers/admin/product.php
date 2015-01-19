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
class Product extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = lang('admin_list_categories');
        $this->data['categories'] = ProductCategoriesTable::getAllCategories(FALSE, $this->data['lang_id']);

        $this->template->write_view('content', 'backend/products/list_all_categories', $this->data);
        $this->template->render();
    }
    
    public function add_edit_product($id = ''){
        $this->data['page_title'] = lang('page_main_title') . lang('product_page_title');
        $this->data['categories'] = ProductCategoriesTable::getAllCategories(FALSE, $this->data['lang_id']);
        if ($id) {
            $this->data['data'] = ProductsTable::getOne($id);
            $this->data['post_url'] = 'admin/product/add_edit_product/' . $id;
            $this->data['submit_btn'] = lang('submit_btn_update');
        } else {
            $this->data['post_url'] = 'admin/product/add_edit_product';
            $this->data['submit_btn'] = lang('submit_btn_add');
        }

        if ($this->input->post('submit')) {

            $p = new Products();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($id) {
                $_POST['id'] = $id;
                $errors = $p->updateProduct($_POST);
            } else {
                $errors = $p->addProduct($_POST);
            }

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/products/add_edit_product_view', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($id) ? lang('admin_product_updated_message') : lang('admin_product_added_message'))
                );
                redirect('admin/product');
            }
        } else {
            $this->template->write_view('content', 'backend/products/add_edit_product_view', $this->data);
            $this->template->render();
        }
    }

    public function categories($id = '') {
        $this->data['page_title'] = lang('page_main_title') . lang('category_page_title');
        if ($id) {
            $this->data['data'] = ProductCategoriesTable::getOne($id);
            $this->data['post_url'] = 'admin/product/categories/' . $id;
            $this->data['submit_btn'] = lang('submit_btn_update');
        } else {
            $this->data['post_url'] = 'admin/product/categories';
            $this->data['submit_btn'] = lang('submit_btn_add');
        }

        if ($this->input->post('submit')) {

            $p = new ProductCategories();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($id) {
                $_POST['id'] = $id;
                $errors = $p->updateProductCategory($_POST);
            } else {
                $errors = $p->addProductCategory($_POST);
            }

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/products/add_edit_product_category', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($id) ? lang('admin_category_updated_message') : lang('admin_category_added_message'))
                );
                redirect('admin/product');
            }
        } else {
            $this->template->write_view('content', 'backend/products/add_edit_product_category', $this->data);
            $this->template->render();
        }
    }

    public function switch_status($cat_id) {
        if ($cat_id) {
            $pc = new ProductCategories();
            $pc->switchStatus($cat_id);

            redirect('admin/product');
        }
    }
    
    public function delete_cat($cat_id){
        if ($cat_id) {
            $pc = new ProductCategories();
            $pc->deleteCategory($cat_id);

            redirect('admin/product');
        }
    }

    public function product_list($cat_id) {
        $this->data['page_title'] = lang('admin_list_categories');
        $this->data['cat_products'] = ProductsTable::getAllCategoryProducts($cat_id);

        $this->template->write_view('content', 'backend/products/product_list_view', $this->data);
        $this->template->render();
    }
    
    public function delete_product($product_id, $cat_id) {
        $p = new Products();
        $p->deleteProduct($product_id);
        
        redirect('admin/product/product_list/'. $cat_id);
    }
    
    public function switch_p_status($product_id, $cat_id) {
        if ($product_id) {
            $p = new Products();
            $p->switchStatus($product_id);

            redirect('admin/product/product_list/'. $cat_id);
        }
    }
}
