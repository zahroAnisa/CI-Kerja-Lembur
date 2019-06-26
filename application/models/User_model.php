<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class User_model extends CI_Model{
    private $_id;
    private $_nipeg;
    private $_name;
    private $_password;
    private $_birth_place;
    private $_birth_date;
    private $_address;
    private $_gender;
    private $_mobile;
    private $_email;
    private $_photo_profile;
    private $_status;
    private $_role;

    public function setUserID($_id){
        $this->_id = $_id;
    }

    public function setNipeg($_nipeg){
        $this->_nipeg=$_nipeg;
    }

    public function setName($_name){
        $this->_name=$_name;
    }

    public function setPassword($_password){
        $this->_password=$_password;
    }

    public function setBirthPlace($_birth_place){
        $this->_birth_place=$_birth_place;
    }

    public function setBirthDate($_birth_date){
        $this->_birth_date=$_birth_date;
    }

    public function setAddress($_address){
        $this->_address=$_address;
    }

    public function setGender($_gender){
        $this->_gender=$_gender;
    }

    public function setMobile($_mobile){
        $this->_mobile=$_mobile;
    }

    public function setEmail($_email){
        $this->_email=$_email;
    }

    public function setProfile($_photo_profile){
        $this->_photo_profile=$_photo_profile;
    }

    public function setStatus($_status){
        $this->_status=$_status;
    }

    public function setRole($_role){
        $this->_role=$_role;
    }

    
    

    /**
     *
     */
    public function createUser() {
        $data = array(
            'id'=> $this->_id,
            'first_name'=> $this->_first_name,
            'last_name'=>$this->_last_name,
            'email'=>$this->_email,
            'mobile'=>$this->_mobile,
            'password'=>$this->_password,
            'country'=>$this->_country,
        );
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
}
