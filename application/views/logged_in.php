<div class="container">
<div class="page row">
<p class='col-lg-12'>
    Hello ,<?php echo $this->session->userdata('first_name'); ?>  <?php echo $this->session->userdata('last_name'); ?> <br>
    Your email is : <?php echo $this->session->userdata('email'); ?> <br>
    Your User Id Is : <?php echo $this->session->userdata('id'); ?> <br>    
    Your Role is : <?php echo role_name($this->session->userdata('id')); ?> <br>
    <?php echo anchor('users/logout','Log Out'); ?> 
    </p>
</div>
</div>
