<?php

class library_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all("article");
    }

    public function fetch_articles($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("article");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_article($id) {
        $query = $this->db->get_where('article', array('id' => $id));
        return $query->row();
    }

}
