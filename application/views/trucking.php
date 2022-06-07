<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('shared/head'); ?>
</head>
<body>

<?php $this->load->view('shared/menu'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1 class="text-center titile-content title">Trucking</h1>
      <img style="margin-bottom: 15px; margin: auto;" alt="Brand" src="<?php echo base_url(); ?>assets/images/trucking-min.png" class="img-responsive">   
    </div>
  </div>
</div>
<?php $this->load->view('shared/footer'); ?>
</body>
</html>