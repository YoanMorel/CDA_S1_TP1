<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['title'] = 'TP1';

        $this->load->view('common/header', $data);
        $this->load->view('site/index', $data);
        $this->load->view('common/footer', $data);
    }

    public function contacts() {
        $this->load->helper(['form', 'html']);
        $this->load->library('form_validation');
        $data['title'] = 'Ajout de contact';

        $this->load->view('common/header', $data);
        if($this->form_validation->run()):
            $this->load->view('site/contacts_result');
        else:
            $this->load->view('site/contacts', $data);
        endif;
        $this->load->view('common/footer', $data);
    }
}

?>