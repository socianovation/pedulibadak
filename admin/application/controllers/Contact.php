<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Contact_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('contact/contact_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Contact_model->json();
    }

    public function read($id) 
    {
        $row = $this->Contact_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'email' => $row->email,
		'message' => $row->message,
		'created_at' => $row->created_at,
	    );
            $this->load->view('contact/contact_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contact'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('contact/create_action'),
	    'id' => set_value('id'),
	    'email' => set_value('email'),
	    'message' => set_value('message'),
	    'created_at' => set_value('created_at'),
	);
        $this->load->view('contact/contact_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'message' => $this->input->post('message',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Contact_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('contact'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Contact_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('contact/update_action'),
		'id' => set_value('id', $row->id),
		'email' => set_value('email', $row->email),
		'message' => set_value('message', $row->message),
		'created_at' => set_value('created_at', $row->created_at),
	    );
            $this->load->view('contact/contact_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contact'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'message' => $this->input->post('message',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Contact_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('contact'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Contact_model->get_by_id($id);

        if ($row) {
            $this->Contact_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('contact'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contact'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('message', 'message', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "contact.xls";
        $judul = "contact";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Message");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");

	foreach ($this->Contact_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->message);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=contact.doc");

        $data = array(
            'contact_data' => $this->Contact_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('contact/contact_doc',$data);
    }

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-28 06:25:00 */
/* http://harviacode.com */