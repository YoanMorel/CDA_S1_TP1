<?php
defined('BASEPATH') or die('No direct script access allowed');

$config = [
    'home/contacts' => [
        [
            'field' => 'lastName',
            'label' => 'Nom',
            'rules' => 'required'
        ],
        [
            'field' => 'firstName',
            'label' => 'Prénom',
            'rules' => 'required'
        ],
        [
            'field' => 'birthDate',
            'label' => 'Date de naissance',
            'rules' => 'required'
        ],
        [
            'field' => 'city',
            'label' => 'Ville',
            'rules' => 'required'
        ],
        [
            'field' => 'zip',
            'label' => 'Code Postal',
            'rules' => 'required'
        ],
        [
            'field' => 'phone',
            'label' => 'Téléphone',
            'rules' => 'required'
        ],
        [
            'field' => 'department',
            'label' => 'Service',
            'rules' => 'required'
        ]
    ]
];

?>