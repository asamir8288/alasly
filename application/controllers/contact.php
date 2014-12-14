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
    }

    public function index() {
        $this->data['page_title'] = lang('contact_page_title');
        $this->data['countries'] = LookupCountriesTable::getAllCountries();
        $this->data['reasons'] = LookupContactReasonsTable::getAllReasons();
        
        $this->template->write_view('content', 'frontend/contact_form', $this->data);
        $this->template->render();
    }

}
