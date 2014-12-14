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
class Contact extends CI_Controller {

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

    public function index() {
        $page_id = 'contatc_us';

        $this->data['page_title'] = lang('contact_page_title');
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->data['countries'] = LookupCountriesTable::getAllCountries();
        $this->data['reasons'] = LookupContactReasonsTable::getAllReasons();

        $this->template->write_view('content', 'frontend/contact_form', $this->data);
        $this->template->render();
    }

}
