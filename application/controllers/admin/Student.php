<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Student_model');
    }

    function index(){
    	$students = $this->Student_model->students();
    	$this->load->view('templates/header');
    	$this->load->view('admin/students/list', ['students' => $students]);
    	$this->load->view('templates/footer');
    }

    function create(){
    	$students = $this->Student_model->students();
    	$this->load->view('templates/header');
    	$this->load->view('admin/students/add');
    	$this->load->view('templates/footer');
    }

    function edit($id){
    		
    	$data['student'] = $this->Student_model->student($id);

    	$students = $this->Student_model->students();
    	$this->load->view('templates/header');
    	$this->load->view('admin/students/edit',$data);
    	$this->load->view('templates/footer');
    }

    function delete($id){
    	$this->Student_model->delete($id);
    	redirect('admin/students'); 	
    }

    public function save(){
  		$id =  $this->input->post('id') !== null ? $this->input->post('id') : null;
  		
    	$student = [
    		's_name' => $this->input->post('s_name'),
    		'f_name' => $this->input->post('f_name'),
    		's_address' => $this->input->post('s_address'),
    		'date_of_addmision' => $this->input->post('date_of_addmision'),
    		'date_of_birth' => $this->input->post('date_of_birth'),
            's_eamil' => $this->input->post('s_eamil'),
    		's_phone' => $this->input->post('s_phone'),
            'class_id' => $this->input->post('class_id')
    	];

    	$this->Student_model->save($student, $id);

    	redirect('admin/students');
    }

}