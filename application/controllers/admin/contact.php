<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author asamir
 */
class Contact extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $page_id = 'contatc_us';
        
        if($this->input->post('submit')){
            $_POST['page_id'] = $page_id;
            
            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);
            
            redirect('admin/contact');
        }
        
        $this->data['post_url'] = 'admin/contact/index';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('contact_us_admin_title');
        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }

}
