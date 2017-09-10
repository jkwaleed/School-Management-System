<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Course_model');
    }

    function index(){
    	$courses = $this->Course_model->courses();
    	$this->load->view('templates/header');
    	$this->load->view('admin/courses/list', ['courses' => $courses]);
    	$this->load->view('templates/footer');
    }

    function create(){
    	$courses = $this->Course_model->courses();
    	$this->load->view('templates/header');
    	$this->load->view('admin/courses/add');
    	$this->load->view('templates/footer');
    }

    function edit($id){
    		
    	$data['course'] = $this->Course_model->course($id);

    	$courses = $this->Course_model->courses();
    	$this->load->view('templates/header');
    	$this->load->view('admin/courses/edit',$data);
    	$this->load->view('templates/footer');
    }

    function delete($id){
    	$this->Course_model->delete($id);
    	redirect('admin/courses'); 	
    }

    public function save(){
  		$id =  $this->input->post('id') !== null ? $this->input->post('id') : null;
  		
    	$course = [
    		'c_name' => $this->input->post('name')
    	];

    	$this->Course_model->save($course, $id);

    	redirect('admin/courses');
    }

}