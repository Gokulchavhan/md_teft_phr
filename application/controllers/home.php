<?php

class Home extends CI_Controller
{

    public function index($area = 'home', $page = 'home')
    {

        if (!file_exists('application/areas/'.$area .'/'.$page.'.php')) {
            show_404();
        }

        $data['page'] = $page;
        $data['area'] = $area;
        $this->load->helper('url');
        $this->load->view("templates/master-layout.php", $data);

    }
}