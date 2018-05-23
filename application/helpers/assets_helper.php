<?php 
function get_file($str) {
    return base_url().'assets/'.$str;
}
function check_login() {
	$CI = & get_instance();
	$islogin = $CI->session->userdata('isLogged');
	if ($islogin == true){
		return true;
	}else{
		redirect('users',301);
	}
}
function is_logged() {
	$CI = & get_instance();
	$islogin = $CI->session->userdata('isLogged');
	if ($islogin == true){
		return true;
	}else{
		return False;
	}
}
function check_role($id) {
	$app = & get_instance();
	$app->load->model('m_users','user');
	$role = $app->user->get_role($id);
	return $role;
}
function role_name($id) {
	$role = check_role($id);
	switch ($role) {
		case '1':
			return "Admin";
			break;
		case '2': 
			return "Member";
			break;
		default:
			# code...
			break;
	}
}
function check_admin() {
	$app = & get_instance();
	$id = $app->session->userdata('id');
	$role = check_role($id);
	if ($role == 1) {
		return true;
	}
	else{
		return false;
	}
}

/* login form */
	function login_form() {
		if ( is_logged() ) {
			$app = & get_instance();
			?>
			
			<ul class="nav navbar-nav my-lg-0">
      		<li class="nav-item dropdown">
			  <?php
			
			echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Hello  ' . $app->session->userdata('first_name')  . '  
		  </a>';
			echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
			echo anchor('users/logout','Log Out',array('class'=>'dropdown-item')); 
			?>
			</div>			
			</li>
			</ul>
			<?php		}else{
		$attributes = array("class" => "form-inline my-2 my-lg-0");
		echo form_open("users/login", $attributes) . '            
            <input class="form-control mr-sm-2" name="username" type="text" placeholder="Username" aria-label="Username">
            <input class="form-control mr-sm-2" name="password" type="password" placeholder="Password" aria-label="Password">
			<button class="btn btn-outline-success" type="submit">Login</button>' 
			. anchor('users/register','register',array('class'=>'nav-link')) 
			;
		
		
	}}
/* end login form */

?>