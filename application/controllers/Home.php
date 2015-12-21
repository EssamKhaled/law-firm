<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $query = $this->db->get('subscribe');
        $data['subscriptions'] = $query->result(); 
        
        $slider_query = $this->db->get('slider');
        $data['sliders'] = $slider_query->result(); 
        
        $this->layout->view('frontend/home',$data);
	}
}
