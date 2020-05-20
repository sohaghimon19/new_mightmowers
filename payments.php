<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Required meta tags -->
  <meta name="viewport" content="width=1100">
  <meta name="description" content="">
  <!-- favicon link -->
  <link rel="shortcut icon" type="image/png" href="images/low-res.png">
  <!-- Fontawseom Icon CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <title>Mighty Mowing</title>
  <!-- Custom Css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
  <div class="main-wrap">
    <header class="main-header">
      <div class="top-links font-weight-bolder">
        <a href="#"><i class="fas fa-phone-square pr-2"></i>979-777-9569</a>
        <a href="contact.php"><i class="fas fa-envelope pr-2"></i>Email Us</a>
      </div>
      <div class="main-logo">
        <a href="index.php"><img src="images/main_images/main-logo.png" height="140" alt="logo"></a>
      </div>
      <div class="nav">
        <ul>
          <li><a href="index.php" class="">Home</a></li>
          <li><a href="about.php" class="">About Us</a></li>
          <li><a href="services.php" class="">Services</a></li>
          <li><a href="specials.php" class="">Specials</a></li>
          <li><a href="payments.php" class="selected">Payments</a></li>
          <li><a href="contact.php" class="">Contact Us</a></li>
        </ul>
      </div>
      <div class="banner">
        <img src="images/main_images/banner.jpg" alt="banner">
      </div>

    </header>

    <div class="main_body">
      <div class="midform">
        <h1>Payment</h1>
        <br />
        <form action="payment_process.php" method="post" onsubmit="return formvalidation2(this)">
          <label>Name: <span>*</span></label>
          <input id="name" name="name" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /><br>
          <label>E-mail: <span>*</span></label>
          <input id="email" name="email" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /><br>
          <label>Phone:</label>
          <input id="telephone" name="telephone" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /><br>
          <label>Address 1 <span>*</span>:</label>
          <input id="address1" name="address1" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /><br>
          <label>Address 2:</label>
          <input id="address2" name="address2" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /><br>
          <label>City: <span>*</span></label>
          <input id="city" name="city" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" style="width:100px;" />
          <label style="width:52px; padding-right:10px; text-align:right">State: <span>*</span></label>
          <input id="state" name="state" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" style="width:50px;" />
          <label style="width:40px; padding-right:10px; text-align:right">Zip: <span>*</span></label>
          <input id="zip" name="zip" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" style="width:50px;" /><br>
          <label>Card Number: <span>*</span></label>
          <input id="cardnumber" name="cardnumber" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /><br>
          <label>Name on Card: <span>*</span></label>
          <input id="namecard" name="namecard" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" /> <br>
          <label>Expiration: <span>*</span></label>
          <input id="expiration" name="expiration" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" style="width:150px;" />
          <label style="width:105px; padding-right:10px; text-align:right">3 Digit Code: <span>*</span></label>
          <input id="digitcode" name="digitcode" type="text" class="bordera" onfocus="this.className='bordera1';"
            onblur="this.className='bordera';" style="width:50px;" />
          <br />
          <br />
          <label>Enter code: <span>*</span></label>
          <input name="captcha" type="text" class="border" onfocus="this.className='border1';"
            onblur="this.className='border';" style="width:115px" />
          <br />
          <img src="captcha.php" alt="img" /><br /><br />

          <span>*</span> mandatory.<br /><br />

          <input name="Submit2" type="submit" class="btn" value="SUBMIT" />
          &nbsp;
          <input name="reset2" type="reset" value="RESET" class="btn" />
          <br />
          <br />
        </form>
      </div>
    </div>
    <br />
    <p style="text-align:center">All credit/debit cards will be processed manually at the Mighty Mowing office.<br />
      We do not share any of this information and this is a secure way to send it to us.</p>


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