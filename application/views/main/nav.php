<div class="container-fluid no-padding">
<nav class="navbar navbar-expand-xl navbar-light bg-light">
  <a class="navbar-brand" href="#">Project Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo anchor('/','Home',array('class'=>'nav-link')); ?>
      </li>
      <li class="nav-item">
      <?php echo anchor('restricted','info',array('class'=>'nav-link')); ?>
      </li>
      <li class="nav-item">
      <?php echo anchor('/restricted/members','Members Only',array('class'=>'nav-link')); ?>
      </li>
      <li class="nav-item">
      <?php echo anchor('/restricted/admin_only','Admin Only',array('class'=>'nav-link')); ?>
      </li>
      <li class="nav-item">
      <?php echo anchor('/admin/main','Management',array('class'=>'nav-link')); ?>
      </li>
    </ul>
            <?php login_form(); ?>
        
  </div>
</nav>
</div>
