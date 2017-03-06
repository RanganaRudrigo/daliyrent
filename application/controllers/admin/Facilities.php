<?php

class Facilities extends MY_Controller
{
    function __construct(){
        parent::__construct();
        $this->_checkLogin();
        $this->load->model('Property_type_model','model');
    }

    function index(){

        if($this->input->is_ajax_request()){
            $d[$this->input->post('name')] = $this->input->post('val');
            $this->model->update($d,"id=".$this->input->post('id'));
        }else{
            $d['records'] = $this->model->getRecords();
            $this->load->view('admin/property_type/property_type_list',$d);
        }
    }

    function create(){

        $d['font'] = $this->db->get('font')->result();

        // $this->form_validation->set_rules('form[code]', 'property_type Code', 'required|is_unique[property_type.code]');
        $this->form_validation->set_rules('form[title]', 'Name', 'required');

        if ($this->form_validation->run() == TRUE){
            if($this->model->create()){
                $this->session->set_flashdata('valid', 'Record Inserted Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Insert Failure !!!');
            }
            redirect(current_url());
        }else{
            if($this->input->post())
                $this->session->set_flashdata('error', validation_errors() );
        }
        $this->load->view('admin/property_type/property_type_create' , $d );
    }

    function manage(){

        $d['font'] = $this->db->get('font')->result();

         $this->form_validation->set_rules('form[title]', 'Name', 'required');

        if ($this->form_validation->run() == TRUE){
            if($this->model->update($this->input->post('form') ,  "id = {$this->input->get('id')}" )){
                $this->session->set_flashdata('valid', 'Record Updated Successfully');
            }else{
                $this->session->set_flashdata('error', 'Record Update Failure !!!');
            }
            redirect(current_url()."/?id=".$this->input->get('id'));
        }else{
            if($this->input->post())
                $this->session->set_flashdata('error', validation_errors() );
        }

        $d['result'] = $this->model->getBy(array('id'=> $this->input->get('id') ) , 1  );
         $this->load->view('admin/property_type/property_type_create' ,$d ) ;

    }



}   