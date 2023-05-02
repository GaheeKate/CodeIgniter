<?php
class Board_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function store(){
        $data=[
            'title'=> $this->input->post('title'),
            'content'=> $this->input->post('content'),
            'regdate'=> date("Y-m-d H:i:s")
        ];

        $result = $this->db->insert('boards',$data);
        return $result;
    }
}