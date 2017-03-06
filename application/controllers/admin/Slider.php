<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 12/8/2015
 * Time: 2:58 PM
 */
class Slider extends MY_Controller
{
    function __construct(){
        parent::__construct();
        $this->_checkLogin();
        $this->load->model('slider_model','model');
    }

    function index(){

        if($this->input->is_ajax_request()){
            $d[$this->input->post('name')] = $this->input->post('val');
            $this->model->update($d,"id=".$this->input->post('id'));
        }else{
            $d['records'] = $this->model->getRecords();
            $this->load->view('admin/slider/slider_list',$d);
        }
    }

    function create(){

        // $this->form_validation->set_rules('form[code]', 'slider Code', 'required|is_unique[slider.code]');
        $this->form_validation->set_rules('image[]', 'Image', 'required');

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
        $d['result'] = $this->model->getRecords();
        $this->load->view('admin/slider/slider_create',$d);
    }



}