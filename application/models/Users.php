<?php
defined('BASEPATH') or die('No direct script access allowed');

Class Users extends CI_Model {

    protected $_id;
    protected $_lastName;
    protected $_firstName;
    protected $_birthDate;
    protected $_adress;
    protected $_city;
    protected $_zip;
    protected $_phone;
    protected $_department;
    protected $_usersList;

    public function __construct() {
        parent::__construct();
        $this->clearData();
        $this->setProperty_usersList();
    }

    public function __get($key) {
        $methodName = 'getProperty_'.$key;
        if(method_exists($this, $methodName)):
            return $this->$methodName();
        else:
            return parent::__get($key);
        endif;
    }

    public function __set($key, $value) {
        $methodName = 'setProperty_'.$key;
        if(method_exists($this, $methodName)):
            return $this->$methodName($value);
        else:
            return parent::__set($key, $value);
        endif;
    }

    protected function clearData() {

        $this->_id          = NULL;
        $this->_lastName    = NULL;
        $this->_firstName   = NULL;
        $this->_birthDate   = NULL;
        $this->_adress      = NULL;
        $this->_city        = NULL;
        $this->_zip         = NULL;
        $this->_phone       = NULL;
        $this->_department  = NULL;
    }

    protected function getProperty_id() {
        return $this->_id;
    }

    protected function getProperty_lastName() {
        return $this->_lastName;
    }

    protected function getProperty_firstName() {
        return $this->_firstName;
    }

    protected function getProperty_birthDate() {
        return $this->_birthDate;
    }

    protected function getProperty_adress() {
        return $this->_adress;
    }

    protected function getProperty_city() {
        return $this->_city;
    }

    protected function getProperty_zip() {
        return $this->_zip;
    }

    protected function getProperty_phone() {
        return $this->_phone;
    }

    protected function getProperty_department() {
        return $this->_department;
    }

    protected function getProperty_hasUsers() {
        return count($this->_usersList) > 0;
    }

    protected function getProperty_numUsers() {
        return count($this->_usersList);
    }

    protected function getProperty_users() {
        return $this->_usersList;
    }

    protected function getProperty_isFound() {
        return $this->_id !== NULL;
    }

    public function createUser() {

        $properties = [
            'USE_LAST_NAME' => $this->_lastName,
            'USE_FIRST_NAME' => $this->_firstName,
            'USE_BIRTH_DATE' => $this->_birthDate,
            'USE_ADRESS' => $this->_adress,
            'USE_CITY' => $this->_city,
            'USE_ZIP_CODE' => $this->_zip,
            'USE_PHONE' => $this->_phone,
            'DEP_ID' => $this->_department
        ];

        $this->db->insert('t_users', $properties);
    }

    public function loadUser($userId) {
        $this->clearData();
        $this->db->from('t_users')->where('USE_ID', $userId);
        $result = $this->db->get()->first_row();

        if($result !== NULL):
            $this->_id = $result->USE_ID;
        endif;
    }

    public function deleteUser() {
        $stmt = $this->db->delete('t_users', ['USE_ID' => $this->_id]);

        if($stmt !== FALSE):
            return TRUE;
        else:
            return $stmt;
        endif;
    }

    public function loadUsersIn($department) {
        $this->db->select('t_users.*, DATE_FORMAT(t_users.USE_BIRTH_DATE, "%d/%m/%Y") AS bDay, t_departments.DEP_DEPARTMENT');
        $this->db->from('t_users');
        $this->db->join('t_departments', 't_users.DEP_ID = t_departments.DEP_ID', 'left');
        $this->db->where('DEP_DEPARTMENT', $department);

        $this->_usersList = $this->db->get()->result();
    }

    private function setProperty_usersList() {

        $this->db->select('t_users.*, DATE_FORMAT(t_users.USE_BIRTH_DATE, "%d/%m/%Y") AS bDay, t_departments.DEP_DEPARTMENT');
        $this->db->from('t_users');
        $this->db->join('t_departments', 't_departments.DEP_ID = t_users.DEP_ID', 'left');

        $this->_usersList = $this->db->get()->result();
    }

    protected function setProperty_lastName($lastName) {
        $this->_lastName = $lastName;
    }

    protected function setProperty_firstName($firstName) {
        $this->_firstName = $firstName;
    }

    protected function setProperty_birthDate($birthDate) {
        $this->_birthDate = $birthDate;
    }

    protected function setProperty_adress($adress) {
        $this->_adress = $adress;
    }

    protected function setProperty_city($city) {
        $this->_city = $city;
    }

    protected function setProperty_zip($zip) {
        $this->_zip = $zip;
    }

    protected function setProperty_phone($phone) {
        $this->_phone = $phone;
    }

    protected function setProperty_department($department) {
        $this->_department = $department;
    }
}
?>