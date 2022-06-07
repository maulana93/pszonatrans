<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('shared/head'); ?>
</head>
<body>

<?php $this->load->view('shared/menu'); ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
		  <img src="<?php echo base_url(); ?>assets/images/slider-isotank-min.png" class="img-responsive">	
    </div>
    <div class="item">
	  	<img src="<?php echo base_url(); ?>assets/images/slider-flexitank-min.png" class="img-responsive">	
    </div>
    <div class="item">
	  	<img src="<?php echo base_url(); ?>assets/images/slider-trucking-min.png" class="img-responsive">	
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1 class="text-center title">PT. PRIMA SAMUDERA ZONATRANS</h1>
      <p>PT. PRIMA SAMUDERA ZONATRANS In keeping pace with the escalation of goods distribution in the world, a need for modernized logistics was sought to accommodate the ever-increasing requirements of international standards. In realization of this ideal, PT. PRIMA SAMUDERA ZONATRANS was established in 2011and starting its business in Indonesia, marking the birth of what is to be premier Logistics Providers in the world.</p>

      <h1 class="text-center title">Our Service</h1>
      <div class="row">
        <div class="col-md-6">
          <h2>Isotank</h2>
          <p>Isotank A tank container or tanktainer is an intermodal container for the transport of liquids, gases and powders as bulk cargo. It is built to the ISO standards, making it suitable for different modes of transportation; as such, it is also called an ISO tank</p>
        </div>
        <div class="col-md-6">
          <img alt="Brand" src="<?php echo base_url(); ?>assets/images/isotank-min.png" class="img-responsive">
        </div>
      </div>
      <div class="row" style="margin-top: 25px;">
        <div class="col-md-6 hidden-xs">
          <img alt="Brand" src="<?php echo base_url(); ?>assets/images/flexitank-min.png" class="img-responsive">
        </div>
        <div class="col-md-6">
          <h2>Flexitank</h2>
          <p>Flexitank is a hermetic sealed, collapsible and flexible bag/bladder which is stuffed in a 20' DV Container, and rely on a 20' dry-van container walls and flooring, to contain the bulk liquid cargo bag. The flexitank's size/volume can range between 16,000-24,000 liters.</p>
        </div>
        <div class="col-md-6 visible-xs">
          <img alt="Brand" src="<?php echo base_url(); ?>assets/images/trucking-min.png" class="img-responsive">
        </div>
      </div>
      <div class="row" style="margin-top: 25px;">
        <div class="col-md-6">
          <h2>Trucking</h2>
        </div>
        <div class="col-md-6">
          <img alt="Brand" src="<?php echo base_url(); ?>assets/images/trucking-min.png" class="img-responsive">
        </div>
      </div>      
    </div>
  </div>
</div>
<?php $this->load->view('shared/footer'); ?>
</body>
</html>