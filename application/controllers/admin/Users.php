<?php 
defined('BASEPATH') or exit('No Direct script Allowed');

Class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index(){
		$data['part'] = 'users';
		$this->load->view('main/header');
		$this->load->view('main/nav');
		$this->load->view('admin/content',$data);
		$this->load->view('main/footer');
	}
}
?>