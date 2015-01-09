<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of search
 *
 * @author asamir
 */
class Search extends CI_Controller {

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
        if ($_POST) {
            $keyword = $_POST['search'];

            $this->data['keyword'] = $keyword;
            $this->data['results'] = ProductsTable::searchProducts($keyword, $this->data['lang_id']);
            
            $this->data['page_title'] = lang('frontend_search_results');
            
            $this->template->write_view('content', 'frontend/search_results', $this->data);
            $this->template->render();
        }else{
            redirect('/');
        }
    }

}
