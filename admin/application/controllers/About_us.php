<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About_us extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('About_us_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('about_us/about_us_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->About_us_model->json();
    }

    public function read($id) 
    {
        $row = $this->About_us_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'title' => $row->title,
		'content' => $row->content,
		'type' => $row->type,
	    );
            $this->load->view('about_us/about_us_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('about_us'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('about_us/create_action'),
	    'id' => set_value('id'),
	    'title' => set_value('title'),
	    'content' => set_value('content'),
	    'type' => set_value('type'),
	);
        $this->load->view('about_us/about_us_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'content' => $this->input->post('content',TRUE),
		'type' => $this->input->post('type',TRUE),
	    );

            $this->About_us_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('about_us'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->About_us_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('about_us/update_action'),
		'id' => set_value('id', $row->id),
		'title' => set_value('title', $row->title),
		'content' => set_value('content', $row->content),
		'type' => set_value('type', $row->type),
	    );
            $this->load->view('about_us/about_us_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('about_us'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'content' => $this->input->post('content',TRUE),
		'type' => $this->input->post('type',TRUE),
	    );

            $this->About_us_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('about_us'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->About_us_model->get_by_id($id);

        if ($row) {
            $this->About_us_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('about_us'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('about_us'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('content', 'content', 'trim|required');
	$this->form_validation->set_rules('type', 'type', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "about_us.xls";
        $judul = "about_us";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Title");
	xlsWriteLabel($tablehead, $kolomhead++, "Content");
	xlsWriteLabel($tablehead, $kolomhead++, "Type");

	foreach ($this->About_us_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->title);
	    xlsWriteLabel($tablebody, $kolombody++, $data->content);
	    xlsWriteLabel($tablebody, $kolombody++, $data->type);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=about_us.doc");

        $data = array(
            'about_us_data' => $this->About_us_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('about_us/about_us_doc',$data);
    }

}

/* End of file About_us.php */
/* Location: ./application/controllers/About_us.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-28 06:04:23 */
/* http://harviacode.com */