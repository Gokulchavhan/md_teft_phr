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
        $data['_serviceactivitydetails_modal'] = $this->load->view('pages/shared/_serviceactivitydetails_modal.php', $data, true);
        $data['_flagservice_modal'] = $this->load->view('pages/shared/_flagservice_modal.php', $data, true);
        $data['_completedflag_modal'] = $this->load->view('pages/shared/_completedflag_modal.php', $data, true);
        $this->load->view("templates/master-layout.php", $data);

    }
}