<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

        public function index()
        {
            $data['title'] = "News Page";
               $this->load->view('templates/header');
        	$this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }
     
        

}
?>