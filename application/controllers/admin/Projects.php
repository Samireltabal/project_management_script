<?php 
defined('BASEPATH') or exit('No Direct script Allowed');

Class Projects extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index(){
		$data['part'] = 'projects';
		$this->load->view('main/header');
		$this->load->view('main/nav');
		$this->load->view('admin/content',$data);
		$this->load->view('main/footer');
	}
}
?>