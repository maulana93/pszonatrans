<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">
	  	<img alt="Brand" class="img-logo" src="<?php echo base_url(); ?>assets/images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if($menu=='home'){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>">Home</a></li>
        <li <?php if($menu=='about'){ echo 'class="active"'; } ?>><a href="<?php echo base_url().'about-us';?>">About Us</a></li>
        <li class="dropdown <?php if($menu=='service'){ echo 'active'; } ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'service/iso-tank';?>">ISO Tank</a></li>
            <li><a href="<?php echo base_url().'service/flexi-tank';?>">Flexi Tank</a></li>
            <li><a href="<?php echo base_url().'service/trucking';?>">Trucking</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($menu=='contact'){ echo 'active'; } ?>"><a href="<?php echo base_url().'contact';?>">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>