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
          <li><a href="payments.php" class="">Payments</a></li>
          <li><a href="contact.php" class="selected">Contact Us</a></li>
        </ul>
      </div>
      <div class="banner">
        <img src="images/main_images/banner.jpg" alt="banner">
      </div>

    </header>

    <div class="main_body" id="contact_body">
    <div id="contactleft">
    <h1>Contact Us</h1><br/>
    <div class="error"><h3>Invalid code! try again.</h3></div>
        <form action="contact_process.php" method="post" onsubmit="return formvalidation(this)">
          <div id="c1"> Name: <span>*</span>
            <input id="name" name="name" type="text" class="border" onfocus="this.className='border1';"
              onblur="this.className='border';" />
            Address:
            <input id="address" name="address" type="text" class="border" onfocus="this.className='border1';"
              onblur="this.className='border';" />
            City: <span>*</span>
            <input id="city" name="city" type="text" class="border" onfocus="this.className='border1';"
              onblur="this.className='border';" />
            Phone:
            <input id="phone" name="telephone" type="text" class="border" onfocus="this.className='border1';"
              onblur="this.className='border';" />
            E-mail:<span>*</span>
            <input id="email" name="email" type="text" class="border" onfocus="this.className='border1';"
              onblur="this.className='border';" />
          </div>


          <div id="c2"> Comments: <span>*</span>
            <textarea name="comments" cols="25" rows="15" class="border" id="comments" style="height:120px"
              onfocus="this.className='border1';" onblur="this.className='border';"></textarea>
            Enter code: <span>*</span><br />
            <input name="captcha" type="text" class="border" onfocus="this.className='border1';"
              onblur="this.className='border';" style="width:115px" />
            <br />
            <img src="captcha.php" alt="verify" /><br />
            <span>*</span> mandatory.<br />
            <input name="Submit2" type="submit" class="btn" value="submit" />
            &nbsp;
            <input name="reset2" type="reset" value="RESET" class="btn" />
            <br />
            <br />
          </div>
          <!-- #c2 -->
        </form>
      </div>
      <!-- #contactleft -->

      <div class="contact_info">
        <h3>Mighty Mowing Lawn & Landscape </h3>
        <label>Address:</label><span style="padding-left: 20px;">PO Box 271529
          Flower Mound, TX 75027-1529</span><br><br>
          <label>Phone:</label><span style="padding-left: 20px;">972.498.8808</span><br><br>
          <label>Owner:</label><span style="padding-left: 20px;">Christopher Restivo</span><br><br>
          <label>E-Mail:</label><span style="padding-left: 20px;">Chris@mightymowers.com</span><br><br>
            
          <img src="images/low-res.png" alt="logo">
     </div>
  <!-- .contactright -->
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