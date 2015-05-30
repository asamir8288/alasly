<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author asamir
 */
class Test extends CI_Controller {
    function __construct() {
        parent::__construct();
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
        
        
        
    }
    
    public function index() {
        $this->data['page_title'] = lang('frontend_page_title_about_profile');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'profile_banner.png' : 'profile_banner_ar.png';
        $page_id = 'profile';  
        
        $this->load->view('responsive_template', $this->page_data($page_id));
    }
    
    private function page_data($page_id) {
        $this->data['page_title'] = lang($page_id . '_page_title');        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        return $this->data;
    }
}
