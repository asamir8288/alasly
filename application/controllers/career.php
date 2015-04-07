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
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'we-are-hiring-banner_1.png' : 'we-are-hiring-banner_ar.png';
        $this->data['jobs'] = OpportunitesTable::getOpportunities(TRUE, $this->data['lang_id']);
        $this->template->write_view('content', 'frontend/available_jobs', $this->data);
        $this->template->render();
    }

    public function details($job_id) {
        if ($job_id) {
            $this->data['job'] = OpportunitesTable::getOne($job_id);
            $this->data['page_title'] = $this->data['job']['job_title'];
            $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'we-are-hiring-banner_1.png' : 'we-are-hiring-banner_ar.png';

            $this->template->write_view('content', 'frontend/job_preview', $this->data);
            $this->template->render();
        } else {
            redirect('career');
        }
    }

    public function mission_culure() {
        $this->data['page_title'] = lang('frontend_page_title_career_mission');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'career_mission_banner.png' : 'career_mission_banner_ar.png';
        $page_id = 'career-mission';
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }

    public function why_alasly() {
        $this->data['page_title'] = lang('frontend_page_title_career_why_alasly');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'why_alasly_banner.png' : 'why_alasly_banner_ar.png';
        $page_id = 'why-alasly';
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }

    public function our_workplace() {
        $this->data['page_title'] = lang('frontend_page_title_career_workplace');
        $this->data['inside_banner'] = ($this->data['lang_id'] == 1) ? 'our_workplace_banner.png' : 'our_workplace_banner_ar.png';
        $page_id = 'our-workplace';
        $this->template->write_view('content', 'frontend/static_page', $this->page_data($page_id));
        $this->template->render();
    }

    private function page_data($page_id) {
        $this->data['page_title'] = lang($page_id . '_page_title');
        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        return $this->data;
    }

    public function application($job_id = '') {
        if ($this->input->post('submit')) {

            $upload_data = upload_file('cvs', array('doc|docx|pdf'), '2028');
            if ($upload_data['error_flag']) {
                $errors['image'] = $upload_data['errors'];
                $error_flag = true;
            } else {

                $_POST['cv_file'] = $upload_data['upload_data']['file_name'];
                $app = new Profiles();
                $application_id = $app->addApplication($_POST);

                if ($job_id) {
                    $uo = new UsersOpportunities();
                    $uo->addApplication($application_id, $job_id);

                    $this->session->set_flashdata('message', array('type' => 'success',
                        'body' => 'Your have application on ' . OpportunitesTable::getJobTitle($job_id) . ' has been created successfully!')
                    );
                } else {
                    $this->session->set_flashdata('message', array('type' => 'success',
                        'body' => 'Your resume has been added successfully to our database!')
                    );
                }

                redirect('career');
            }
        }

        $this->data['page_title'] = lang('available_jobs');
        $this->data['inside_banner'] = 'we-are-hiring-banner_1.png';

        if ($job_id) {
            $this->data['submit_url'] = 'career/application/' . $job_id;
            $this->data['job_title'] = lang('job_title') . OpportunitesTable::getJobTitle($job_id);
        } else {
            $this->data['submit_url'] = 'career/application';
            $this->data['job_title'] = '';
        }

        $this->data['countries'] = LookupCountriesTable::getAllCountries();

        $this->template->add_js('layout/js/jquery.validate.js');
        $this->template->write_view('content', 'frontend/apply_form', $this->data);
        $this->template->render();
    }

}
