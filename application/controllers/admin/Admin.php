<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function login()
        {
            $data['title'] = "Login Page";
            $this->load->view('templates/header');
            $this->load->view('admin/login', $data);
            $this->load->view('templates/footer');
        }

        public function admin_panel()
        {
            $data['title'] = "Admin Page";
            $this->load->view('templates/header');
            $this->load->view('admin/admin_panel', $data);
            $this->load->view('templates/footer');
        }

        public function add_student()
        {
            $data['title'] = "add_student Page";
            $this->load->view('templates/header');
            $this->load->view('admin/add_student', $data);
            $this->load->view('templates/footer');
        }

        public function add_teacher()
        {
            $data['title'] = "add_teacher Page";
            $this->load->view('templates/header');
            $this->load->view('admin/add_teacher', $data);
            $this->load->view('templates/footer');
        }

        public function add_news()
        {
            $data['title'] = "add_news Page";
            $this->load->view('templates/header');
            $this->load->view('admin/add_news', $data);
            $this->load->view('templates/footer');
        }

        public function add_events()
        {
            $data['title'] = "add_events Page";
            $this->load->view('templates/header');
            $this->load->view('admin/add_events', $data);
            $this->load->view('templates/footer');
        }

        public function delete_teacher()
        {
            $data['title'] = "delete_teacher Page";
            $this->load->view('templates/header');
            $this->load->view('admin/delete_teacher', $data);
            $this->load->view('templates/footer');
        }

         public function delete_student()
        {
            $data['title'] = "delete_student Page";
            $this->load->view('templates/header');
            $this->load->view('admin/delete_student', $data);
            $this->load->view('templates/footer');
        }

         public function delete_news()
        {
            $data['title'] = "delete_news Page";
            $this->load->view('templates/header');
            $this->load->view('admin/delete_news', $data);
            $this->load->view('templates/footer');
        }

         public function delete_events()
        {
            $data['title'] = "delete_events Page";
            $this->load->view('templates/header');
            $this->load->view('admin/delete_events', $data);
            $this->load->view('templates/footer');
        }


}