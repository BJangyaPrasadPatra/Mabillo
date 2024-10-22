<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Mabello Doors and Furniture Pvt. Ltd. - About Us</title>
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
        <?php include("_include/_Header.inc.php"); ?>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image" style="background-image: url(images/about-us.png);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title menu-title"></h2>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active menu-title"></li>
                </ul>
            </div>
        </section>
        <!-- Experience since 1999-->
        <section class="section section-md bg-default">
            <div class="container">
                <div class="row row-70">
                    <div class="col-md-10 col-lg-8">
                        <div id="title_banner">
                        <!-- <img src="images/about1.jpg" alt="" width="100%" height="380" /> -->
                        </div>
                        
                        
                        <!-- <p>Mabello is the leading woodworking industry in Odisha that combines creativity, craftsmanship and
                            technology. At Mabello, we are dedicated to providing a range of exquisite wooden products that meet the
                            highest standards of quality and aesthetics. Whether you're looking for bespoke furniture for your home or
                            office, or looking to elevate your decor with handcrafted decorative items, we have it all. Our team of
                            skilled craftsmen, designers, and artists work together to create unique designs that merge timeless
                            elegance with contemporary sensibilities.</p>
                        <p>We use only the finest raw materials, responsibly sourced to minimize our environmental impact. Our
                            state-of-the-art facility features modern equipment and technology to ensure every product is crafted with
                            precision and care. We believe in providing personalized attention to each of our clients and work with
                            you to bring your ideas to life. At Mabello, we pride ourselves on providing exceptional customer service
                            and timely delivery. Let's work together to create beautiful wooden products that transform your spaces.
                            Contact us today to explore our exclusive range of products and services.</p>
                        <p>The woodworking industry in Odisha is committed to creating beautiful, high-quality, and long-lasting
                            products that meet the needs of modern homes. It uses traditional and modern techniques to create
                            furniture and woodworking products tailored to meet the unique needs of each customer.</p> -->
                    </div>
                    <div class="col-md-10 col-lg-4">
                        <div class="row grid-2">
                            <div class="col-12">
                                <img src="images/about2.jpg" alt="" width="273" height="214" />
                                <h4 class="mt-3">OUR DOOR PRODUCT</h4>
                                <img src="images/about3.jpg" alt="" width="273" height="214" />
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div id="title_content">
                </div>
                </div>
            </div>
        </section>
        <!-- Top Management-->

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
    <script src="js/jquery.min.js"></script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/APIURL.js"></script>

    <script>
        var id = "<?php echo $id; ?>";

        $(document).ready(function() {
            getTitle();
            TitleContent();
            downloadList();
            galleryList();
            faqList();
        });
        let counter = 0;

        function handleSuccess(totalRequests) {
            // Increment the counter
            counter++;

            // Check if all AJAX requests are complete
            if (counter >= totalRequests) {
                // All requests completed, hide spinner
                $('#overlay').fadeOut();
            }
        }

        let totalRequests = 0;

        function getTitle() {
            $.ajax({
                type: "GET",
                url: `${API_URL}/Page/information/${id}`,
                dataType: "json",
                success: function(response) {
                    $("#overlay").fadeIn(300);
                    let info = response.data;
                    $('.menu-title').text(info.title);
                    if (info.image !== null) {

                        $('#title_banner').html(`
                        <img src="${info.img_url}" alt="" width="100%" height="380" />`);

                    }

                    handleSuccess(totalRequests);
                }
            });
        }

        function TitleContent() {
            $("#overlay").fadeIn(300);

            $.ajax({
                type: "GET",
                url: `${API_URL}/Page/Content/List/${id}`,
                dataType: "json",
                success: function(response) {

                    let list = response.data;
                    $.each(list, function(index, item) {
                        let content = `
                                    ${
                                          item.content_type === 'text' ?
                                          `<div id="content_dataText" class="my-2">${item.content_desc}</div>` :
                                          item.content_type === 'image' ?
                                          `<div id="content_dataimage" class="my-2"><img src="${item.imageUrl}" width="" alt=""></div>` :
                                          ''
                                    }
                                                `;
                        $('#title_content').append(content)
                    });
                    handleSuccess(totalRequests);

                }
            });
        }

        function galleryList() {
            let service = '<?php echo isset($_GET['type']); ?>';
            let u_id = '<?php echo isset($_GET['u_id']); ?>';
            $.ajax({
                type: "GET",
                url: `${API_URL}/Service-Gallery/ServiceWise/${u_id}/${service}`,
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    let gallery = response.data
                    $.each(gallery, function(index, val) {
                        let imgCard = `
                     <div class="col-lg-6 col-md-6 col-xs-6 col-6">
                     <a href="${val.thumb_url}">
                <img class="mb-3" src="${ val.img_url}" alt="">
                </a>
              </div>
                     `;
                        $('#GalleryContent').append(imgCard);
                    });

                    handleSuccess(totalRequests);
                }
            });
        }

        function faqList() {
            let faq_list = $('#faq_list');
            let type = '<?php echo isset($_GET['type']); ?>';
            let u_id = '<?php echo isset($_GET['u_id']); ?>';
            $.ajax({
                type: "GET",
                url: `${API_URL}/Service-FAQ/ServiceWise/${u_id}/${type}`,
                dataType: "json",
                success: function(response) {
                    $("#overlay").fadeIn(300);
                    let list = response.data

                    $.each(list, function(index, val) {
                        let list = `
                    <div class="card">
                <div class="accordion-icon card-header active" id="one-accordion-item-3">
                  <h6 class="mb-0">
                    <a href="#" class="btn collapsed" data-bs-toggle="collapse" data-bs-target="question${index}" aria-expanded="false" aria-controls="collapse-one-accordion-item-3">
                      ${val.faq_qustion}
                    </a>
                  </h6>
                </div>
                <div id="question${index}" class="collapse" aria-labelledby="one-accordion-item-3" data-bs-parent="#accordion-item-3">
                  <div class="card-body">
                    <p>${val.faq_ans}</p>
                  </div>
                </div>
              </div>
                     `;
                        faq_list.append(list)
                    });
                    handleSuccess(totalRequests);
                },
            });
        }

        function downloadList() {
            $.ajax({
                type: "GET",
                url: `${API_URL}/User/Manage-Downloads/List/1`,
                dataType: "json",
                success: function(response) {
                    let downloads = `

                <div id="downloadsContent">
                
                </div>

                `;
                    let list = response.data;
                    $.each(list, function(index, val) {
                        let images = `
                        <a href="${val.file_url}" target="_blank" " style="display: flex; justify-content: center;">
                         <img src="${val.img_url}" style="width: 100%"> </a>
                     <div style="display:flex; justify-content:center;"><strong> ${val.download_name} </strong> </div>
                     <br/>

                     `;
                        $('#serv_sidebar').append(images);
                    });

                }
            });
        }

        
    </script>
</body>

</html>