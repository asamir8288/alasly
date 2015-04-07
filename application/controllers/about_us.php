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
class About_us extends CI_Controller {

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
    
    public function profile() {
        $this->data['page_title'] = lang('frontend_page_title_about_profile');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'profile_banner.png' : 'profile_banner_ar.png';
        $page_id = 'profile';        
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }
    
    public function mission() {
        $this->data['page_title'] = lang('frontend_page_title_about_mission');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'mission_banner.png' : 'mission_banner_ar.png';
        $page_id = 'mission';        
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }
    
    public function innovation() {
        $this->data['page_title'] = lang('frontend_page_title_about_innovation');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'innovation_banner.png' : 'innovation_banner.png';
        $page_id = 'innovation';        
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }
    
    public function foods_story() {
        $this->data['page_title'] = lang('frontend_page_title_about_foods_story');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'food_story_banner.png' : 'food_story_banner_ar.png';
        $page_id = 'foods_story';        
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }
    
    private function page_data($page_id) {
        $this->data['page_title'] = lang($page_id . '_page_title');        
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);
        
        return $this->data;
    }

}
