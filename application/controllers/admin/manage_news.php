<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of manage_news
 *
 * @author asamir
 */
class Manage_news extends My_Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = lang('admin_list_categories');
        $this->data['allnews'] = NewsTable::getAllNews($this->data['lang_id']);

        $this->template->write_view('content', 'backend/news/list_news', $this->data);
        $this->template->render();
    }
    
    public function add_edit_news($id = ''){
        $this->data['page_title'] = lang('page_main_title') . lang('news_main_title');
        if ($id) {
            $this->data['data'] = NewsTable::getOne($id);
            $this->data['post_url'] = 'admin/manage_news/add_edit_news/' . $id;
            $this->data['submit_btn'] = lang('submit_btn_update');
        } else {
            $this->data['post_url'] = 'admin/manage_news/add_edit_news';
            $this->data['submit_btn'] = lang('submit_btn_add');
        }

        if ($this->input->post('submit')) {

            $n = new News();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($id) {
                $_POST['id'] = $id;
                $errors = $n->updateNews($_POST);
            } else {
                $errors = $n->addNews($_POST);
            }

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/news/add_edit_news', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($id) ? lang('admin_news_updated_message') : lang('admin_news_added_message'))
                );
                redirect('admin/manage_news');
            }
        } else {
            $this->template->write_view('content', 'backend/news/add_edit_news', $this->data);
            $this->template->render();
        }
    }
    
    public function delete_news($news_id) {
        $n = new News();
        $n->deleteNews($news_id);
        
        redirect('admin/manage_news');
    }
    
    public function switch_status($news_id) {
        if ($news_id) {
            $n = new News();
            $n->switchStatus($news_id);

            redirect('admin/manage_news');
        }
    }
}
