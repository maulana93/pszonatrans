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
      <h1 class="text-center titile-content title">Isotank</h1>
      <img style="margin-bottom: 15px;" alt="Brand" src="<?php echo base_url(); ?>assets/images/isotank-min.png" class="img-responsive">
      <p>Isotank A tank container or tanktainer is an intermodal container for the transport of liquids, gases and powders as bulk cargo. It is built to the ISO standards, making it suitable for different modes of transportation; as such, it is also called an ISO tank</p>     
    </div>
  </div>
</div>
<?php $this->load->view('shared/footer'); ?>
</body>
</html>