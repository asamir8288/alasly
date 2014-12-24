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

        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
    }

    public function index() {
        $this->data['page_title'] = lang('available_jobs');
        $this->data['jobs'] = OpportunitesTable::getOpportunities(TRUE);
        $this->template->write_view('content', 'frontend/available_jobs', $this->data);
        $this->template->render();
    }

    public function details($job_id) {
        if ($job_id) {
            $this->data['job'] = OpportunitesTable::getOne($job_id);           
            $this->data['page_title'] = $this->data['job']['job_title'];
            
            $this->template->write_view('content', 'frontend/job_preview', $this->data);
            $this->template->render();
        } else {
            redirect('career');
        }
    }

    public function mission_culure() {
        $this->data['page_title'] = lang('frontend_page_title_career_mission');
        $page_id = 'career-mission';
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }

    public function why_alasly() {
        $this->data['page_title'] = lang('frontend_page_title_career_why_alasly');
        $page_id = 'why-alasly';
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }

    public function our_workplace() {
        $this->data['page_title'] = lang('frontend_page_title_career_workplace');
        $page_id = 'our-workplace';
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }

    private function page_data($page_id) {
        $this->data['page_title'] = lang($page_id . '_page_title');
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        return $this->data;
    }

}
