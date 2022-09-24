<?php
include('smtp/PHPMailerAutoload.php');
$datetday = date("d M Y");
$dateObject = new DateTime('America/New_York');
if (isset($_REQUEST['msg'])) {
  $receiver = 'receiver@gmail.com';
  $subject = "Thank you for your message";
  $body = $_REQUEST['message'];
  $sender = 'From: yourmail@gmail.com';
  $name = $_REQUEST['name'];

  $html = "<!doctype html>
    <html lang='en'>
      <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      </head>
      <style>
         body{
            background-color: white;
         }
      </style>
      <body>
        <div class='container my-5'>
        <div class='card'>
          <div class='card-body' style='background-color:white;'>
            <div class='container'>
           <h1  style='background-color:#0d6efd; padding:10px; color:aliceblue;'>Thank you for your message.</h1>
           <br>
           <br>
           <p>Hi {$name} </p>
           <br>
           <p>Just let you know -- we've Received your message. Soon you will get reply from us.
    
           <br>
          <br>
    
          Regards,</p>
          </div>
      
          </div>
         <a href='https://volobooking.com/'><img style='width:200px; margin-right: 30px;;' src='https://volobooking.com/img/volo2.png' alt='image'></a> 
         
         
         <div class='container' style='text-align: center;'>
          <a href='https://www.facebook.com/volobooking'> <img style='width:30px;'src='https://volobooking.com/img/fb.png' alt='' srcset=''></a> 
       
       <a href='https://www.linkedin.com/in/volo-booking-939674231/'><img style='width:30px;' src='https://volobooking.com/img/instagram.png' alt='' srcset=''></a>

       <a href='https://www.instagram.com/volobooking/?hl=en'><img style='width:30px;' src='https://volobooking.com/img/linkedin.svg' alt='' srcset=''></a>
         </div>
         
         
         <br>
       
        
        </div>
        </div>
       
        <!-- Optional JavaScript; choose one of the two! -->
        <footer class='bg-dark text-center text-white'>
    
              <div class='text-center p-3'>
                © 2022 Copyright:
                <a class='text-white' href='https://volobooking.com/'>
                 Volo Booking</a>
      
        </footer>
      </div>
        
      
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
        -->
      </body>
    </html>";


  $email = $_REQUEST['email'];
  $html2 = "<!doctype html>
    <html lang='en'>
      <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      </head>
      <body>
        <div class='container my-5'>
        <div class='card'>
          <div class='card-body'>
            <div class='container'>
           <h1  style='background-color:aqua; padding:10px;'>New message from Volobooking Website</h1>
           <br>
           <br>
           <p>Hi I am  {$name} </p>
           <br>
           <p>My message is <br>
    
            {$body}
    </p>
           <br>
          <br>
    
          Regards, <br>
          Name: {$name}
          Email: {$email}
        
        </p>
          </div>
      
          </div>
        
    
        </div>
        </div>
       
        <!-- Optional JavaScript; choose one of the two! -->
        <footer class='bg-dark text-center text-white'>
    
              <div class='text-center p-3'>
                © 2022 Copyright:
                <a class='text-white' href='https://volobooking.com/'>
                 Volo Booking</a>
      
        </footer>
      </div>
        

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
        -->
      </body>
    </html>";
  $email2 = "info@volobooking.com";

  $subjecttwo = $_REQUEST['subject'];

  smtp_mailer($email, $subject, $html);
  smtp_mailer($email2, $subjecttwo, $html2);
};


function smtp_mailer($to, $subject, $msg)
{
  $mail = new PHPMailer(); //object
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl'; //ssl
  $mail->Host = "mail.volobooking.com";
  $mail->Port = 465;
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Username = "info2@volobooking.com";
  $mail->Password = 'volobook202new';
  $mail->SetFrom("info@volobooking.com");
  $mail->Subject = $subject;
  $mail->Body = $msg;
  $smtp_debug = true;
  $mail->AddAddress($to);
  //Custom connection options
  //Note that these settings are INSECURE
  $mail->SMTPOptions = array('ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
  ));
  if (!$mail->Send()) {
    echo "error1();";
  } else {
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
        <script> swal({
          title: 'Message sent.',
          icon: 'success',
         
          button: 'Continue',
        });</script>;";
  }
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>volobooking.com|Book Your Ticket
  </title>
  <link href='https://fonts.googleapis.com/css?family=Baloo Bhai 2' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Heebo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width: 1367px)" href="css/phone.css">
  <link rel="shortcut icon" href="img/volo.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link href='https://fonts.googleapis.com/css?family=Baloo Bhai 2' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width: 1367px)" href="css/phone.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
  .swal-button--confirm {
    background: #0275d8;
  }

  .swal-footer {
    text-align: center;
  }

  @media only screen and (max-width: 1009px) {
    #br1 {
      margin-top: 53px;
    }

    .foottext {
      font-size: 12px;
    }

    #gete {
      margin-top: 15px;
    }
  }

  .navbar-toggler {
    border-color: red;
  }

  /* CSS Document */
  .gallery-block {
    padding-bottom: 60px;
    padding-top: 60px;
  }

  .gallery-block .heading {
    margin-bottom: 50px;
    text-align: center;
  }

  .gallery-block .heading h2 {
    font-weight: bold;
    font-size: 1.4rem;
    text-transform: uppercase;
  }

  .gallery-block.cards-gallery h6 {
    font-size: 17px;
    font-weight: bold;
  }

  .gallery-block.cards-gallery .card {
    transition: 0.4s easy;
  }

  .gallery-block.cards-gallery .card img {
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
  }

  .gallery-block.cards-gallery .card-body {
    text-align: center;
  }

  .gallery-block.cards-gallery .card-body p {
    font-size: 15px;
  }

  .gallery-block.cards-gallery a {
    color: #212529;
  }

  .gallery-block.cards-gallery a:hover {
    text-decoration: none;
  }

  .gallery-block.cards-gallery .card {
    margin-bottom: 30px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
  }

  @media (min-width: 576px) {

    .gallery-block .transform-on-hover:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
    }
  }
</style>

