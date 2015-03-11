<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Asamir
 */
class Login extends My_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        if($this->input->post('submit')){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $user = AdminUsersTable::loginData($username, $password);
            if($user !== false){
                $this->session->set_userdata('is_login' , true);
                
                $admin_info = array(
                    'username' => $user['au_username'],
                    'admin_id' => $user['au_id']
                );
                $this->session->set_userdata('admin_info' , $admin_info);
                redirect(site_url('admin/dashboard'));
            }else{
                redirect(site_url('admin/login'));
            }
        }
        
        $this->data['page_title'] = 'Login';
        $this->template->add_css('layout/css/form.css');
        
        $this->template->write_view('content', 'backend/login_view', $this->data);
        $this->template->render();
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }

}