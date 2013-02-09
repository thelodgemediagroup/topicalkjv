<?php
class Readings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('readings_model');
	}

	public function index()
	{
		$data['readings'] = $this->readings_model->get_readings();
		$data['title'] = 'Bible Verses';

		$this->load->view('templates/header', $data);
		$this->load->view('readings/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function view($topic_id)
	{
		$data['readings'] = $this->readings_model->get_readings($topic_id);
		$data['title'] = 'Bible Verses';

		$this->load->view('templates/header', $data);
		$this->load->view('readings/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function view_verse($reading_id)
	{
		$data['reading'] = $this->readings_model->get_verse($reading_id);
		$data['title'] = 'Single Verse';

		$this->load->view('templates/header', $data);
		$this->load->view('readings/view_verse', $data);
		$this->load->view('templates/footer', $data);
	}
}

?>