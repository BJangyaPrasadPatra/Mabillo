<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Mabello Doors and Furniture Pvt. Ltd. - Contact Us</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/fav-icon.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto:400,500,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <!-- Page Loader-->
  <div class="preloader" id="preloader">
    <div class="page-loader-logo">
      <div class="brand">
        <div class="brand__name"><img src="images/logo.png" alt="" width="190" height="50" />
        </div>
      </div>
    </div>
    <div class="page-loader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">
    <!-- Page Header-->
    <?php include("_include/_Header.inc.php"); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/about-us.png);">
      <div class="container">
        <h2 class="breadcrumbs-custom__title">Contacts</h2>
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.php">Home</a></li>
          <li class="active">Contacts</li>
        </ul>
      </div>
    </section>
    <!-- Get in Touch-->

    <section class="section section-lg bg-default">
      <div class="container">
        <div class="layout-bordered">
          <div class="layout-bordered__main text-center">
            <div class="layout-bordered__main-inner">
              <h3>Get in Touch</h3>
              <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.</p>
              <!-- RD Mailform-->
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                <div class="row align-items-md-end row-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-first-name">Name</label>
                      <input class="form-input" id="contact-first-name" type="text" name="fname" data-constraints="@Required">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="number" data-constraints="@Numeric @Required">
                      <label class="form-label" for="contact-phone">Contact Number</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required">
                      <label class="form-label" for="contact-subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Your Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button id="sendMailBtn" name="sendMailBtn" value="sendMailBtn" class="button button-block button-primary" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="layout-bordered__aside">
            <div class="layout-bordered__aside-item">
              <p class="heading-8">Get social</p>
              <ul class="list-inline-xs">
                <li><a class="icon icon-sm icon-default fa fa-facebook" href="https://www.facebook.com/mabellodoorsandfurniture?mibextid=ZbWKwL"></a></li>
                <li><a class="icon icon-sm icon-default fa fa-twitter" href="#"></a></li>
                <li><a class="icon icon-sm icon-default fa fa-instagram" href="https://www.instagram.com/mabellodoorsandfurniture?igsh=MXZiNXFhcTN3M3Q1Mw=="></a></li>
                <li><a class="icon icon-sm icon-default fa fa-youtube" href="#"></a></li>
              </ul>
            </div>
            <div class="layout-bordered__aside-item">
              <p class="heading-8">Phone</p>
              <div class="unit flex-row unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                <div class="unit__body"><a href="#">+91 97770 33342</a></div>
              </div>
            </div>
            <div class="layout-bordered__aside-item">
              <p class="heading-8">E-mail</p>
              <div class="unit flex-row unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                <div class="unit__body"><a href="#"> mabellofurniture.pvt@gmail.com</a></div>
              </div>
            </div>
            <div class="layout-bordered__aside-item">
              <p class="heading-8">Address</p>
              <div class="unit flex-row unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                <div class="unit__body"><a href="#">Haradanga, Berhampur <br>
                    (Near Siddha Bhaiabi Temple) <br>

                    Ganjam, Odisha-761008, India.</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- RD Google Map-->
    <section class="section">
      <div class="google-map-container" data-center="6036 Richmond hwy., Alexandria, VA, 2230" data-zoom="5" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d942.0686431428815!2d84.772016!3d19.1832062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3d43ca4927a4e5%3A0xd07a8eed731b9844!2sMabello%20Doors%20and%20Furniture%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1706688141505!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <!-- Page Footer-->
    <footer class="footer-classic bg-gray-8">
      <div class="container">
        <?php include("_include/_Footer-top.inc.php"); ?>
        <div class="divider"></div>
        <?php include("_include/_Footer-bottom.inc.php"); ?>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['sendMailBtn'])) {
  $name = $_POST["fname"];
  $number = $_POST["number"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];



  //Load Composer's autoloader
  require 'PHPMailer/vendor/autoload.php';


  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mabellofurniture.pvt@gmail.com';                     //SMTP username
    $mail->Password   = 'mabellogmailAppPassword';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mabellofurniture.pvt@gmail.com', 'MABELLO');
    $mail->addAddress('sibahota1989@gmail.com', 'Siba');     //Add a recipient
    //     $mail->addCC('cc@example.com');
    //     $mail->addBCC('bcc@example.com');

    //Attachments
    //     $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "Sender Name : $name<br> Sender Email : $email<br> Sender Contact No. : $number<br> Sender Messsage : $message ";
    //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>