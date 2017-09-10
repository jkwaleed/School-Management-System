<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function index()
        {
            $data['title'] = "User Dashboard Page";
               $this->load->view('templates/header');
               $this->load->view('dashboard/user_dashboard', $data);
                $this->load->view('templates/footer');
        }

}