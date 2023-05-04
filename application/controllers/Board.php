<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Board extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Board_model', 'board');
	}
	public function index()
	{
		$data['list'] = $this->board->getAll(); //Retrieve the 'getAll' function from the 'board' model and store the result in an array named '$data' with a key of 'list' 

		$this->load->view('board/list', $data);
	}

	public function create()
	{
		$this->load->view('board/create');
	}

	public function detail($idx)
	{
		$data['detail'] = $this->board->get($idx);
		$this->load->view('board/detail', $data);
	}

	public function update($idx)
	{
		$data['update'] = $this->board->get($idx);
		$this->load->view('board/update', $data);
	}
	public function store()
	{
		$this->form_validation->set_rules('title', 'Title', "required");
		$this->form_validation->set_rules('content', 'Content', "required");

		if ($this->form_validation->run()) {
			$this->board->store();
			redirect('/board');
		} else {
			echo "Error";
		}
	}

}