<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {


        public function dashboard()
        {
            $data['title'] = "Dashboard Page";
            $this->load->view('templates/header');
            $this->load->view('teacher/dashboard', $data);
            $this->load->view('templates/footer');
        }

        public function profile()
        {
            $data['title'] = "Profile Page";
            $this->load->view('templates/header');
            $this->load->view('teacher/profile', $data);
            $this->load->view('templates/footer');
        }

        public function assignments()
        {
            $data['title'] = "Assignments Page";
            $this->load->view('templates/header');
            $this->load->view('teacher/assignment', $data);
            $this->load->view('templates/footer');
        }
        public function material()
        {
            $data['title'] = "Assignments Page";
            $this->load->view('templates/header');
            $this->load->view('teacher/material', $data);
            $this->load->view('templates/footer');
        }

        public function practice()
        {
            //load model
            $this->load->model('Teachers_model');
            // load method model
            $data['teacher'] = $this->Teachers_model->select();
            //reeturn data to view
            $this->load->view('Teacher/prac',$data); 
        }
        public function insert_teacher()
        {
            var_dump($this->input);
          $data  = array('t_id' =>$this->input->post('t_id') ,'t_full_name' =>$this->input->post('t_full_name'),
            'join_date' =>$this->input->post('join_date'),
            't_address' =>$this->input->post('t_address'),
            'phone' =>$this->input->post('phone'),
            't_eamil' =>$this->input->post('t_eamil'),
            'department_id' =>$this->input->post('department_id')
           );
        
            //load model
            $this->load->model('Teachers_model');
            // load method model
            $data['teacher']=$this->Teachers_model->insert_into_db($data);
            redirect('teacher/practice');

        }

}