<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Gallery_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('gallery/gallery_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Gallery_model->json();
    }

    public function read($id) 
    {
        $row = $this->Gallery_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'title' => $row->title,
		'description' => $row->description,
		'source' => $row->source,
		'type' => $row->type,
	    );
            $this->load->view('gallery/gallery_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gallery'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('gallery/create_action'),
	    'id' => set_value('id'),
	    'title' => set_value('title'),
	    'description' => set_value('description'),
	    'source' => set_value('source'),
	    'type' => set_value('type'),
	);
        $this->load->view('gallery/gallery_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'description' => $this->input->post('description',TRUE),
		'source' => $this->input->post('source',TRUE),
		'type' => $this->input->post('type',TRUE),
	    );

            $this->Gallery_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('gallery'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Gallery_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('gallery/update_action'),
		'id' => set_value('id', $row->id),
		'title' => set_value('title', $row->title),
		'description' => set_value('description', $row->description),
		'source' => set_value('source', $row->source),
		'type' => set_value('type', $row->type),
	    );
            $this->load->view('gallery/gallery_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gallery'));
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
		'description' => $this->input->post('description',TRUE),
		'source' => $this->input->post('source',TRUE),
		'type' => $this->input->post('type',TRUE),
	    );

            $this->Gallery_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('gallery'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Gallery_model->get_by_id($id);

        if ($row) {
            $this->Gallery_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('gallery'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gallery'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('source', 'source', 'trim|required');
	$this->form_validation->set_rules('type', 'type', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "gallery.xls";
        $judul = "gallery";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Description");
	xlsWriteLabel($tablehead, $kolomhead++, "Source");
	xlsWriteLabel($tablehead, $kolomhead++, "Type");

	foreach ($this->Gallery_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->title);
	    xlsWriteLabel($tablebody, $kolombody++, $data->description);
	    xlsWriteLabel($tablebody, $kolombody++, $data->source);
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
        header("Content-Disposition: attachment;Filename=gallery.doc");

        $data = array(
            'gallery_data' => $this->Gallery_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('gallery/gallery_doc',$data);
    }

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-27 11:03:51 */
/* http://harviacode.com */