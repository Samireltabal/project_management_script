<div class="container-fluid">

	<div class="row">
		<div class="col-lg-2 side_nav">
			<div class="sidenav">
			  <?php echo anchor('admin/users','Members'); ?>
			  <?php echo anchor('admin/projects','Projects'); ?>
			  <?php echo anchor('admin/tools','Tools'); ?>
			  <?php echo anchor('admin/test','Testing Controller'); ?>
			</div>
		</div>
		<div class="col-lg-10">
			<?php 
			$this->load->view("admin/$part"); ?>
		</div>	
	</div>
</div>