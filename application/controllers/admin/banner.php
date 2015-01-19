<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banner
 *
 * @author asamir
 */
class Banner extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->input->post('submit')) {
            $_POST['lang_id'] = $this->data['lang_id'];

            $b = new Banners();
            $b->addBanner($_POST);

            redirect('admin/banner');
        }

        $this->data['page_title'] = 'Add New Banner';
        $this->data['post_url'] = 'admin/banner/index';
        $this->data['submit_btn'] = lang('admin_add_banner');

        $this->data['activeBanners'] = BannersTable::getActiveBanners(FALSE, 'DESC', $this->data['lang_id']);
        $this->template->write_view('content', 'backend/banners', $this->data);
        $this->template->render();
    }
    
    public function delete_banner($id) {
        $b = new Banners();
        $b->deleteBanner($id);
        
        redirect('admin/banner');
    }

}
