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
      <h1 class="text-center titile-content title">Flexitank</h1>
      <img style="margin-bottom: 15px;" alt="Brand" src="<?php echo base_url(); ?>assets/images/flexitank-min.png" class="img-responsive">
      <p>Flexitank is a hermetic sealed, collapsible and flexible bag/bladder which is stuffed in a 20' DV Container, and rely on a 20' dry-van container walls and flooring, to contain the bulk liquid cargo bag. The flexitank's size/volume can range between 16,000-24,000 liters.</p>     
    </div>
  </div>
</div>
<?php $this->load->view('shared/footer'); ?>
</body>
</html>