<body data-spy="scroll" data-target=".navbar">
  <nav id="myModal" class="navbar position-sticky fixed-top navbar-expand-lg navbar-light bg-light py-3 py-lg-5">
    <div class="container">
      <div>
        <a href="#"> <img src="img/logo3.png" alt="" style="width: 170px;">
      </div></a>
      <!-- <a href="#"> <img style="width: 75px;" src="img/flight.png" alt=""> </a> -->
      <!--<img style="width: 75px;" src="img/flight.png" alt="">-->
      <button class="navbar-toggler" style="color:#F8F9FA" type="button" data-toggle="collapse" data-target="#navbarHelloWorld" aria-controls="navbarHelloWorld" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarHelloWorld">
        <ul id="menu-top-menu" class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="#" id="mbn2" style="font-family: 'Heebo'; margin-right:20px; margin-top:0px;  color:black"><b>Home</b></a>
          <a href="#br1" id="mbn2" style="font-family: 'Heebo'; margin-right:20px; margin-top:0px;  color:black"><b>Get a Quote</b></a>
          <a href="#portfolio" id="mbn2" style="font-family: 'Heebo'; margin-right:20px; margin-top:0px;  color:black"><b>Popular Destinations</b></a>
          <a href="#" id="mbn2" style="font-family: 'Heebo'; margin-right:20px; margin-top:0px;  color:black"><b>About Us</b></a>
          <a href="#faq" id="mbn2" style="font-family: 'Heebo'; margin-right:20px; margin-top:0px;  color:black"><b>FAQ</b></a>
          <a href="#contact" id="mbn2" style="font-family: 'Heebo'; margin-right:20px; margin-top:0px;  color:black"><b>Contact</b></a>
          <button style="font-family: 'Heebo';" type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#signupModal">
            Register
          </button>
          <!-- <button id="mbn8" style="font-family: 'Heebo'; float: right; margin-left:0px; " class="btn btn-primary"><a style="color:white; text-decoration:none;" href="#frequent">About Volo</a></button> -->
        </form>
      </div>
    </div>
  </nav>



  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModaltitle">Register Here</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- form -->
          <form name="google-sheetLast" method="post" autocomplete="off">
            <input type="hidden" name="Time" value="<?php echo "{$datetday} - {$dateObject->format('h:i A')}"; ?>">
            <div class="form-group" style="margin-left: 19px;">
            </div>
            <div class="form-group" style="margin-left: 12px;">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
            </div>
            <button type="submit" style="font-family: 'Heebo';" class="btn btn-primary" onclick="sheet1()">Register</button>
          </form>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
  <div class="container" id="br1">
    <br>
    <br>
    <br>
    <div class="my-3">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Get the information you need</strong> Check the latest COVID-19 restrictions before you travel <a href="https://www.cdc.gov/coronavirus/2019-ncov/travelers/international-travel/index.html">Learn More</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    <h1 style="text-align: left; font-size:26px;"><b>Compare and book flights with ease</b></h1>
    <p style="text-align: left;font-size:19px">A niche travel agency for flights only</p>

    <div class="btn-group" role="group" aria-label="Basic example">
      <button style="font-family: 'Heebo';" class="btn btn-primary btn-sm" id="but1" onclick="myfunc1()">Round-trip</button>
      <button style="font-family: 'Heebo';" class="btn btn-primary btn-sm" id="but1" onclick="myfunc2()">One-way</button>
      <button style="font-family: 'Heebo';" class="btn btn-primary btn-sm" id="but1" onclick="myfunc3()">Multi-city</button>
    </div>
    <div id="show1">
      <p>Round-trip</p>
      <form name="google-sheet" method="post" autocomplete="off" style="background-color: rgb(214, 223, 231);" class="form-control">
        <div class="form-group">
          <div class="form-checkbox">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label">Flying from</span>
              <i class="fas fa-plane-departure"></i>
              <input type="hidden" name="Time" value="<?php echo "{$datetday} - {$dateObject->format('h:i A')}"; ?>">
              <input class="form-control" id="myInput" name="From" type="text" placeholder="City or airport" required>
              <div id="id"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label">Flying to</span>
              <i class="fas fa-plane-arrival"></i>

              <input class="form-control" id="myInput1" name="To" type="text" placeholder="City or airport" required>
              <div id="id1"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <span class="form-label">Departing</span>
              <input style="cursor: pointer;" class="form-control" name="Depart" type="date" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <span class="form-label">Returning</span>
              <input style="cursor: pointer;" class="form-control" name="Return" type="date" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Adults (18+)</span>
              <select class="form-control" name="Adults">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Children (0-10)</span>
              <select class="form-control" name="Children">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Type</span>
              <select class="form-control" name="Type" required>
                <option>Business</option>
                <option>First class</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <span class="form-label">Name</span>
                <input class="form-control" type="text" name="Name" placeholder="Enter your name" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <span class="form-label">Email</span>
                <input class="form-control" type="email" name="Email" placeholder="Enter your email" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <span class="form-label">Phone</span>
                <input class="form-control" type="text" name="Phone" placeholder="Enter your phone number" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="g-recaptcha rec1" style="margin-top:13px; transform:scale(0.67);-webkit-transform:scale(0.67);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lced84eAAAAAJ4tKPnPVu_WnDajpKn-PZdTUaK8"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <button class="btn btn-primary" type="submit" style="margin-left: 8px; margin-top : 25px; font-family: 'Heebo';" onclick="res1()">Submit</button>
            </div>
          </div>
        </div>
    </div>
    <div id="msg"></div>
    </form>
  </div>
  </div>
  </div>

  <!-- One-way -->

  <div class="container" id="show2">
    <p>One-way</p>
    <form name="google-sheet3" method="post" autocomplete="off" style="background-color: rgb(214, 223, 231);" class="form-control">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label">Flying from</span>
              <i class="fas fa-plane-departure"></i>
              <input type="hidden" name="Time" value="<?php echo "{$datetday} - {$dateObject->format('h:i A')}"; ?>">
              <input class="form-control" id="myInput2" name="From" type="text" placeholder="City or airport" required>
              <div id="id2"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <span class="form-label">Flying to</span>
              <i class="fas fa-plane-arrival"></i>
              <input class="form-control" id="myInput3" name="To" type="text" placeholder="City or airport" required>
              <div id="id3"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <span class="form-label">Departing</span>
              <input class="form-control" name="Depart" type="date" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Adults (18+)</span>
              <select class="form-control" name="Adults">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Children (0-10)</span>
              <select class="form-control" name="Children">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Type</span>
              <select class="form-control" name="Type" required>
                <option>Business</option>
                <option>First class</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <span class="form-label">Name</span>
                <input class="form-control" type="text" name="Name" placeholder="Enter your name" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <span class="form-label">Email</span>
                <input class="form-control" type="email" name="Email" placeholder="Enter your email" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="g-recaptcha" style="margin-top:13px; transform:scale(0.67);-webkit-transform:scale(0.67);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lced84eAAAAAJ4tKPnPVu_WnDajpKn-PZdTUaK8"></div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <button class="btn btn-primary" type="submit" style="margin-left: 8px; margin-top : 25px; font-family: 'Heebo';" onclick="res2()">Submit</button>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
  </div>

  <!-- multi-city -->
  <div class="container" id="show3">
    <p>Multi-city</p>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <p>If you select only 2 please type none to 3rd one</p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <form name="google-sheet2" method="post" autocomplete="off" style="background-color: rgb(214, 223, 231);" class="form-control">
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Flying from</span>
              <i class="fas fa-plane-departure"></i>
              <input type="hidden" name="Time" value="<?php echo "{$datetday} - {$dateObject->format('h:i A')}"; ?>">
              <input class="form-control" id="myInput4" name="City1_From" type="text" placeholder="City or airport">
              <div id="id4"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Flying to</span>
              <i class="fas fa-plane-arrival"></i>
              <input class="form-control" id="myInput5" name="City1_To" type="text" placeholder="City or airport">
              <div id="id5"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Departing</span>
              <input class="form-control" name="City1_Depart" type="date" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Flying from</span>
              <i class="fas fa-plane-departure"></i>
              <input class="form-control" id="myInput6" name="City2_From" type="text" placeholder="City or airport">
              <div id="id6"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Flying to</span>
              <i class="fas fa-plane-arrival"></i>
              <input class="form-control" id="myInput7" name="City2_To" type="text" placeholder="City or airport">
              <div id="id7"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Departing</span>
              <input class="form-control" name="City2_Depart" type="date" required>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Flying from</span>
              <i class="fas fa-plane-departure"></i>
              <input class="form-control" id="myInput8" name="City3_From" type="text" placeholder="City or airport">
              <div id="id8"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Flying to</span>
              <i class="fas fa-plane-arrival"></i>
              <input class="form-control" id="myInput9" name="City3_To" type="text" placeholder="City or airport">
              <div id="id9"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <span class="form-label">Departing</span>
              <input class="form-control" name="City3_Depart" type="date" required>
            </div>
          </div>
        </div>


        <div class="row">

          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Adults (18+)</span>
              <select class="form-control" name="Adults">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Children (0-10)</span>
              <select class="form-control" name="Children">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <span class="form-label">Type</span>
              <select class="form-control" name="Type" required>
                <option>Business</option>
                <option>First class</option>

              </select>
              <span class="select-arrow"></span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <span class="form-label">Name</span>
              <input class="form-control" type="text" name="Name" placeholder="Enter your name" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <span class="form-label">Email</span>
              <input class="form-control" type="email" name="Email" placeholder="Enter your email" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="g-recaptcha" style="margin-top:13px; transform:scale(0.67);-webkit-transform:scale(0.67);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lced84eAAAAAJ4tKPnPVu_WnDajpKn-PZdTUaK8"></div>
          </div>
          <div class="col-md-3">
            <button class="btn btn-primary" type="submit" style="margin-left: 8px; margin-top : 25px; font-family: 'Heebo';" onclick="res3()">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>
  <section class="gallery-block cards-gallery" id="portfolio">
    <div class="container">
      <h3 style="text-align: left; font-size:20px;" class="font-weight-bold">Popular Destinations</h3>
      <p style="text-align: left;">Get the best deals on international flights</p>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button style="font-family: 'Heebo';" class="btn btn-primary btn-sm filter-button" data-filter="all">International</button>
        <button style="font-family: 'Heebo';" class="btn btn-primary  btn-sm filter-button" data-filter="domestic">Domestic</button>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4  filter inter">
          <div class="card border-0 transform-on-hover">
            <a target="_blank" href="https://www.paris.fr/"> <img src="https://source.unsplash.com/1400x800/?paris" class="card-img-top"></a>
            <div class="card-body" style="text-align:left;">
              <h6>Paris</h6>
              <p class="text-muted card-text">Explore the destination..</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4  filter inter">
          <div class="card border-0 transform-on-hover">
            <a target="_blank" href="https://www.mexicancaribbean.travel/cancun/"> <img src="https://source.unsplash.com/1400x800/?cancun" class="card-img-top"></a>
            <div class="card-body" style="text-align:left;">
              <h6>Cancun</h6>
              <p class="text-muted card-text">Explore the destination..</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4  filter inter">
          <div class="card border-0 transform-on-hover">
            <a target="_blank" href="https://www.austintexas.org/"><img src="https://source.unsplash.com/1400x800/?texas" class="card-img-top"></a>
            <div class="card-body" style="text-align:left;">
              <h6>Austin</h6>
              <p class="text-muted card-text">Explore the destination..</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 filter domestic">
          <div class="card border-0 transform-on-hover">
            <a target="_blank" href="https://london.ca/"> <img src="https://source.unsplash.com/1400x800/?london" class="card-img-top"></a>
            <div class="card-body" style="text-align:left;">
              <h6>London</h6>
              <p class="text-muted card-text">Explore the destination..</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 filter domestic">
          <div class="card border-0 transform-on-hover">
            <a target="_blank" href="https://sf.gov/"> <img src="https://source.unsplash.com/1400x800/?San Francisco" class="card-img-top"></a>
            <div class="card-body" style="text-align:left;">
              <h6>San Francisco</h6>
              <p class="text-muted card-text">Explore the destination..</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 filter domestic">
          <div class="card border-0 transform-on-hover">
            <a target="_blank" href="https://www.mexicancaribbean.travel/cancun/"> <img src="https://source.unsplash.com/1400x800/?rome" class="card-img-top"></a>
            <div class="card-body" style="text-align:left;">
              <h6>Rome</h6>
              <p class="text-muted card-text">Explore the destination..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
      </symbol>
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
      </svg>
      <div>
        Our greatest satisfaction and success comes in serving satisfied clients
        who are looking to experience airfare booking served with competence,
        professionalism and at a lower rate.
      </div>
    </div>

  </div>

  <div class="container my-4">
    <br>
    <br>
    <h3 style="font-size:20px;" class="font-weight-bold">Trending Cities</h3>
    <hr class="mb-5" />

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="col text-center">
        <div class="controls-top">
          <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left" style="float: left"></i></a>
          <a class="btn-floating" href="#multi-item-example" data-slide="next" style="float: right"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>

      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <a target="_blank" href="https://www.london.gov.uk/"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?london" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title" style="font-size:16px;">London</h4>
              </a>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <a target="_blank" href="https://www.orlando.gov/Home"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?orlando" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title" style="font-size:16px;">Orlando</h4>
            </a>

          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <a target="_blank" href="https://www.denvergov.org/Home"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?denver" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title" style="font-size:16px;">Denver</h4>
          </a>

        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <a target="_blank" href="https://www.miamigov.com/Home"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?miami" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="font-size:16px;">Miami</h4>
        </a>
      </div>
    </div>
  </div>

  </div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class="carousel-item">

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <a target="_blank" href="https://en.parisinfo.com/"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?paris" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="font-size:16px;">Paris</h4>
        </a>

      </div>
    </div>
  </div>

  <div class="col-md-3" style="float:left">
    <div class="card mb-2">
      <a target="_blank" href="https://www.rome.net/"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?rome" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title" style="font-size:16px;">Rome</h4>

      </a>
    </div>
  </div>
  </div>

  <div class="col-md-3" style="float:left">
    <div class="card mb-2">
      <a target="_blank" href="https://www.santafenm.gov/"> <img class="card-img-top" src="https://source.unsplash.com/1400x1200/?mexico" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title" style="font-size:16px;">Santa Fe</h4>
      </a>

    </div>
  </div>
  </div>

  <div class="col-md-3" style="float:left">
    <div class="card mb-2">
      <a target="_blank" href="https://www.charleston-sc.gov/"><img class="card-img-top" src="https://source.unsplash.com/1400x1200/?charleston" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title" style="font-size:16px;">Charleston</h4>
      </a>
      <div id="frequent">

      </div>
    </div>
  </div>
  </div>

  </div>
  <!--/.Second slide-->


  </div>

  <!--/.Slides-->

  </div>
  <div class="container">

    <div class="alert alert-primary" role="alert">
      A member of our team is on stand by and ready to help you.
    </div>
  </div>
  <!--/.Carousel Wrapper-->

  <div class="container my-5" id="faq">

    <div class="row">
      <h3>

        <b> Frequently Asked Questions</b>
      </h3>
    </div>

    <div class="accordion accordion-flush border-top border-start border-end my-5" id="myAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">ABOUT VOLO</button> </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">
              <b>WE ARE FLIGHT BOOKING EXPERTS</b>
              <br><br>
              Volo Booking, in collaboration with many Flights Only companies, is a new niche and unique travel agency specialized specifically and only in international business class and first-class flights, offering high expertise, friendly-efficient customer service and unpublished prices, not available online. We beat any websites such as Kayak, Booking.com, Expedia, Google Flights etc., as well as prices offered on the airline’s websites. Unlike other travel agencies, our service is entirely free. The airlines compensate us with commissions for every flight sold through us. Our customers are from all across the nation and from different industries. We currently work mainly with doctors and professors from hospitals and universities such as Harvard, NYU, UCLA and Boston University, with actors, artists and managers of major talent agencies in Los Angeles and New York, as well as CEO's and their assistants of various industries.
              <br><br>
              Yes, we do provide references. Our greatest satisfaction and success comes in serving satisfied clients who are looking to experience airfare booking served with competence, professionalism and at a lower rate
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">HOW DOES VOLO FIND SUCH LOW FLIGHT PRICES?</button> </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">


              <b> LOW PRICES: HOW CAN YOUR AGENCY OFFER AIRFARES THAT ARE LOWER THAN THE ONES PUBLISHED ONLINE OR THE AIRLINE'S PUBLISHED FARES? </b> <br><br>
              VOLO works directly with sales directors at the airlines, as well as with the best consolidators and wholesalers of airline tickets. These companies processes over 15 million flights annually over hundreds of airlines and third party sites, allowing it to find a variety of flight prices and options.
              With our relationships at the airlines, we are able to offer unbeatable, unpublished prices that are not offered online or direct via the airline's website. <br> <br>
              The lowest fare the general public is asked to pay online or via the airline’s websites, are not always necessarily indicative of the “lowest possible airfare”. Airline tickets consolidators for example, purchase a large number of tickets and as such, they receive a heavily discounted bulk rate fare on each ticket. Since they purchase these tickets for less than retail, they are also willing to sell airline tickets at less than retail. Our agents have exclusive access to these special fares, as well as to unsold inventory fares that are not published or offered to the general public.



            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">BOOKING TIME</button> </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">
              <b>WHEN SHOULD I BOOK AND HOW ARE TICKETS ISSUED?</b> <br> <br>
              The earlier you know your travel dates and contact VOLO, the greater the chance to save. When the agents at VOLO are able to fill a seat that might otherwise go unsold, they can broker and barter from a higher position to generate the maximum allowable discount for your ticket. Seat prices are based on the airline’s profitability and on availability. <br> <br>
              All airline tickets are handled exactly the same way as with any other travel agencies or as if purchased directly from any airline’s website or online booking agencies. The tickets will be issued and delivered electronically. You will receive your ticket confirmation codes along with the record locator and ticket number. Just as you normally would. You can then log in online, check your flight status, change your seat, and add all other special requests you might have. VOLO usually does that for you based on your likes and dislikes. VOLO will also assign seating based on your personal preferences, if available.

            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">TICKET CHANGES & CANCELLATIONS</button> </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">
              <b> This part is handled by the airlines, and their rules and fees will apply.</b> <br> <br>
              VOLO will still take care of everything for you, saving you long hold times on the phone. But VOLO does not charge a change or cancellation fee. The airline/booking agency will. Change and cancellation fees will vary depending on the ticket fare rules and conditions of the particular ticket and airline policies. Usually, a date change fee is $495 plus a fare difference if applicable. For cancellations and refunds, a cancellation fee will be applied by the airline/booking agency following airline/booking agency policy and ticket fare rules.

            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">WHAT FORMS OF PAYMENT DOES VOLO ACCEPT?</button> </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">
              You can pay with all major credit cards. <br>
              Visa, MasterCard, Discover, and American Express.

            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">DO TICKETS SOLD THROUGH VOLO ACCRUE MILES?</button> </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">
              Yes, definitely. You will accrue miles. Our tickets are ticketed by the airlines directly. We do not use or work with miles to purchase your tickets. We also don't do miles upgrades. We book tickets directly from the airline's ticketing office.
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
          <div class="accordion-body p-0">
            <div class="card-body">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--Section: Contact v.2-->
  <div class="container my-5" id="contact">
    <section class="mb-4">
      <br>
      <br>
      <div class="container">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold " style="font-size: 25px; margin-left:3px;">Get in Touch</h2>
        <!--Section description-->
        <br>
        <div class="row">
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
            <form method="post">
              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control has-validation" placeholder="Your name" required>

                  </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6" id="gete">
                  <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control has-validation" placeholder="Your email" required>

                  </div>
                </div>
                <!--Grid column-->
              </div>
              <br>
              <!--Grid row-->
              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control has-validation" placeholder="Subject" required>

                  </div>
                </div>
              </div>
              <!--Grid row-->
              <br>
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea has-validation" placeholder="Your message" required></textarea>

                  </div>

                </div>
              </div>
              <!--Grid row-->
              <div class="text-center">
                <button class="btn btn-primary" type="submit" name="msg" style="font-family: 'Heebo';">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
              </div>
            </form>

            <div class="text-center text-md-left">

            </div>
            <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
              <a href=""> <i class="fas fa-map-marker-alt" style="font-size: 30px;"></i></a>
              <p>Volo Booking <br>
                430 N. Beverly Dr. <br>
                Beverly Hills, CA 90210</p>
              </li>

              <a href="">
                <li><i class="fa fa-phone mt-4 fa-2x"></i> <br>
              </a>
              <a style="color:rgb(0, 0, 0);" href="tel:+1 424-234-1650">(424) 234-1650</a>
              </li>

              <a href="">
                <li><i class="fa fa-envelope mt-4 fa-2x"></i> <br>
              </a>
              <a style="color:rgb(0, 0, 0);" href="mailto:info@volobooking.com">info@volobooking.com</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>
      </div>
    </section>
  </div>








  <footer class="bg-dark text-center text-white" style="height:130px;">
    <!-- Grid container -->




    <!--  <section class="mb-4 my-5">-->
    <!--    <br>-->
    <!--    <h5 >Scan Me</h5>-->
    <!--    <img  style="width:70px" src="img/volo1.png" alt="" srcset="">-->
    <!--<section id="mb-4"></p>-->
    <!--  </section>-->
    <!--Grid row-->
    <!--</section>-->

    <section class="mb-4 my-5">
      <br>

      <div style="text-align:center; margin-left:17px;">
        <a class="foottext mrgin" href="" style="font-family: 'Heebo'; color:white;  margin-right: 6px;" data-toggle="modal" data-target="#exampleModalLong">Privacy Policy</a>

        <a class="foottext mrgin1" href="" style="font-family: 'Heebo'; color:white ; text-align:right; margin-left:6px;" data-toggle="modal" data-target="#exampleModalLong2">Terms of Service</a>

        <a class="foottext mrgin1" href="https://www.facebook.com/volobooking" style="font-family: 'Heebo'; color:white ; text-align:right; margin-left:9px;">Follow Us</a>
      </div>


      <!--Grid row-->
      <br>





      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022
        <a class="text-white" href="https://volobooking.com/">
          Volo Booking</a>
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->

    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!--<footer class="page-footer font-small bg-dark  special-color-dark pt-4">-->

  <!-- Footer Elements -->
  <!--  <div class="container">-->

  <!--Grid row-->
  <!--    <div class="row">-->

  <!--Grid column-->
  <!--      <div class="col-md-6 mb-4">-->

  <!-- Form -->

  <!-- Form -->

  <!--      </div>-->
  <!--Grid column-->

  <!--Grid column-->
  <!--      <div class="col-md-6 mb-4">-->



  <!--      </div>-->
  <!--Grid column-->

  <!--    </div>-->
  <!--Grid row-->

  <!--  </div>-->
  <!-- Footer Elements -->

  <!-- Copyright -->
  <!--  <div class="footer-copyright text-center py-3">© 2020 Copyright:-->
  <!--    <a class="text-white" href="https://volobooking.com/">-->
  <!--       Volo Booking</a>-->
  <!--  </div>-->
  <!-- Copyright -->

  <!--</footer>-->

  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">PRIVACY POLICY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="color: black;" class="text-left">


            VOLO BOOKING DBA. (VOLO BOOKING) values its users' privacy. This Privacy Policy ("Policy") will
            help you understand how we collect and use personal information from those who visit our website or make
            use of our online facilities and services, and what we will and will not do with the information we collect.
            Our Policy has been designed and created to ensure those affiliated with VOLO BOOKING DBA. of our
            commitment and realization of our obligation not only to meet, but to exceed, most existing privacy
            standards.
            <br><br>
            We reserve the right to make changes to this Policy at any given time. If you want to make sure that you are
            up to date with the latest changes, we advise you to frequently visit this page. If at any point in time VOLO
            BOOKING DBA. decides to make use of any personally identifiable information on file, in a manner
            vastly different from that which was stated when this information was initially collected, the user or users
            shall be promptly notified by email. Users at that time shall have the option as to whether to permit the use
            of their information in this separate manner.
            <br><br>
            This Policy applies to VOLO BOOKING DBA., and it governs any and all data collection and usage by us.
            Through the use of www.volobooking.com, you are therefore consenting to the data collection procedures
            expressed in this Policy.
            <br><br>
            Please note that this Policy does not govern the collection and use of information by companies that VOLO
            BOOKING DBA. does not control, nor by individuals not employed or managed by us. If you visit a
            website that we mention or link to, be sure to review its privacy policy before providing the site with
            information. It is highly recommended and suggested that you review the privacy policies and statements of
            any website you choose to use or frequent to better understand the way in which websites garner, make use
            of and share the information collected. <br> <br>
            Specifically, this Policy will inform you of the following
            <br>

            1. What personally identifiable information is collected from you through our website;
            <br>
            2. Why we collect personally identifiable information and the legal basis for such collection;
            <br>
            3. How we use the collected information and with whom it may be shared;
            <br>
            4. What choices are available to you regarding the use of your data; and
            <br>
            5. The security procedures in place to protect the misuse of your information.
            <br>
            <br>
            <b>Information We Collect </b>
            <br>
            It is always up to you whether to disclose personally identifiable information to us, although if you elect not
            to do so, we reserve the right not to register you as a user or provide you with any products or services. This
            website collects various types of information, such as: <br>
            Information automatically collected when visiting our website, which may include cookies, third party
            tracking technologies and server logs. <br>
            VOLO BOOKING DBA. may also deem it necessary, from time to time, to follow websites that our users
            may frequent to gleam what types of services and products may be the most popular to customers or the
            general public. <br>
            Why We Collect Information and For How Long <br>
            We are collecting your data for several reasons: <br>
            <br> · To better understand your needs and provide you with the services you have requested;
            <br> · To fulfill our legitimate interest in improving our services and products;
            <br> · To send you promotional emails containing information we think you may like when we have your
            consent to do so;
            <br> · To contact you to fill out surveys or participate in other types of market research, when we have your
            consent to do so;
            <br> · To customize our website according to your online behavior, personal preferences.
            <br> · To provide you information you requested.
            <br> <br>
            The data we collect from you will be stored for no longer than necessary. The length of time we retain said
            information will be determined based upon the following criteria: the length of time your personal
            information remains relevant; the length of time it is reasonable to keep records to demonstrate that we
            have fulfilled our duties and obligations; any limitation periods within which claims might be made; any
            retention periods prescribed by law or recommended by regulators, professional bodies or associations; the
            type of contract we have with you, the existence of your consent, and our legitimate interest in keeping such
            information as stated in this Policy.
            <br> <br>
            <b>Use of Information Collected</b> <br>
            VOLO BOOKING DBA. does not now, nor will it in the future, sell, rent or lease any of its customer lists
            and/or names to any third parties. <br>
            <br> VOLO BOOKING DBA. may collect and may make use of personal information to assist in the operation
            of our website and to ensure delivery of the services you need and request. At times, we may find it
            necessary to use personally identifiable information as a means to keep you informed of other possible
            products and/or services that may be available to you from www.volobooking.com
            VOLO BOOKING DBA. may also be in contact with you with regards to completing surveys and/or
            research questionnaires related to your opinion of current or potential future services that may be offered.
            Disclosure of Information <br>
            VOLO BOOKING DBA. may not use or disclose the information provided by you except under the
            following circumstances:
            <br> · as necessary to provide services or products you have ordered;
            <br> · in other ways described in this Policy or to which you have otherwise consented;
            <br> · in the aggregate with other information in such a way so that your identity cannot reasonably be
            determined;
            <br> · as required by law, or in response to a subpoena or search warrant;
            <br> · to outside auditors who have agreed to keep the information confidential;
            <br> · as necessary to enforce the Terms of Service;
            <br> · as necessary to maintain, safeguard and preserve all the rights and property of VOLO BOOKING
            DBA.
            <br> <br>
            <b>Non-Marketing Purposes </b>
            <br>
            VOLO BOOKING DBA. greatly respects your privacy. We do maintain and reserve the right to contact
            you if needed for non-marketing purposes (such as bug alerts, security breaches, account issues, and/or
            changes in VOLO BOOKING DBA. products and services). <br>
            Children under the age of 13 <br>
            VOLO BOOKING DBA.'s website is not directed to, and does not knowingly collect personal identifiable
            information from, children under the age of thirteen (13). Information might need to be collected to
            present services requested. Anyone under the age of thirteen (13) must seek and obtain parent or guardian
            permission to use this website. <br> <br>
            <b>Unsubscribe or Opt-Out </b> <br>
            All users and visitors to our website have the option to discontinue receiving communications from us by
            way of email or newsletters. To discontinue or unsubscribe from our website please send an email that you
            wish to unsubscribe to info@volobooking.com. If you wish to unsubscribe or opt-out from any third-party
            websites, you must go to that specific website to unsubscribe or opt-out. VOLO BOOKING DBA. will
            continue to adhere to this Policy with respect to any personal information previously collected.
            Links to Other Websites <br>
            Our website does contain links to affiliate and other websites. VOLO BOOKING DBA. does not claim
            nor accept responsibility for any privacy policies, practices and/or procedures of other such websites.
            Therefore, we encourage all users and visitors to be aware when they leave our website and to read the
            privacy statements of every website that collects personally identifiable information. This Privacy Policy
            Agreement applies only and solely to the information collected by our website.
            Notice to European Union Users <br>
            VOLO BOOKING DBA.'s operations are located primarily in the United States. If you provide
            information to us, the information will be transferred out of the European Union (EU) and sent to the
            United States. (The adequacy decision on the EU-US Privacy became operational on August 1, 2016. This
            framework protects the fundamental rights of anyone in the EU whose personal data is transferred to the
            United States for commercial purposes. It allows the free transfer of data to companies that are certified in
            the US under the Privacy Shield.) By providing personal information to us, you are consenting to its storage
            and use as described in this Policy. <br> <br>
            <b> Your Rights as a Data Subject </b> <br>
            Under the regulations of the General Data Protection Regulation ("GDPR") of the EU you have certain
            rights as a Data Subject. These rights are as follows: · The right to be informed: this means we must
            inform you of how we intend to use your personal data and we do this through the terms of this Policy.
            <br>The right of access: this means you have the right to request access to the data we hold about you
            and we must respond to those requests within one month. You can do this by sending an email to
            info@volobooking.com
            <br>The right to rectification: this means that if you believe some of the date, we hold is incorrect, you
            have the right to have it corrected. You can do this by logging into your account with us, or by sending us an
            email with your request.
            <br>The right to erasure: this means you can request that the information we hold be deleted, and we will
            comply unless we have a compelling reason not to, in which case you will be informed of same. You can do
            this by sending an email to info@volobooking.com.
            <br>The right to restrict processing: this means you can change your communication preferences or optout of certain communications. You can do this by sending an email to info@volobooking.com.
            <br>The right of data portability: this means you can obtain and use the data we hold for your own
            purposes without explanation. If you wish to request a copy of your information,
            contact us at info@volobooking.com. <br>
            The right to object: this means you can file a formal objection with us regarding our use of your
            information with regard to third parties, or its processing where our legal basis is our legitimate interest in it.
            To do this, please send an email to info@volobooking.com. In addition to the rights above, please rest
            assured that we will always aim to encrypt and anonymize your personal information whenever possible.
            We also have protocols in place in the unlikely event that we suffer a data breach and we will contact you if
            your personal information is ever at risk. For more details regarding our security protections see the section
            below or visit our website at www.volobooking.com. <br> <br>
            <b>Security </b> <br>
            VOLO BOOKING DBA. takes precautions to protect your information. When you submit sensitive
            information via the website, your information is protected both online and offline. Wherever we collect
            sensitive information (e.g. credit card information), that information is encrypted and transmitted to us in a
            secure way. You can verify this by looking for a lock icon in the address bar and looking for "https" at the
            beginning of the address of the webpage. <br>
            While we use encryption to protect sensitive information transmitted online, we also protect your
            information offline. Only employees who need the information to perform a specific job (for example,
            billing or customer service) are granted access to personally identifiable information. The computers and
            servers in which we store personally identifiable information are kept in a secure environment. This is all
            done to prevent any loss, misuse, unauthorized access, disclosure or modification of the user's personal
            information under our control. <br>
            The company also uses Secure Socket Layer (SSL) for authentication and private communications to build
            users' trust and confidence in the internet and website use by providing simple and secure access and
            communication of credit card and personal information. In addition, VOLO BOOKING DBA. is a
            licensee of TRUSTe. The website is also secured by VeriSign <br> <br>

            <b>Acceptance of Terms </b> <br>
            By using this website, you are hereby accepting the terms and conditions stipulated within the Privacy Policy
            Agreement. If you are not in agreement with our terms and conditions, then you should refrain from
            further use of our sites. In addition, your continued use of our website following the posting of any updates
            or changes to our terms and conditions shall mean that you agree and acceaptance of such changes.
            <br> <br>
            <b> How to Contact Us </b> <br>
            If you have any questions or concerns regarding the Privacy Policy Agreement related to our
            website, please feel free to contact us at the following email, telephone number or mailing address.
            Email: info@volobooking.com Telephone Number: + (424) 234-1650 Mailing Address: VOLO
            BOOKING DBA. 460 N Beverly Dr. Beverly Hills, California 90210
          </p>
        </div>

        <div class="modal-footer">
          <button style="font-family: 'Heebo';" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>








  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">TERMS OF SERVICE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="color: black;" class="text-left">

            The present terms and conditions (this "Agreement" or "Terms") is a legal agreement
            between you and VOLO BOOKING DBA (hereinafter "VOLO BOOKING"), a
            company duly organized and validly existing, located at 460 N Beverly Dr, Beverly
            Hills, California 90210. This Agreement annuls and voids all previous agreements.
            TERMS AND CONDITIONS OF TICKETS
            <br> <br>
            Terms and Conditions are the same Terms and Conditions that the specific chosen
            Airline has. Every Airline has similar/same in some cases different Terms and
            Conditions. We are adapting to the Airline booking (your ticket) Terms and
            Conditions. <br>
            Example United Airlines: <br>

            <a href="https://www.united.com/ual/en/us/fly/privacy.html"> https://www.united.com/ual/en/us/fly/privacy.html</a>
            <br>
            Example Delta Airlines: <br>
            <a href=" https://www.delta.com/us/en/legal/privacy-and-security"> https://www.delta.com/us/en/legal/privacy-and-security</a>
            <br><br> <b> OUR TERMS AND CONDITIONS - OVERVIEW</b> <br>
            The Site (www.volobooking.com) is operated by VOLO BOOKING DBA.
            Throughout the Site, the terms "we", "us" and "our" refer to VOLO BOOKING
            DBA. VOLO BOOKING offers this Site, including all information, tools and
            services available from this Site to you, the user, conditioned upon your acceptance
            of all terms, conditions, policies and notices stated here. <br>
            By visiting our Site and/or purchasing something through us, you engage in our
            "Service" and agree to be bound by the terms and conditions, discussed, including
            those additional terms and conditions and policies referenced herein and/or
            available by the providers of the goods, this by the airlines directly. <br>
            The terms are the exact same terms offered by the airlines directly, as tickets are
            issued from the airlines directly. If you do not agree to all the Terms of this
            Agreement, then you may not access the Site or use any Service. If these Terms are
            considered an offer, acceptance is expressly limited to these Terms. <br>
            Any new features or tools which are added to the current store shall also be subject
            to the Terms. You can review the most current version of the Terms at any time on
            this page. We reserve the right to update, change or replace any part of these Terms
            by posting updates and/or changes to our Site. It is your responsibility to check this
            page periodically for changes. Your continued use of or access to the Site following
            the posting of any changes constitutes acceptance of those changes. <br>
            <br>
            <b>SECTION 1 - GENERAL TERMS</b> <br>
            By agreeing to these Terms, you represent that you are at least the age of majority in
            your state or province of residence, or that you are the age of majority in your state
            or province of residence and you have given us your consent to allow any of your
            minor dependents to use this Site. <br>
            You may not use our products or Site for any illegal or unauthorized purpose.
            You agree that we will not be liable to you or any third party for taking any of these
            actions. <br>
            You understand and agree that our Site may include communications such as service
            announcements and administrative or legal notices from us. <br>
            You understand that your content (not including credit card information), may be
            transferred unencrypted and involve (a) transmissions over various networks; and (b)
            changes to conform and adapt to technical requirements of connecting networks or
            devices. <br>
            You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the
            Site, use of the Site, or access to the Site or any contact on the Site, without express
            written permission by us. <br>
            You may not modify, publish, transmit, reverse engineer, participate in the transfer
            or sale, create derivative works, or in any way exploit any of the content, in whole or
            in part, found on the Site. VOLO BOOKING DBA content is not for resale. Use of
            the Site does not entitle users to make any unauthorized use of any protected
            content, and in particular you will not delete or alter any proprietary rights or
            attribution notices in any content. You will use protected content solely for your
            personal use, and will make no other use of the content without the express written
            permission of VOLO BOOKING DBA and the copyright owner. You agree that
            you do not acquire any ownership rights in any protected content. We do not grant
            you any licenses, express or implied, to the intellectual property of VOLO
            BOOKING DBA or our licensors except as expressly authorized by these Terms. <br> <br>
            <b>SECTION 2 - THIRD-PARTY LINKS AND THIRD-PARTY USE OF
              COOKIES AND OTHER TRACKING TECHNOLOGIES. </b> <br>
            <br>
            <b>THE AIRLINES DIRECTLY</b> <br>
            Some content you may see when using the services, including advertisements, are
            served by third-parties, including advertisers, ad networks and servers, content
            providers, and application providers. These third parties may use cookies alone
            or in conjunction with web beacons or other tracking technologies to collect
            information about you when you use our website. <br>
            We do not control these third parties’ tracking technologies or how they may be
            used. If you have any questions about an advertisement or other targeted content,
            you should contact the responsible provider directly. <br>
            Our services may also contain links to other websites for your reference and
            convenience. We are not responsible for the privacy practices employed by other
            websites. Visit those websites for information regarding their privacy policy prior
            to providing personal information. <br>
            We do not rent email addresses to third-party organizations. However, we have to
            provide third parties and airlines your information in order for the airlines to
            book your tickets and flights. <br>
            How we use your information <br>
            we use information that we collect about you or that you provide to us, including
            any personal information: <br>
            • to present our services and their respective contents to you. <br>
            • to provide you with information, products, or services that you request or
            purchase from us. <br>
            • to provide you with notices about your flight. <br>
            • to carry out our obligations and enforce our rights arising from any
            contracts entered into between you and us, including for billing and
            collection. <br>
            • to notify you about changes to our services. <br>
            • to contact you for other marketing purposes. <br>
            • for any other purpose with your consent. <br>
            We may disclose personal information that we collect or you provide as
            described in this privacy policy: <br>
            • to our subsidiaries and affiliates. <br>
            • to contractors, service providers, and other third parties we use to support
            our business. <br>
            • to third parties to market their products or services to you if you have not
            opted out of these disclosures. <br>
            • for any other purpose disclosed by us when you provide the information. <br> <br>
            <b> SECTION 3 - CONDUCT</b> <br>
            As a user or member of the Site, you herein acknowledge, understand and agree that
            all information, text, software, data, photographs, music, video, messages, tags or any
            other content, whether it is publicly or privately posted and/or transmitted, is the
            expressed sole responsibility of the individual from whom the content originated. In
            short, this means that you are solely responsible for any and all content posted,
            uploaded, emailed, transmitted or otherwise made available by way of the VOLO
            BOOKING DBA Services, and as such, we do not guarantee the accuracy, integrity
            or quality of such content. It is expressly understood that by use of our Services, you
            may be exposed to content including, but not limited to, any errors or omissions in
            any content posted, and/or any loss or damage of any kind incurred as a result of the
            use of any content posted, emailed, transmitted or otherwise made available by
            VOLO BOOKING DBA. <br>
            Furthermore, you herein agree not to make use of VOLO BOOKING DBA's
            Services for the purpose of: <br>
            a) uploading, posting, emailing, transmitting, or otherwise making available any
            content that shall be deemed unlawful, harmful, threatening, abusive, harassing,
            tortious, defamatory, vulgar, obscene, libelous, or invasive of another's privacy or
            which is hateful, and/or racially, ethnically, or otherwise objectionable; <br>
            b) causing harm to minors in any manner whatsoever; <br>
            c) impersonating any individual or entity, including, but not limited to, any VOLO
            BOOKING DBA officials, forum leaders, guides or hosts or falsely stating or
            otherwise misrepresenting any affiliation with an individual or entity; <br>
            d) forging captions, headings or titles or otherwise offering any content that you
            personally have no right to pursuant to any law nor having any contractual or
            fiduciary relationship with; <br>
            e) uploading, posting, emailing, transmitting or otherwise offering any such content
            that may infringe upon any patent, copyright, trademark, or any other proprietary or
            intellectual rights of any other party; <br>
            f) uploading, posting, emailing, transmitting or otherwise offering any content that
            you do not personally have any right to offer pursuant to any law or in accordance
            with any contractual or fiduciary relationship; <br>
            g) uploading, posting, emailing, transmitting, or otherwise offering any unsolicited or
            unauthorized advertising, promotional flyers, "junk mail," "spam," or any other form
            of solicitation, except in any such areas that may have been designated for such
            purpose; <br>
            h) uploading, posting, emailing, transmitting, or otherwise offering any source that
            may contain a software virus or other computer code, any files and/or programs
            which have been designed to interfere, destroy and/or limit the operation of any
            computer software, hardware, or telecommunication equipment; <br>
            i) disrupting the normal flow of communication, or otherwise acting in any manner
            that would negatively affect other users' ability to participate in any real time
            interactions; <br>
            j) interfering with or disrupting any VOLO BOOKING DBA Services, servers
            and/or networks that may be connected or related to our website, including, but not
            limited to, the use of any device software and/or routine to bypass the robot
            exclusion headers; <br>
            k) intentionally or unintentionally violating any local, state, federal, national or
            international law, including, but not limited to, rules, guidelines, and/or regulations
            decreed by the U.S. Securities and Exchange Commission, in addition to any rules
            of any nation or other securities exchange, that would include without limitation, the
            New York Stock Exchange, the American Stock Exchange, or the NASDAQ, and
            any regulations having the force of law; <br>
            l) providing informational support or resources, concealing and/or disguising the
            character, location, and or source to any organization delegated by the United States
            government as a "foreign terrorist organization" in accordance to Section 219 of the
            Immigration Nationality Act; <br>
            m) "stalking" or with the intent to otherwise harass another individual; and/or <br>
            n) collecting or storing of any personal data relating to any other member or user in
            connection with the prohibited conduct and/or activities which have been set forth in
            the aforementioned paragraphs. <br>
            VOLO BOOKING DBA herein reserves the right to pre-screen, refuse and/or
            delete any content currently available through our Services. In addition, we reserve
            the right to remove and/or delete any such content that would violate the Terms or
            which would otherwise be considered offensive to other visitors, users and/or
            members. <br>
            VOLO BOOKING DBA herein reserves the right to access, preserve and/or
            disclose member account information and/or content if it is requested to do so by
            law or in good faith belief that any such action is deemed reasonably necessary for:
            a) compliance with any legal process; <br>
            b) enforcement of the Terms; <br>
            c) responding to any claim that therein contained content is in violation of the rights
            of any third party; <br>
            d) responding to requests for customer service; or <br>
            e) protecting the rights, property or the personal safety of VOLO BOOKING DBA,
            its visitors, users and members, including the general public. <br>
            VOLO BOOKING DBA herein reserves the right to include the use of security
            components that may permit digital information or material to be protected, and that
            such use of information and/or material is subject to usage guidelines and regulations
            established by VOLO BOOKING DBA or any other content providers supplying
            content services to VOLO BOOKING DBA. You are hereby prohibited from
            making any attempt to override or circumvent any of the embedded usage rules in
            our Services. Furthermore, unauthorized reproduction, publication, distribution, or
            exhibition of any information or materials supplied by our Services, despite whether
            done so in whole or in part, is expressly prohibited. <br> <br>
            <b>SECTION 4 - SUBMITTED CONTENT</b> <br>
            VOLO BOOKING DBA shall not lay claim to ownership of any content submitted
            by any visitor, member, or user, nor make such content available for inclusion on
            our website Services. Therefore, you hereby grant and allow for VOLO BOOKING
            DBA the below listed worldwide, royalty-free and non-exclusive licenses, as
            applicable: <br>
            a) The content submitted or made available for inclusion on the publicly accessible
            areas o f VOLO BOOKING DBA's Sites, the license provided to permit to use,
            distribute, reproduce, modify, adapt, publicly perform and/or publicly display said
            Content on our network Services is for the sole purpose of providing and promoting
            the specific area to which this content was placed and/or made available for viewing.
            This license shall be available so long as you are a member of VOLO BOOKING
            DBA's sites, and shall terminate at such time when you elect to discontinue your
            membership. <br>
            b) Photos, audio, video and/or graphics submitted or made available for inclusion on
            the publicly accessible areas of VOLO BOOKING DBA's sites, the license
            provided to permit to use, distribute, reproduce, modify, adapt, publicly perform
            and/or publicly display said Content on our network Services are for the sole
            purpose of providing and promoting the specific area in which this content was
            placed and/or made available for viewing. This license shall be available so long as
            you are a member of VOLO BOOKING DBA's sites and shall terminate at such
            time when you elect to discontinue your membership. <br>
            c) For any other content submitted or made available for inclusion on the publicly
            accessible areas of VOLO BOOKING DBA's sites, the continuous, binding and
            completely sub-licensable license which is meant to permit to use, distribute,
            reproduce, modify, adapt, publish, translate, publicly perform and/or publicly
            display said content, whether in whole or in part, and the incorporation of any such
            Content into other works in any arrangement or medium current used or later
            developed. <br>
            Those areas which may be deemed "publicly accessible" areas of VOLO
            BOOKING DBA's Sites are those such areas of our network properties which are
            meant to be available to the general public, and which would include message boards
            and groups that are openly available to both users and members. However, those
            areas which are not open to the public, and thus available to members only, would
            include our mail system and instant messaging. <br>
            <b> CONTRIBUTIONS TO COMPANY WEBSITE</b> <br>
            VOLO BOOKING DBA may provide an area for our user and members to
            contribute feedback to our website. When you submit ideas, documents, suggestions
            and/or proposals ("Contributions") to our site, you acknowledge and agree that: <br>
            a) your contributions do not contain any type of confidential or proprietary
            information; <br>
            b ) VOLO BOOKING DBA shall not be liable or under any obligation to ensure or
            maintain confidentiality, expressed or implied, related to any Contributions; <br>
            c ) VOLO BOOKING DBA shall be entitled to make use of and/or disclose any
            such Contributions in any such manner as they may see fit; <br>
            d) the contributor's Contributions shall automatically become the sole property of
            VOLO BOOKING DBA; and <br>
            e) VOLO BOOKING DBA is under no obligation to either compensate or provide
            any form of reimbursement in any manner or nature. <br> <br>
            <b> SECTION 5 - INDEMNITY </b> <br>
            All users and/or members agree to insure and hold VOLO BOOKING DBA, our
            subsidiaries, affiliates, agents, employees, officers, partners and/or licensors
            blameless or not liable for any claim or demand, which may include, but is not
            limited to, reasonable attorney fees made by any third party which may arise from
            any content a member or user of our Site may submit, post, modify, transmit or
            otherwise make available through our Services, the use of VOLO BOOKING DBA
            Services or your connection with these Services, your violations of the Terms of
            Service and/or your violation of any such rights of another person. <br> <br>
            <b>SECTION 6 - MODIFICATIONS</b> <br>
            VOLO BOOKING DBA reserves the right at any time it may deem fit, to modify,
            alter and or discontinue, whether temporarily or permanently, our service, or any
            part thereof, with or without prior notice. In addition, we shall not be held liable to
            you or to any third party for any such alteration, modification, suspension and/or
            discontinuance of our Services, or any part thereof. <br> <br>
            <b>SECTION 7 - LINKS </b> <br>
            Either VOLO BOOKING DBA or any third parties may provide links to other
            websites and/or resources. Thus, you acknowledge and agree that we are not
            responsible for the availability of any such external sites or resources, and as such,
            we do not endorse nor are we responsible or liable for any content, products,
            advertising or any other materials, on or available from such third party sites or
            resources. Furthermore, you acknowledge and agree that VOLO BOOKING DBA
            shall not be responsible or liable, directly or indirectly, for any such damage or loss
            which may be a result of, caused or allegedly to be caused by or in connection with
            the use of or the reliance on any such content, goods or Services made available on
            or through any such site or resource. <br> <br>
            <b>SECTION 8 - NOTICE</b> <br>
            VOLO BOOKING DBA may furnish you with notices, including those with regards
            to any changes to the Terms, including but not limited to email, regular mail, MMS
            or SMS, text messaging, postings on our website Services, or other reasonable means
            currently known or any which may be herein after developed. Any such notices may
            not be received if you violate any aspects of the Terms by accessing our Services in
            an unauthorized manner. Your acceptance of this Agreement constitutes your
            agreement that you are deemed to have received any and all notices that would have
            been delivered had you accessed our Services in an authorized manner. <br> <br>
            <b>SECTION 9 - ENTIRE AGREEMENT </b> <br>
            This Agreement constitutes the entire agreement between you and VOLO
            BOOKING DBA and shall govern the use of our Services, superseding any prior
            version of this Agreement between you and us with respect to VOLO BOOKING
            DBA Services. You may also be subject to additional terms and conditions that may
            apply when you use or purchase certain other VOLO BOOKING DBA Services,
            affiliate Services, third-party content or third-party software. <br> <br>
            <b>SECTION 10 - CHOICE OF LAW AND FORUM</b> <br>
            It is at the mutual agreement of both you and VOLO BOOKING DBA with regard
            to the Agreement that the relationship between the parties shall be governed by the
            laws of the state of California without regard to its conflict of law provisions and that
            any and all claims, causes of action and/or disputes, arising out of or relating to the
            Agreement, or the relationship between you and VOLO BOOKING DBA, shall be
            filed within the courts having jurisdiction within the County of USA, California or
            the U.S. District Court located in said state. You and VOLO BOOKING DBA
            agree to submit to the jurisdiction of the courts as previously mentioned, and agree
            to waive any and all objections to the exercise of jurisdiction over the parties by such
            courts and to venue in such courts. <br> <br>
            <b>SECTION 11 - WAIVER AND SEVERABILITY OF TERMS</b> <br>
            At any time, should VOLO BOOKING DBA fail to exercise or enforce any right
            or provision of the Agreement, such failure shall not constitute a waiver of such right
            or provision. If any provision of this Agreement is found by a court of competent
            jurisdiction to be invalid, the parties nevertheless agree that the court should
            endeavor to give effect to the parties' intentions as reflected in the provision, and the
            other provisions of the Agreement remain in full force and effect. <br> <br>
            <b>SECTION 12 - STATUTE OF LIMITATIONS </b> <br>
            You acknowledge, understand and agree that regardless of any statute or law to the
            contrary, any claim or action arising out of or related to the use of our Services or
            the Agreement must be filed within year(s) after said claim or cause of action arose
            or shall be forever barred. <br> <br>
            <b>SECTION 13 – HOW TO CONTACT US </b> <br>
            Mailing Address: VOLO BOOKING DBA 460 N Beverly Dr Beverly Hills, <br>
            California 90210 <br>
            Telephone: (424) 234-1650 <br>
            Email: INFO@VOLOBOOKING.COM <br> <br>
            <b>SECTION 14 FOREIGN ACCESS OF SITE </b> <br>
            The Site is controlled, operated and administered by VOLO BOOKING DBA
            from our offices within the USA. If you access the Site from a location outside the
            USA, you are responsible for compliance with all local laws. You agree that you will
            not use VOLO BOOKING DBA 's content accessed through the Site in any
            country or in any manner prohibited by any applicable laws, restrictions or
            regulations. <br> <br>
            <b>SECTION 15 - ERRORS, INACCURACIES AND OMISSIONS</b> <br>
            Occasionally there may be information on our Site that contains typographical
            errors, inaccuracies or omissions that may relate to product descriptions, pricing,
            promotions, offers, product shipping charges, transit times and availability. We
            reserve the right to correct any errors, inaccuracies or omissions, and to change or
            update information or cancel orders if any information on the Site or on any related
            Site is inaccurate at any time without prior notice (including after you have submitted
            your order). <br>
            We undertake no obligation to update, amend or clarify information on the Site or
            on any related Site, including without limitation, pricing information, except as
            required by law. No specified update or refresh date applied on the Site or on any
            related Site, should be taken to indicate that all information on the Site or on any
            related Site has been modified or updated. <br> <br>
            <b>SECTION 16 - PRIVACY POLICY</b> <br>
            Every member's registration data and various other personal information are strictly
            protected by t h e VOLO BOOKING DBA Online Privacy Policy (see the full
            Privacy Policy at www.volobooking.com) As a member, you herein consent to the
            collection and use of the information provided, including the transfer of information
            within the United States and/or other countries for storage, processing or use by
            VOLO BOOKING DBA and/or our subsidiaries and affiliates.
          </p>
        </div>
        <div class="modal-footer">
          <button style="font-family: 'Heebo';" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   -->
  <script src="index.js"></script>
  <script src="indexx.js"></script>
  <script type="text/javascript">
    show1 = document.getElementById("show1")
    show2 = document.getElementById("show2")
    show3 = document.getElementById("show3")

    show2.style.display = "none";
    show3.style.display = "none";

    function myfunc1() {
      show2.style.display = "none";
      show3.style.display = "none";
      show1.style.display = "block";
    }

    function myfunc2() {
      show1.style.display = "none";
      show3.style.display = "none";
      show2.style.display = "block";
    }


    function myfunc3() {
      show1.style.display = "none";
      show2.style.display = "none";
      show3.style.display = "block";
    }



    function myFunction() {
      document.getElementById("myDate").value = "2014-02-09";
    }

    $(document).ready(function() {

      $(".filter-button").click(function() {
        var value = $(this).attr('data-filter');

        if (value == "all") {
          //$('.filter').removeClass('hidden');
          $('.filter').show('1000');
        } else {
          //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
          //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          $(".filter").not('.' + value).hide('3000');
          $('.filter').filter('.' + value).show('3000');

        }
      });

      if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
      }
      $(this).addClass("active");

    });

    $(function() {
      //$(".chevron-down").
      $("div[data-toggle=collapse]").click(function() {
        $(this).children('span').toggleClass("fa-chevron-down fa-chevron-up");
      });
    })

    function sheet4() {
      const scriptURL3 = 'https://script.google.com/macros/s/AKfycbywaLHcxnNbwEZy0Gqch7Z32hZPugtXVrm8XZJfGHYQiq-spV2Kss4MYOB0Nnj5e3Tb/exec'
      const form3 = document.forms['google-sheet3']

      form3.addEventListener('submit', e => {
        e.preventDefault()
        prg()
        fetch("oneway.php", {
          method: 'POST',
          body: new FormData(form3)
        })
        fetch(scriptURL3, {
            method: 'POST',
            body: new FormData(form3)
          })
          .then(response => {
            alert1()
            var frm = document.getElementsByName('google-sheet3')[0];
            frm.reset(); // Reset all form data
            grecaptcha.reset();
            return false;

          })
          .catch(error => error1())
      })
    }
    //For Contact section
    const scriptURL1 = 'https://script.google.com/macros/s/AKfycbzePUlThesickFbs7ppnODCSBk2Oxk9_xqHFN0j6j0jfkkAWD_Lb-MhXO4n8qYucSX_/exec'
    const form1 = document.forms['contact-form']

    form1.addEventListener('submit', e => {
      e.preventDefault()
      prg()
      fetch(scriptURL1, {
          method: 'POST',
          body: new FormData(form1)
        })
        .then(response => {
          alert3();
          var frm = document.getElementsByName('contact-form')[0];
          frm.reset(); // Reset all form data
          return false;

        })
        .catch(error => error1())
    })

    function sheet2() {

      const scriptURL2 = 'https://script.google.com/macros/s/AKfycbzRJyl8UpKcq4fjCEr5wWWwfSsg7zy5WV8Q3cJ-o110dNm0PZXbGOozSDecy0xevQKt/exec'
      const form2 = document.forms['google-sheet2']

      form2.addEventListener('submit', e => {
        e.preventDefault()
        prg()
        fetch("multicity.php", {
          method: 'POST',
          body: new FormData(form2)
        })
        fetch(scriptURL2, {
            method: 'POST',
            body: new FormData(form2)
          })
          .then(response => {
            alert1()
            var frm = document.getElementsByName('google-sheet2')[0];
            frm.reset(); // Reset all form data
            grecaptcha.reset();
            return false;

          })
          .catch(error => error1())
      })
    }

    function sheet3() {
      const scriptURL = 'https://script.google.com/macros/s/AKfycbzil4mOGuSzbaCnJ_wGot99LqzB37qS0TdKMAcCis1M8SdBJJPdHwnkgw3eZxGUwm83/exec'
      const form = document.forms['google-sheet']

      form.addEventListener('submit', e => {
        e.preventDefault();
        prg()
        fetch("round_trip.php", {
          method: 'POST',
          body: new FormData(form)
        })
        fetch(scriptURL, {
            method: 'POST',
            body: new FormData(form)
          })
          .then(response => {
            alert1();
            var frm = document.getElementsByName('google-sheet')[0];
            frm.reset(); // Reset all form data
            grecaptcha.reset();
            return false;
          })
          .catch(error => error1())
      })
    }

    //
    function sheet1() {
      const scriptURL4 = 'https://script.google.com/macros/s/AKfycbw1geSDedqFQiR2Igv9nxr5RSaF2WZDReReslEJkiOnIStVSku21rMwvYc-174ApI6V/exec'
      const form4 = document.forms['google-sheetLast']

      form4.addEventListener('submit', e => {
        e.preventDefault()
        prg()
        fetch("register.php", {
          method: 'POST',
          body: new FormData(form4)
        })
        fetch(scriptURL4, {
            method: 'POST',
            body: new FormData(form4)
          })
          .then(response => {
            alert2()
            var frm = document.getElementsByName('google-sheetLast')[0];
            frm.reset(); // Reset all form data
            return false;

          })
          .catch(error => error1())
      })

    }

    function submitForm() {
      // Get the first form with the name
      // Usually the form name is not repeated
      // but duplicate names are possible in HTML
      // Therefore to work around the issue, enforce the correct index
      var frm = document.getElementsByName('google-sheet')[0];
      frm.submit(); // Submit the form
      frm.reset(); // Reset all form data
      return false; // Prevent page refresh
    }

    ////////////

    //For aleart

    function alert1() {
      swal({
        title: "Thank you for your request.",

        text: " We are working hard to find the best flights and deals for you. Shortly you will find a quote and itinerary in your email.",
        icon: "success",
        button: "Continue",
      });
    }

    function alert2() {
      swal({
        title: "Thank you for registering.",

        icon: "success",
        button: "Continue",
      });
    }

    function alert3() {
      swal({
        title: "Message sent.",
        icon: "success",

        button: "Continue",
      });
    }

    function error1() {
      swal({
        title: "Error",
        text: "Please check Your network and try again",
        icon: "warning",
        button: "Continue",
        dangerMode: true,
      });
    }

    function prg() {
      swal({

        title: "Please wait....",
        text: "          ",

        buttons: false,
      })
    }

    //recapcha
    //error recapcha
    function error2() {
      swal({
        title: "Error",
        text: "Please verify reCAPTCHA",
        icon: "warning",
        button: "Continue",
        dangerMode: true,
      });
    }

    function res1() {
      var rcres = grecaptcha.getResponse(0);
      if (rcres.length) {

        sheet3()
      } else {
        alert("Please verify reCAPTCHA", "error");
      }
    }

    function res2() {
      var rcres1 = grecaptcha.getResponse(1);
      if (rcres1.length) {

        sheet4()
      } else {
        alert("Please verify reCAPTCHA", "error");
      }
    }

    function res3() {
      var rcres1 = grecaptcha.getResponse(2);
      if (rcres1.length) {

        sheet2()
      } else {
        alert("Please verify reCAPTCHA", "error");
      }
    }
  </script>
</body>

</html>