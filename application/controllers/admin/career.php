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
class Career extends My_Controller {

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
        $this->data['page_title'] = lang('page_main_title');
        $this->template->write_view('content', 'backend/career_lnks', $this->data);
        $this->template->render();
    }

    public function available_jobs() {
        $this->data['page_title'] = lang('list_of_available_jobs');
        
        $this->data['inside_sub_menu'] = 'career_lnks';

        $this->data['jobs'] = OpportunitesTable::getOpportunities();

        $this->template->write_view('content', 'backend/list_all_jobs', $this->data);
        $this->template->render();
    }
    
    public function switch_status($job_id) {
        if ($job_id) {
            $o = new Opportunites();
            $o->switchStatus($job_id);

            redirect('admin/career/available_jobs');
        }
    }
    
    public function delete_job($job_id){
        if($job_id){
            $o = new Opportunites();
            $o->deleteJob($job_id);
            
            redirect('admin/career/available_jobs');
        }
    }

    public function add_edit_job($job_id = '') {
        if ($this->input->post('submit')) {
            $o = new Opportunites();

            if ($job_id != '') {
                $_POST['id'] = $job_id;
                $o->updatePost($_POST);
            } else {
                $o->addPost($_POST);
            }

            redirect('admin/career');
        }

        $this->data['countries'] = LookupCountriesTable::getAllCountries();
        $this->data['careerLevels'] = LookupCareersLevelTable::getAllCareerLevels();
        $this->data['industries'] = LookupIndustriesTable::getAllIndustries();
        $this->data['jobRoles'] = LookupJobRolesTable::getAllJobRoles();

        if ($job_id) {
            $this->data['data'] = OpportunitesTable::getOne($job_id);
            $this->data['post_url'] = 'admin/career/add_edit_job/' . $job_id;
            $this->data['submit_btn'] = lang('submit_btn_update');
        } else {
            $this->data['post_url'] = 'admin/career/add_edit_job';
            $this->data['submit_btn'] = lang('submit_btn_add');
        }

//        var_dump($this->data['data']);exit;

        $this->template->write_view('content', 'backend/add_edit_job', $this->data);
        $this->template->render();
    }

    public function mission() {
        $page_id = 'career-mission';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;

            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);

            redirect('admin/career/mission');
        }

        $this->data['post_url'] = 'admin/career/mission';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('career_mission');
        
        $this->data['inside_sub_menu'] = 'career_lnks';

        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }

    public function why_alasly() {
        $page_id = 'why-alasly';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;

            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);

            redirect('admin/career/why_alasly');
        }

        $this->data['post_url'] = 'admin/career/why_alasly';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('career_why_alasly');
        
        $this->data['inside_sub_menu'] = 'career_lnks';

        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }

    public function our_workplace() {
        $page_id = 'our-workplace';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;

            $p = new StaticPages();
            $p->updatePage($_POST, $this->data['lang_id']);

            redirect('admin/career/our_workplace');
        }

        $this->data['post_url'] = 'admin/career/our_workplace';
        $this->data['submit_btn'] = lang('update');
        $this->data['page_title'] = lang('page_main_title') . lang('career_our_workplace');
        
        $this->data['inside_sub_menu'] = 'career_lnks';

        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->template->write_view('content', 'backend/about', $this->data);
        $this->template->render();
    }

}
