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

        if ($this->input->post('submit')) {
            $_POST['lang_id'] = $this->data['lang_id'];
            $n = new Newsletter();
            $n->addContact($_POST);
            
            $this->sendEmail($_POST);

            redirect('contact');
        }

        $this->data['page_title'] = lang('contact_page_title');
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->data['countries'] = LookupCountriesTable::getAllCountries();
        $this->data['reasons'] = LookupContactReasonsTable::getAllReasons();

        $this->template->write_view('content', 'frontend/contact_form', $this->data);
        $this->template->render();
    }

    public function export() {
        if ($this->input->post('submit')) {
            $_POST['lang_id'] = $this->data['lang_id'];
            $_POST['reason_id'] = 6;
            $n = new Newsletter();
            $n->addContact($_POST);
            
            $this->sendEmail($_POST);

            redirect('contact/export');
        }
        $this->data['page_title'] = lang('export_page_title');

        $this->data['countries'] = LookupCountriesTable::getAllCountries();
        $this->data['reasons'] = LookupContactReasonsTable::getAllReasons();

        $this->template->write_view('content', 'frontend/export_form', $this->data);
        $this->template->render();
    }

    private function sendEmail(array $data) {
        $country = NewsletterTable::getObject('LookupCountries', 'name', $_POST['country_id']);
        $reason = NewsletterTable::getObject('LookupContactReasons', 'reason', $_POST['reason_id']);

        $body = '<p>' . lang('contact_name') . ': ' . $data['name'] . '</p>';
        $body .= '<p>' . lang('contact_email') . ': ' . $data['email'] . '</p>';
        $body .= '<p>' . lang('contact_phone') . ': ' . $data['phone'] . '</p>';
        $body .= '<p>' . lang('contact_company') . ': ' . $data['company'] . '</p>';
        $body .= '<p>' . lang('contact_country') . ': ' . $country . '</p>';
        $body .= '<p>' . lang('contact_reasons') . ': ' . $reason . '</p>';
        send_email('ahmed@dominosmedia.com', $reason, $body);
    }

}
