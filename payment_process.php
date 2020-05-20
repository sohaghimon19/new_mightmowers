<?php
header("Refresh: 5; url=payments.php");

session_start();

if (isset($_POST['email']) and isset($_POST['Submit2'])) {

 $captcha = $_SESSION['captcha'];
 if($captcha == $_POST['captcha']){
   echo 'Matched!';
 }else{
  header("Location: payment.error.php"); 
  exit();
 }
  
 



  $email_to = "support@sohagdev.com, 5122339096@txt.att.net";

  $email_subject = "mightymowing.com";

 //Errors to show if there is a problem in form fields.

  function died($error)
  {

    echo "We are sorry that we can procceed your request due to error(s)";

    echo "Below is the error(s) list <br /><br />";

    echo $error . "<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();
  }
  // validation expected data exists
if (
    !isset($_POST['name']) ||

    !isset($_POST['email']) ||

    !isset($_POST['telephone']) || 

    !isset($_POST['address1']) ||

    !isset($_POST['address2']) ||

    !isset($_POST['city']) ||

    !isset($_POST['state']) ||

    !isset($_POST['zip']) ||

    !isset($_POST['cardnumber']) ||

    !isset($_POST['namecard']) ||

    !isset($_POST['expiration']) ||

    !isset($_POST['digitcode'])
) {

    died('We are sorry to proceed your request due to error within form entries');
  }

  $name = $_POST['name']; // required

  $email_from = $_POST['email']; // required

  $telephone = $_POST['telephone']; // not required

  $address1 = $_POST['address1']; // required

  $address1 = $_POST['address2']; //not required

  $city = $_POST['city']; // required

  $state = $_POST['state']; // required

  $zip = $_POST['zip']; // required
 
  $cardnumber = $_POST['cardnumber']; // required
  
  $namecard = $_POST['namecard']; // required

  $expiration = $_POST['expiration']; // required

  $digitcode = $_POST['digitcode']; // required


  $error_message = "";

  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if (!preg_match($email_exp, $email_from)) {

    $error_message .= 'You entered an invalid email<br />';
  }

  $string_exp = "/^[A-Za-z .'-]+$/";

  if (!preg_match($string_exp, $name)) {

    $error_message .= 'Invalid name<br />';
  }

  if (strlen($cardnumber) < 2) {

    $error_message .= 'Invalid card number<br />';
  }

  if (strlen($error_message) > 0) {

    died($error_message);
  }

  $email_message = "Form details below.\n\n";

  function clean_string($string)
  {

    $bad = array("content-type", "bcc:", "to:", "cc:", "href");

    return str_replace($bad, "", $string);
  }

  $email_message .= "Name: " . clean_string($name) . "\n";

  $email_message .= "Email: " . clean_string($email_from) . "\n";

  $email_message .= "Telephone: " . clean_string($telephone) . "\n";

  $email_message .= "Address: " . clean_string($address1) . "\n";

  $email_message .= "City: " . clean_string($city) . "\n";

  $email_message .= "State: " . clean_string($state) . "\n";

  $email_message .= "Zip: " . clean_string($zip) . "\n";

  $email_message .= "Card Number: " . clean_string($cardnumber) . "\n";

  $email_message .= "Name On Card: " . clean_string($namecard) . "\n";

  $email_message .= "Expire Date: " . clean_string($expiration) . "\n";

  $email_message .= "3 Digit Code: " . clean_string($digitcode) . "\n";

  
// create email headers

  $headers = 'From: ' . $email_from . "\r\n" .

    'Reply-To: ' . $email_from . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

  @mail($email_to, $email_subject, $email_message, $headers);
  ?>

 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Required meta tags -->
    <meta name="viewport" content="width=1100">
    <meta name="description" content="">
     <!-- favicon link -->
     <link rel="shortcut icon" type="image/png" href="images/low-res.png">
    <!-- Fontawseom Icon CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  
   <title>Mighty Mowing</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
</head>

<body>
  <div class="main-wrap" style="padding-bottom: 40px;">
    <header class="main-header">
      <div class="top-links font-weight-bolder">
        <a href="#"><i class="fas fa-phone-square pr-2"></i>979-777-9569</a>
        <a href="contact.html"><i class="fas fa-envelope pr-2"></i>Email Us</a>
      </div>
      <div class="main-logo">
        <a href="index.html"><img src="images/main_images/main-logo.png" height="140" alt="logo"></a>
      </div>
      <div class="nav">
        <ul>
          <li><a href="index.html" class="">Home</a></li>
          <li><a href="about.html" class="">About Us</a></li>
          <li><a href="services.html" class="">Services</a></li>
          <li><a href="specials.html" class="">Specials</a></li>
          <li><a href="payments.html" class="">Payments</a></li>
          <li><a href="contact.html" class="selected">Contact Us</a></li>
        </ul>
      </div>
      <div class="banner">
        <img src="images/main_images/banner.jpg" alt="banner">
      </div>

    </header>

    <div class="main_body" id="contact_body">
           <!-- form message -->
  <div class="row">
    <div class="col-12">
      <div role="alert" style="text-align: center;">
            <h1 style="color: #006331;">Thank You! Your pamyent has been sent.</h1>
      </div>
    </div>
  </div>
  <!-- end message -->
<?php

}

?>

  </div>
  <!-- .main-body -->



  </div>
  <!--.main-wrap  -->




  <footer class="main-footer">
    <div id="footer_cont">
      <div id="copyryt">Copyright &copy;
        <script>document.write(new Date().getFullYear())</script> Mighty Mowers. <br />
      </div>
      <div style="width:400px;" class="keywords">
        <h4>Services:</h4>
        <ul>
          <li><a href="#">Affordable Lawn Care</a></li>
          <li><a href="#">Landscaping Services</a></li>
          <li><a href="#">Grass Cutting</a></li>
          <li><a href="#">Lawn Mowing Service</a></li>
          <li><a href="#">Landscaping Costs</a></li>
          <li><a href="#">Mowing Company</a></li>
          <li><a href="#">Grass Cutter</a></li>
          <li><a href="#">Mowing</a></li>
          <li><a href="#">Grass Cutting</a></li>
          <li><a href="#">Lawn Mowing Service</a></li>
          <li><a href="#">Lawn Service Prices</a></li>
        </ul>

      </div>
  </footer>


  <!-- Custom Js file -->
  <script src="js/app.js"></script>
</body>

</html>