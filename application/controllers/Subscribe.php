<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $query = $this->db->get('subscribe');
        $data['subscriptions'] = $query->result(); 
        
        $this->layout->view('frontend/subscribe',$data);        
    }
    
}


