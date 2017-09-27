<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $session = $this->session->userdata();
        $lang = 'indonesia';
        $get  = $this->input->get();
        if(isset($session['lang'])){
            $lang = $session['lang'];
        }
        if(isset($get['lang'])){
            $lang = $get['lang'];
            $this->session->set_userdata(['lang' => $get['lang']]);
        }
        $this->lang->load('message', $lang);
    }

	public function test_aja()
	{
		echo 'test';
	}
}
