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
      <h1 class="text-center titile-content title">Contact</h1>
      <div class="row">
        <div class="col-md-6">
          <h3>PT. PRIMA SAMUDERA ZONATRANS</h3>
          <ul class="list-contact">
            <li>
              <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
              <span>Jl. Prof. Dr. Supomo No.12 Menteng Dalam, Tebet, Jakarta Selatan 12870</span>
            </li>
            <li>
              <span><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
              <span>almonprima@zonatrans.com</span>
            </li>
            <li>
              <span>&nbsp;&nbsp;&nbsp;</span>
              <span>bontos@pszonatrans.com</span>
            </li>
            <li>
              <span><i class="fa fa-phone" aria-hidden="true"></i></span>
              <span>+62(21) 8303540</span>
            </li>
            <li>
              <span><i class="fa fa-fax" aria-hidden="true"></i></span>
              <span>+62(21) 83794661</span>
            </li>
            <li>
              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
              <span>Office Hour : 08.00 - 17.00</span>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5567643819035!2d106.8434618291544!3d-6.23377166654272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f394f0cd0437%3A0x682cc6fcc79b67c6!2sJl.%20Prof.%20DR.%20Soepomo%20No.11%2C%20RT.1%2FRW.2%2C%20Menteng%20Dalam%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012870!5e0!3m2!1sen!2sid!4v1592916719236!5m2!1sen!2sid"></iframe>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
<?php $this->load->view('shared/footer'); ?>
</body>
</html>