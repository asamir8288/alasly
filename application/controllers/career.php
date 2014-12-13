<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of career
 *
 * @author asamir
 */
class Career extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->template->write_view('content', 'frontend/job_preview');
        $this->template->render();
    }
}
