<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="site.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="layout.css">
    <script src="javascriptcode.js"></script>
    <script src="js/animationwait.js"></script>
  <title>Mysa</title>
</head>
<body>
<section class="form wow animate__animated animate__fadeIn">
    <div class="container">
      <div class="fromimg">
        <img src="images/formpic2.1.jpg" alt="">
      <div class="inrTouch">
      <div class="Getit">
      <h1 class="wow animate__animated animate__bounce">Inquiry form</h1>
      </div>
      <div class="inputdesgin">
        <form action="database.php" onsubmit="return validation()" method="POST">
      <div class="form-group">
        Your Name
      <input type="text" placeholder="Enter your name" name="Cadidate_name" id="Cadidate_name" class="form-control" required/>
      </div>
      <div class="form-group">
        <label id="lblmessage" class="redmention"></label>
      </div>
     
      <div class="form-group">
        Your Email
      <input type="email" placeholder="Enter your email" name="Cadidate_mail" id="Cadidate_mail" class="form-control" required/>
      </div>
      <div class="form-group">
        <label id="lblmessage1" class="redmention"></label>
      </div>
      <div class="form-group">
        Subject
      <input type="text" placeholder="Enter your subject" name="ubject" id="ubject" class="form-control" required/>
      </div>
      <div class="form-group">
        <label id="lblmessage2" class="redmention"></label>
      </div>
  
      <div class="form-group">
        Phone Number
      <input type="number" placeholder="Enter your number" name="Cadidate_phone_number" id="Cadidate_phone_number" class="form-control" required/>
      </div>
      <div class="form-group">
        <label id="lblmessage3" class="redmention"></label>
      </div>
      <div class="form-group">
        Location
      <input type="text" placeholder="Enter your location" name="Cadidate_location" id="Cadidate_location" class="form-control" required/>
      </div>
      <div class="form-group">
        <label id="lblmessage4" class="redmention"></label>
      </div>
  
      <div class="form-group">
        Message
      <textarea placeholder="Enter your message" name="Cadidate_message" id="Cadidate_message" class="form-control" required/></textarea>
      </div>
      <div class="form-group">
        <label id="lblmessage5" class="redmention"></label>
      </div>
  
      
      <button type="submit" name="submit"class="formbutton">Submit</button>
      </form>
      </div>
      </div>
      </div>
    </div> 
  </section>

  </body>
  </html>