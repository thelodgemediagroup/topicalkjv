<?php
class Links extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('links_model');
	}

	public function index()
	{
		$data['links'] = $this->links_model->get_links();
		$data['title'] = 'Topics';

		$this->load->view('templates/header', $data);
		$this->load->view('links/index', $data);
		$this->load->view('templates/footer', $data);
	}
}

?>