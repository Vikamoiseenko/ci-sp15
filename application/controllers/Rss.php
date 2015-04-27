<?php
class Rss extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('rss_model');
        }

        public function index()
        {       //adds rss///////////////////////
                $data['rss'] = $this->rss_model->get_rss();
                $data['title'] = 'RSS News Feed';

                                ////////////////////////////////

                $this->load->view('templates/header', $data);
                $this->load->view('rss/index', $data);
                $this->load->view('templates/footer');
        }

}
