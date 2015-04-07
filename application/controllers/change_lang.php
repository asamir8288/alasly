<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of change_lang
 *
 * @author asamir
 */
class Change_lang extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function switch_lang() {
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->session->set_userdata('lang_code', 'ar-eg');
        } else {
            $this->session->set_userdata('lang_code', 'en-us');
        }

        redirect(base_url());
    }

}
