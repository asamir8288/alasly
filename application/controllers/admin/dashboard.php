<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['is_dashboard'] = true;
        $this->template->write_view('content', 'backend/dashboard', $this->data);
        $this->template->render();
    }
}
