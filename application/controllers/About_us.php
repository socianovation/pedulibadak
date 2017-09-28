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
		/*$home_sliders = $this->db->query("SELECT * FROM home_sliders")->result_array();

		$our_values = $this->db->query("SELECT * FROM our_values")->result_array();

		$workflows = $this->db->query("SELECT * FROM workflows")->result_array();

		$our_works = $this->db->query("SELECT * FROM our_works")->result_array();

		$clients = $this->db->query("SELECT * FROM clients")->result_array();

		$num_ow = count($our_works);
		for($a = 0; $a < $num_ow; $a++)
		{
			$our_works[$a]['images'] = json_decode($our_works[$a]['images'], true);
		}

		$data = array(
			'home_sliders' => $home_sliders, 
			'our_values' => $our_values, 
			'workflows' => $workflows,
			'our_works' => $our_works,
			'clients' => $clients
			);

		return $data;*/

		$gallery = $this->db->query("SELECT * FROM gallery")->result_array();

		$data = array(
			'gallery' => $gallery
		);

		return $data;
	}
}
