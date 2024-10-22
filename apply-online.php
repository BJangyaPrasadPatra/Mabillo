<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Mabello Doors and Furniture Pvt. Ltd. - Apply Online</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/fav-icon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto:400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
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
        <?php include("_include/_Header.inc.php"); ?>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image" style="background-image: url(images/about-us.png);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">Apply Online</h2>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Apply Online</li>
                </ul>
            </div>
        </section>
        <!-- Mabello Assist-->
        <section class="section section-md bg-default">
            <div class="container">
                <div class="row row-70">
                    <div class="col-md-10 col-lg-8">
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact">
                            <div class="row align-items-md-end row-20">                    
                              <div class="col-md-12">
                                <div class="form-wrap">
                                  <label class="form-label" for="contact-name">Name</label>
                                  <input class="form-input" id="contact-name" type="text" name="org-name" data-constraints="@Required">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <input class="form-input" id="contact-contact" type="text" name="contact" data-constraints="@Numeric @Required">
                                  <label class="form-label" for="contact-contact">Contact</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                  <label class="form-label" for="contact-email">E-mail</label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-wrap">
                                  <input class="form-input" id="contact-store" type="text" name="store" data-constraints="@Required">
                                  <label class="form-label" for="contact-store">Where would you like to open the store?</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="form-label" for="contact-franchise"></label>
                                  <select class="form-input" name="franchise" id="contact-franchise" data-constraints="@Select @Required">
                                    <option value="">How many stores are you interested to franchise?</option>
                                    <option value="">1</option>
                                    <option value="">2-5</option>
                                    <option value="">5+</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="form-label" for="contact-invest"></label>
                                  <select class="form-input" name="invest" id="contact-invest" data-constraints="@Select @Required">
                                    <option value="">How much are you willing to invest in the franchise?</option>
                                    <option value="">RS. 20L+</option>
                                    <option value="">RS. 30L+</option>
                                    <option value="">RS. 40L+ W</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="form-label" for="contact-business"></label>
                                  <select class="form-input" name="business" id="contact-business" data-constraints="@Select @Required">
                                    <option value="">Have you bought/operated a franchise business before?</option>
                                    <option value="">Yes</option>
                                    <option value="">No</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="form-label" for="contact-firstStore"></label>
                                  <select class="form-input" name="firstStore" id="contact-firstStore" data-constraints="@Select @Required">
                                    <option value="">When do you plan to open your first store?</option>
                                    <option value="">Immediately</option>
                                    <option value="">Within 6 Months</option>
                                    <option value="">In the next 1 year</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-wrap">
                                  <label class="form-label" for="contact-property"></label>
                                  <select class="form-input" name="property" id="contact-property" data-constraints="@Select @Required">
                                    <option value="">Weather Rented or or Own Property</option>
                                    <option value="">Own Property</option>
                                    <option value="">Rented Property</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <select class="form-input" name="state" id="contact-state" data-constraints="@Select @Required">
                                    <option value="">Select Your State:</option>
                                    <option value="">Andaman and Nicober</option>
                                    <option value="">Andhra pradesh</option>
                                    <option value="">Arunanchal pradesh</option>
                                    <option value="">Assam</option>
                                    <option value="">Bihar</option>
                                    <option value="">Chatishgarh</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <input class="form-input" id="contact-city" type="text" name="city" data-constraints="@Required">
                                  <label class="form-label" for="contact-city">City</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <input class="form-input" id="contact-pin" type="text" name="pin" data-constraints="@numeric @Required">
                                  <label class="form-label" for="contact-pin">PIN</label>
                                </div>
                              </div>
                              
                              <div class="col-md-6">
                                <button class="button button-block button-primary" type="submit">Send Message</button>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-10 col-lg-4">
                        <div class="row grid-2">
                            <div class="col-md-10 col-lg-8">
                            </div>
                            <div class="col-12">
                                <h4>IMPORTANT LINKS</h4>
                                <h4><span><i class="fas fa-download"></i></span><span><a href="Final Franchise Manual Mabello.pdf">Download Broucher</a></h4>
                                <h4><span><i class="fas fa-download"></i></span><span><a href="apply-online.php">Apply online</a></h4>


                            </div>
                            <div class="col-12">
                                <img src="images/about2.jpg" class="mt-3" alt="" width="273" height="214" />
                                <h4 class="mt-3">OUR DOOR PRODUCT</h4>
                                <img src="images/about3.jpg" alt="" width="273" height="214" />
                                <h4 class="mt-3">OFFICE & HOME FURNITURE</h4>
                                <img src="images/about4.jpg" alt="" width="273" height="214" />
                                <img src="images/about5.jpg" alt="" width="273" height="214" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefits -->
        <section class="section section-md bg-default">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>BENEFITS OF FRANCHISING WITH MABELLO</h3>
                        <div class="row row-30 justify-content-center">
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                <article class="box-minimal">
                                    <div class="box-minimal__icon fas fa-chart-bar"></div>
                                    <h4 class="box-minimal__title">WORK FORCE:</h4>
                                    <div class="box-minimal__divider"></div>
                                    <div class="box-minimal__text">Hardworking, devoted and accomplished work force to
                                        support your business. Their knowledge. experience and skill will help you gain
                                        business.</div>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                <article class="box-minimal">
                                    <div class="box-minimal__icon fas fa-chart-line"></div>
                                    <h4 class="box-minimal__title">EFFECTIVE ANALYTICS:</h4>
                                    <div class="box-minimal__divider"></div>
                                    <div class="box-minimal__text">We have established a strong presence in the
                                        industry. Our award-winning services earn a reputation for quality and
                                        excellence that few can rival.</div>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                <article class="box-minimal">
                                    <div class="box-minimal__icon fas fa-compress"></div>
                                    <h4 class="box-minimal__title">TRAINING PROGRAM:</h4>
                                    <div class="box-minimal__divider"></div>
                                    <div class="box-minimal__text">Extensive training programs for your staff offers
                                        regular enhancement and uniforms provide unique identification to setup and
                                        identity.</div>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                <article class="box-minimal">
                                    <div class="box-minimal__icon fas fa-compass"></div>
                                    <h4 class="box-minimal__title">
                                        SOCIALLY AWARE BUSINESS:</h4>
                                    <div class="box-minimal__divider"></div>
                                    <div class="box-minimal__text">This business indicates awareness and responsibility
                                        towards society by providing the wooden products in a lower cost to peoples.
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                <article class="box-minimal">
                                    <div class="box-minimal__icon fas fa-chart-pie">
                                    </div>
                                    <h4 class="box-minimal__title">
                                        COMPETITIVE EDGE:</h4>
                                    <div class="box-minimal__divider"></div>
                                    <div class="box-minimal__text">Our wide range & competitive price products has a
                                        Unique Selling Point which will ensure your exclusivity in the competitive
                                        market.</div>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                <article class="box-minimal">
                                    <div class="box-minimal__icon fas fa-globe"></div>
                                    <h4 class="box-minimal__title">
                                        STORE DESIGN:</h4>
                                    <div class="box-minimal__divider"></div>
                                    <div class="box-minimal__text">Our high-end software helps you in holding stock
                                        records, billing, etc. Our professional store lay out offers unified identity.
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-md bg-gray-4 text-center">
            <div class="container">
              <h2>Support With Mabello</h2>
              <div class="row row-50">
                <div class="col-md-3 text-md-right">
                  <div class="card p-3 rounded-0">
                    <h4 class="mt-3">STORE SETTING SUPPORT</h4>
                    <p>Professional Store Layout, Interior, Furniture, Lights, etc. ISI Certification of our products. Assistance in Store Location and Store Set-up.</p>
                  </div>
                </div>
                <div class="col-md-3 text-md-right">
                  <div class="card p-3 rounded-0">
                  <h4 class="mt-3">FUNCTIONAL SUPPORT</h4>
                  <p>Computerizing business operation, IT support and monitoring. Assistance in recruiting store personnel. Classroom and store based staff training programs.</p>
                  </div>
                </div>
                <div class="col-md-3 text-md-right">
                  <div class="card p-3 rounded-0">
                  <h4 class="mt-3">DIGITAL SUPPORT</h4>
                  <p>Market Survey of Neighborhood and cloud based ERP software support. Social media artwork to attract and convince buyers. Store details displayed on our website & other platforms.</p>
                  </div>
                </div>
                <div class="col-md-3 text-md-right">
                  <div class="card p-3 rounded-0">
                  <h4 class="mt-3">MARKETING MATERIAL</h4>
                  <p>Right to use Mabello Logo, Visiting cards to ensure quality. supply of Informative brochures & pamphlets. Feed-back forms to procure data & feedbacks.</p>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/APIURL.js"></script>
</body>

</html>