<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of manage_news
 *
 * @author asamir
 */
class Manage_news extends CI_Controller {

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
        $this->data['is_homepage'] = false;
        $this->data['page_title'] = lang('frontend_list_news');

        $this->data['lang'] = $this->data['lang_id'];

        $this->data['activeNews'] = NewsTable::getAllNews($this->data['lang_id'], TRUE);

        if (is_mobile()) {
            $this->template->set_template('mobile');
            $this->template->write_view('content', 'mobile/list_news', $this->data);
            $this->template->render();
        } else {
            $this->template->write_view('content', 'frontend/list_news', $this->data);
            $this->template->render();
        }
    }

    public function details($news_id = false) {
        if ($news_id) {
            $this->data['is_homepage'] = false;
            $this->data['page_title'] = lang('frontend_list_news');

            $this->data['news'] = NewsTable::getOne($news_id);
            if (is_mobile()) {
                $this->template->set_template('mobile');
                $this->template->write_view('content', 'mobile/news_details', $this->data);
                $this->template->render();
            } else {
                $this->template->write_view('content', 'frontend/news_details', $this->data);
                $this->template->render();
            }
        } else {
            redirect('/');
        }
    }

}
