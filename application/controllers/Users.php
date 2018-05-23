<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('m_users','users');
  }
    public function index(){
      $this->load->view('main/header');
      $this->load->view('main/nav');
      $this->load->view('login');
      $this->load->view('main/footer');
    }
    public function register() {
      $this->load->view('main/header');
      $this->load->view('register');
      $this->load->view('main/footer');
    }
    /* function test() {
      $user_name = "=========";
      $password = "---------";
      echo $this->users->verify_login($user_name,$password);
    } */
    /* login controller */
    function login() {
      $user_name = $this->input->post('username');
      $password = $this->input->post('password');
      $remember = $this->input->post('remember');
      $data = $this->users->verify_login($user_name,$password);
      if ($data == !false) {
        foreach ($data->result_array() as $info){
          $session_info = array(
            'id' => $info['id'],
            'isLogged' => 1,
            'login' => $info['login'],
            'first_name' => $info['first_name'],
            'last_name' => $info['last_name'],
            'email' => $info['email']
          );
          $this->session->set_userdata($session_info);
          redirect('restricted',301);
      }
      }else{
        $this->session->set_flashdata('login_error', 'Username or password is incorrect');
        redirect('users',301);
      }
    }
    function logout() {
      $this->session->unset_userdata('isLogged');
			session_destroy();
			redirect('/','location',301);
    }
    /* End Of Login Controller */
    function add_user() {
      /* validation Rules */
      $this->form_validation->set_rules('firstName','First Name','trim|required|min_length[4]|max_length[20]|alpha');
      $this->form_validation->set_rules('lastName','Last Name','trim|required|min_length[4]|max_length[20]|alpha');
      $this->form_validation->set_rules('login','Login Name','required|trim|min_length[4]|max_length[30]|is_unique[sm_users.login]|alpha_numeric');
      $this->form_validation->set_rules('email','Email Address','required|trim|min_length[5]|max_length[100]|is_unique[sm_users.email]|valid_email');
      $this->form_validation->set_rules('password','Password','required|alpha_numeric');
      $this->form_validation->set_rules('passwordVerify','Password Confirmation','required|matches[password]');
      $this->form_validation->set_rules('bio','Bio','trim');
      /* end validation rules */
      /* start form validation */
      if ( $this->form_validation->run() == false ){
        $this->load->view('main/header');
        $this->load->view('register');
        $this->load->view('main/footer');
      }
      else
      {            
      $first_name = $this->input->post('firstName');
      $last_name = $this->input->post('lastName');
      $login = $this->input->post('login');
      $email = $this->input->post('email');
      $pic_url = null;
      $password_plain = $this->input->post('password');    
      $passwordVerify = $this->input->post('passwordVerify');
      $bio = $this->input->post('bio');
      $role = 2;
      $password = password_hash($password_plain,PASSWORD_DEFAULT);

      
      
      $data = array(
        'login' => $login,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'pic' => $pic_url ,
        'bio' => $bio ,
        'role' => $role,
        'status' => 1
      );

      $return = $this->users->add_user($data);
      if ( $return == 1 ) {
        echo 'Success';
      }else{
        echo 'Failure';
      }
    } /* end form validation */
    }
  
  /* function upload_attachment() {
    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload',$config);

        if ( $this->upload->do_upload('pic_url') ) {
          $filename = $this->upload->data('file_name');
          $is_image = $this->upload->data('is_image');
          $file_size = $this->upload->data('file_size');
          $image_size = $this->upload->data('image_size_str');
          $client_name = $this->upload->data('client_name');
          $file_type = $this->upload->data('file_type');

          $image = array(
            'file_name' => $filename,
            'file_type' => $file_type,
            'file_size'  => $file_size,
            'image_size'  => $image_size,
            'client_name' => $client_name,
            'is_image' => $is_image
          );
          $inserted_pic = $this->users->add_attachment($image);
          $first_name = $this->input->post('firstName');
      $last_name = $this->input->post('lastName');
      $login = $this->input->post('login');
      $email = $this->input->post('email');
      $pic_url = $inserted_pic;
      $password_plain = $this->input->post('password');    
      $passwordVerify = $this->input->post('passwordVerify');
      $bio = $this->input->post('bio');
      $role = 1;
      $password = password_hash($password_plain,PASSWORD_DEFAULT);

      
      
      $data = array(
        'login' => $login,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'pic' => $pic_url ,
        'bio' => $bio ,
        'role' => $role,
        'status' => 1
      );

      $return = $this->users->add_user($data);
      if ( $return == 1 ) {
        echo 'Success';
      }else{
        echo 'Failure';
      }
        }else{
        }
  } */
}
?>
