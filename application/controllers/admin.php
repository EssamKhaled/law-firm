<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        
        $this->load->library('ion_auth');

        if(!$this->ion_auth->is_admin()){
            show_404();
        }
    }

    public function _admin_output($output = null) {
        $this->load->view('backend/layout', $output);
    }

    public function index() {
        $this->_admin_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }
    
    public function dashboard(){ 
        $dashboard = $this->load->view('backend/dashboard', '', true);
        $data = array('output' => $dashboard, 'js_files' => array(), 'css_files' => array());        
        $this->load->view('backend/layout',$data);        
    }    
    
    public function users() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('users');
        $crud->set_subject('Customer');
        
        $crud->columns('first_name','email','active');
        
        $output = $crud->render();

        $this->_admin_output($output);
    }   
    
    public function slider() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('slider');
        $crud->set_subject('Image');

        $crud->required_fields('title','image');
        $crud->set_field_upload('image','assets/uploads');
        
        $output = $crud->render();

        $this->_admin_output($output);
    }    
      
    public function reports(){ 
        $dashboard = $this->load->view('backend/reports', '', true);
        $data = array('output' => $dashboard, 'js_files' => array(), 'css_files' => array());        
        $this->load->view('backend/layout',$data);        
    }    
    
    
}
