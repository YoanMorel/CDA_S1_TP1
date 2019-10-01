<?php
defined('BASEPATH') or die('No direct script access allowed');

$config = [
    'home/contacts' => [
        [
            'field' => 'last_name',
            'label' => 'Nom',
            'rules' => 'required'
        ],
        [
            'field' => 'first_name',
            'label' => 'Prénom',
            'rules' => 'required'
        ],
        [
            'field' => 'birth_date',
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