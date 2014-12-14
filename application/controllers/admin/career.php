<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of career
 *
 * @author asamir
 */
class Career extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = lang('page_main_title');
        $this->template->write_view('content', 'backend/career_lnks', $this->data);
        $this->template->render();
    }
    
    public function mission() {
        $page_id = 'career-mission';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/career/mission');
        }
        
        $this->data['post_url'] = 'admin/career/mission';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('career_mission');
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
    
    public function why_alasly() {
        $page_id = 'why-alasly';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/career/why_alasly');
        }
        
        $this->data['post_url'] = 'admin/career/why_alasly';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('career_why_alasly');
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
    
    public function our_workplace() {
        $page_id = 'our-workplace';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/career/our_workplace');
        }
        
        $this->data['post_url'] = 'admin/career/our_workplace';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('career_our_workplace');
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
}
