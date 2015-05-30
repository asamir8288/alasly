<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author asamir
 */
class Home extends CI_Controller {

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
        $this->data['is_homepage'] = true;
        $this->data['page_title'] = lang('frontend_page_title_home');

        $this->template->add_js('layout/js/jqFancyTransitions.1.7.js');
        $this->template->add_js('layout/js/carousel/jquery.carouFredSel-6.1.0-packed.js');
        $this->template->add_js('layout/js/carousel/jquery.mousewheel.min.js');
        $this->template->add_js('layout/js/carousel/jquery.ba-throttle-debounce.min.js');

        $this->data['activeBanners'] = BannersTable::getActiveBanners(TRUE, 'ASC', $this->data['lang_id']);

        if (is_mobile()) {
            $this->template->set_template('mobile');
            $this->data['page_title'] = lang('frontend_page_title_about_sesame');
            $this->template->add_js('layout/js/jssor.slider.mini.js');
            $this->template->write_view('content', 'mobile/homepage', $this->data);
            $this->template->render();
        } else {
            $this->template->write_view('content', 'frontend/homepage', $this->data);
            $this->template->render();
        }
    }

}
