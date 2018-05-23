<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restricted extends CI_Controller {
public function __construct() {
    parent::__construct();
    check_login();
}
function index() {
    $this->load->view('main/header');
    $this->load->view('main/nav');
    $this->load->view('logged_in');
    $this->load->view('main/footer');
}
function members(){
    if (is_logged() == False) {
        $this->load->view('main/header');
        $this->load->view('main/nav');
        $this->load->view('authorisation/no');
        $this->load->view('main/footer'); 
    }else{
        $this->load->view('main/header');
        $this->load->view('main/nav');
        $this->load->view('authorisation/authorised');
        $this->load->view('main/footer'); 
      }
}
function admin_only(){
    if (check_admin() == False) {
        $this->load->view('main/header');
        $this->load->view('main/nav');
        $this->load->view('authorisation/no');
        $this->load->view('main/footer'); 
    }else{
        $this->load->view('main/header');
        $this->load->view('main/nav');
        $this->load->view('authorisation/authorised');
        $this->load->view('main/footer'); 
    }
}
}