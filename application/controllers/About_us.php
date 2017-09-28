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

	public function contact()
	{
		$post = $this->input->post();
		
		//Insert to DB
		$sql = "INSERT INTO `contact` VALUES(?,?,?,?)";
		$this->db->query($sql, array('',$post['email'], $post['message'], date("Y-m-d H:i:s")));

		echo 'ok';

		return false;
		
	}
}
