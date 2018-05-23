<?php 
defined('BASEPATH') or exit('No Direct script Allowed');

Class main extends CI_controller {
	public function __construct() {
		parent::__construct();
		if (check_admin() !== true) {
			redirect('users');
		}
	}
	public function index(){ 
		$data['part'] = 'main';
		$this->load->view('main/header');
		$this->load->view('main/nav');
		$this->load->view('admin/content',$data);
		$this->load->view('main/footer');
	}
}

?>