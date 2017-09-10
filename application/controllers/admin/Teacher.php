<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Teachers_model');
    }

    function index(){
    	$teachers = $this->Teachers_model->teachers();
    	$this->load->view('templates/header');
    	$this->load->view('admin/teachers/list', ['teachers' => $teachers]);
    	$this->load->view('templates/footer');
    }

    function create(){
    	$teachers = $this->Teachers_model->teachers();
    	$this->load->view('templates/header');
    	$this->load->view('admin/teachers/add');
    	$this->load->view('templates/footer');
    }

    function edit($id){
    		
    	$data['teacher'] = $this->Teachers_model->teacher($id);

    	$teachers = $this->Teachers_model->teachers();
    	$this->load->view('templates/header');
    	$this->load->view('admin/teachers/edit',$data);
    	$this->load->view('templates/footer');
    }

    function delete($id){
    	$this->Teachers_model->delete($id);
    	redirect('admin/teachers'); 	
    }

    public function save(){
  		$id =  $this->input->post('id') !== null ? $this->input->post('id') : null;
  		
    	$teacher = [
    		't_full_name' => $this->input->post('t_full_name'),
    		'join_date' => $this->input->post('join_date'),
    		't_address' => $this->input->post('t_address'),
    		'phone' => $this->input->post('phone'),
    		't_eamil' => $this->input->post('t_eamil'),
    		'department_id' => $this->input->post('department_id'),
    	];

    	$this->Teachers_model->save($teacher, $id);

    	redirect('admin/teachers');
    }

}