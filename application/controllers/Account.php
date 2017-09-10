<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

        public function login()
        {
            $data['title'] = "Login Page";
            $this->load->view('templates/header');
            $this->load->view('account/login', $data);
            $this->load->view('templates/footer');
        }

        public function dashboard()
        {
            $data['title'] = "Dashboard Page";
            $this->load->view('templates/header');
            $this->load->view('account/dashboard', $data);
            $this->load->view('templates/footer');
        }

        public function profile()
        {
            $data['title'] = "Profile Page";
            $this->load->view('templates/header');
            $this->load->view('account/profile', $data);
            $this->load->view('templates/footer');
        }

        public function assignments()
        {
            $data['title'] = "Assignments Page";
            $this->load->view('templates/header');
            $this->load->view('account/assignments', $data);
            $this->load->view('templates/footer');
        }
        public function material()
        {
            $data['title'] = "Assignments Page";
            $this->load->view('templates/header');
            $this->load->view('account/material', $data);
            $this->load->view('templates/footer');
        }
        

}