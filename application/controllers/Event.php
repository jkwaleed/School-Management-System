<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

        public function index()
        {
            $data['title'] = "Events Page";
               $this->load->view('templates/header');
               $this->load->view('events/index', $data);
                $this->load->view('templates/footer');
        }

}