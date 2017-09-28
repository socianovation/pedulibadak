<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends MY_Controller {

	public function index()
	{
		$this->load->view('about/index_view', 
			$this->initialize_data_from_db()
		);
	}

	private function initialize_data_from_db()
	{
		$about = $this->db->query("SELECT * FROM about_us")->result_array();

		$data = array(
			'about' => $about
			);

		return $data;
	}
}
