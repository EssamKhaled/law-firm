<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function articles()
	{
        $this->load->helper('text');
        $this->load->model("library_model");
        $this->load->library("pagination");
        
        $config = array();
        $config["base_url"] = base_url() . "index.php/library/articles";
        $config["total_rows"] = $this->library_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";        
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["articles"] = $this->library_model->fetch_articles($config["per_page"], $page);
        
        $data["links"] = $this->pagination->create_links();

        $this->layout->view('frontend/library/list',$data);
	}
    
    public function article($id){
        $this->load->library('ion_auth');
        $this->load->model("library_model");
        
        if($this->ion_auth->logged_in()){
            $user_id = $this->session->userdata('user_id');
            $query = $this->db->get_where('users',array('id' => $user_id));
            $user = $query->row(); 
            
            if($user->is_subscribed == 1){
                $data["article"] = $this->library_model->get_article($id);
                $this->layout->view('frontend/library/article',$data);
            }
            else{
                if($this->ion_auth->is_admin()){
                    $data["article"] = $this->library_model->get_article($id);
                    $this->layout->view('frontend/library/article',$data);
                }
                else{
                    redirect('subscribe');    
                } 
            }
        }
        else{
            redirect('subscribe');             
        }
    }
    
    public function get_article_part(){
        $query = $this->db->get_where('article', array('id' => $_POST['id']));
        $article = $query->row(); 
        $paragraphs = explode('<hr />', $article->content);
        die($paragraphs[$_POST['paragraph']]);
    }
    
}
