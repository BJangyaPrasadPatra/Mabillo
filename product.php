<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Mabello Doors and Furniture Pvt. Ltd. - Home</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
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
    <?php include("_include/_Header.inc.php"); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/about-us.png);">
      <div class="container">
        <h2 class="breadcrumbs-custom__title">Products</h2>
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.php">Home</a></li>
          <li class="active">Products</li>
        </ul>
      </div>
    </section>
    <section>
      <div class="latest-products p-5">
        <div class="container">
          <div class="row row-70 row-lg-110 row-offset-1" id="imgAddContainer">
              
            </div>
          </div>
        </div>
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
  <script src="js/jquery.js"></script>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/APIURL.js"></script>
</body>

</html>