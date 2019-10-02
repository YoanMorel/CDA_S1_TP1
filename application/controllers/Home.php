<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['title'] = 'TP1';
        $this->load->model('users');
        
        if($this->users->hasUsers):
            $data['users'] = $this->users->users;
        endif;

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
            $this->load->model('users');

            $this->users->lastName      = $this->input->post('lastName');
            $this->users->firstName     = $this->input->post('firstName');
            $this->users->birthDate     = $this->input->post('birthDate');
            $this->users->adress        = $this->input->post('adress');
            $this->users->city          = $this->input->post('city');
            $this->users->zip           = $this->input->post('zip');
            $this->users->phone         = $this->input->post('phone');
            $this->users->department    = $this->input->post('department');
            $this->users->createUser();
            $this->load->view('site/contacts_result');
        else:
            $this->load->model('departments');
            $this->departments->loadDepartments();
            if($this->departments->hasItems):
                $data['options'] = ['' => '-- Choisir un service --'];
                foreach($this->departments->items as $row):
                    $data['options'][$row->DEP_ID] = $row->DEP_DEPARTMENT;
                endforeach;
            endif;
            $this->load->view('site/contacts', $data);
        endif;
        $this->load->view('common/footer', $data);
    }
}

?>