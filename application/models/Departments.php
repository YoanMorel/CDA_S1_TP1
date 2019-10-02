<?php
defined('BASEPATH') or die('No direct script access allowed');

class Departments extends CI_Model {

    protected $_departments;

    public function __construct() {
        parent::__construct();
    }

    public function __get($key) {
        $methodName = 'getProperty_'.$key;
        if(method_exists($this, $methodName)):
            return $this->$methodName();
        else:
            return parent::__get($key);
        endif;
    }

    protected function getProperty_hasItems() {
        return count($this->_departments) > 0;
    }

    protected function getProperty_items() {
        return $this->_departments;
    }

    protected function getProperty_numItems() {
        return count($this->_departments);
    }

    public function loadDepartments() {
        $this->_departments = $this->db->get('t_departments')->result();
    }
}