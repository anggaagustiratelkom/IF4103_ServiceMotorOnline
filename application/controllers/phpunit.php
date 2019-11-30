<?php

function getEmail($email){
    return $email;
}
function getPassword($password){
    return $password;
}
class phpunit extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
    }
    public function index(){
        $email="aaa@gmail.com";
        $pass="aaa";
        $this->unit->run(getEmail('aaa@gmail.com'),$email,'testing email');
        $this->unit->run(getPassword('aaa'),$pass,'testing pass');
        $this->load->view('test');
    }
}
?>