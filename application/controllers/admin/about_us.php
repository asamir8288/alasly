<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 *
 * @author asamir
 */
class About_us extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->template->write_view('content', 'backend/about_lnks', $this->data);
        $this->template->render();
    }
    
    public function profile() {
        $page_id = 'profile';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/about_us');
        }
        
        $this->data['post_url'] = 'admin/about_us/profile';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('profile_page_title');
        
        $this->data['inside_sub_menu'] = 'about_lnks';
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
    
    public function mission() {
        $page_id = 'mission';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/about_us/mission');
        }
        
        $this->data['post_url'] = 'admin/about_us/mission';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('mission_page_title');
        
        $this->data['inside_sub_menu'] = 'about_lnks';
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
    
    public function innovation() {
        $page_id = 'innovation';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/about_us/innovation');
        }
        
        $this->data['post_url'] = 'admin/about_us/innovation';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('innovation_page_title');
        
        $this->data['inside_sub_menu'] = 'about_lnks';
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
    
    public function foods_story() {
        $page_id = 'foods_story';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/about_us/foods_story');
        }
        
        $this->data['post_url'] = 'admin/about_us/foods_story';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('foods_story_page_title');
        
        $this->data['inside_sub_menu'] = 'about_lnks';
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }
}
