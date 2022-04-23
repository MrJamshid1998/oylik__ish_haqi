<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eOylik.uz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logo.jpg" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">
<?php
if(isset($_POST['login']) && isset($_POST['pas'])){
    if($_POST['login'] != "admin" && $_POST['pas'] != "12345"){
        header("Location:index.html?error=xato");
    }
}
?>
    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                    <h1>
                                        <a href="index.html"><img src="img/logo.jpg" style="width:60px; height:60px; border-radius:50%;" /></a>
                                    </h1>
                                    <!-- Uncomment below if you prefer to use an image logo -->
                                    <!-- <img src="img/logo.png" alt="" title=""> -->
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active" id="menu1">
                                        <a class="page-scroll" href="#">Ishchi qo'shish</a>
                                    </li>
                                    <li id="menu2">
                                        <a class="page-scroll" href="#">Oylikni hisoblash</a>
                                    </li>
                                    <li id="menu3">
                                        <a class="page-scroll" href="#">Oyliklar haqida hisobot</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- ishchi qo`shish bo`limi -->
    <div id="ish_qush">
        <!-- Start Bottom Header -->
        <div class="header-bg page-area" style="background-image:url(img/slider/b2.jpg);">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                    <h1 class="title2">Ishchi qo`shish. </h1>
                                </div>
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <h2 class="title3">Ishchini kiriting.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form contact-form">
                        <form action="ishchi_qushish.php" method="POST" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="name">FIO:</label>
                                    <input type="text" name="fio" class="form-control" id="name" placeholder="FIO" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="email">INN raqami:</label>
                                    <input type="number" class="form-control" name="inn" id="email" placeholder="INN raqami" />
                                </div>
                                <div class="form-group">
                                    <label for="ish">Ish joyi:</label>
                                    <textarea id="ish" class="form-control" name="ish_joyi" rows="3" placeholder="Ish joyi"></textarea>
                                </div>
                                <div class="text-center"><button type="submit" name="ishchi">Ishchini saqlash</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- oylik ish haqini hisoblash -->
    <div id="oy_his" style="display:none;">
        <!-- Start Bottom Header -->
        <div class="header-bg page-area" style="background-image:url(img/slider/5.jpg);">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                    <h1 class="title2">Oylikni hisoblash. </h1>
                                </div>
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <h2 class="title3">Oylikni hisoblash uchun zarur malumotlarni kiriting.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form contact-form">
                        <form action="oylik.php" method="POST" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="name">Ishchini tanlang:</label>
                                    <select name="ishchi_id" id="name" class="form-control">  
                                    <?php
                                        require_once("db.php");
                                        $result = mysqli_query($link,"SELECT * FROM ishchilar");
                                        while ($row = mysqli_fetch_array($result)){
                                            echo("<option value='$row[0]'>$row[1]</option>");
                                        }
                                    ?>
                                    </select>    
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="ishs">Ish stafkasi:</label>
                                    <select class="form-control" name="ish_stafka" id="ishs">
                                        <option value="0.5">0.5</option>
                                        <option value="0.75">0.75</option>
                                        <option value="1.0">1.0</option>
                                        <option value="1.5">1.5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ok">Okladi:</label>
                                    <input type="number" id="ok" class="form-control" name="oklad" placeholder="Okladini kiriting." />
                                </div>
                                <div class="form-group">
                                    <label for="ishk">Ishga kelgan kuni:</label>
                                    <input type="number" id="ishk" class="form-control" name="ish_kuni" placeholder="Ish kunini kiriting. 1-30." />
                                </div>
                                <div class="form-group">
                                    <label for="sana">Sana:</label>
                                    <input type="date" id="sana" class="form-control" name="oylik_date" />
                                </div>
                                
                                <div class="text-center"><button type="submit">Oylik ma'lumotlarini saqlash</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
<!-- Oylik hisobot bo`limi -->

    <div id="oylik_hisobot" style="display: none;">
    <!-- Start Bottom Header -->
  <div class="header-bg page-area" style="background-image:url(img/slider/1.jpg);">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Oylik hisobotlar.</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Hisobot.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Ishchi</th>
                <th scope="col">INN</th>
                <th scope="col">Ish joyi</th>
                <th scope="col">Ish stafkasi</th>
                <th scope="col">Oklad</th>
                <th scope="col">Daromad solig'i</th>
                <th scope="col">Kasaba uyushmasi</th>
                <th scope="col">Pensiya (INPS)</th>
                <th scope="col">Oylik</th>
                <th scope="col">Ishlagan kuni</th>
                <th scope="col">Sana</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $result = mysqli_query($link, "SELECT oylik_hisobot.id, ishchilar.fio, ishchilar.inn, ishchilar.ish_joyi, oylik_hisobot.ish_stafka, oylik_hisobot.oklad, oylik_hisobot.podo_nalog, oylik_hisobot.profsoyuz, oylik_hisobot.inps, oylik_hisobot.oylik, oylik_hisobot.ish_kuni, oylik_hisobot.oylik_date
                  FROM oylik_hisobot, ishchilar
                  WHERE oylik_hisobot.ishchi_id=ishchilar.id 
                  ORDER BY oylik_hisobot.id DESC");
                while ($row = mysqli_fetch_array($result)){
                  echo("<tr>"); 
                  echo("<th>$row[0]</th>");
                  echo("<td>$row[1]</td>");
                  echo("<td>$row[2]</td>");
                  echo("<td>$row[3]</td>");
                  echo("<td>$row[4]</td>");
                  echo("<td>$row[5]</td>");
                  echo("<td>$row[6]</td>");
                  echo("<td>$row[7]</td>");
                  echo("<td>$row[8]</td>");
                  echo("<td>$row[9]</td>");
                  echo("<td>$row[10]</td>");
                  echo("<td>$row[11]</td>");
                  echo("</tr>");
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

</div>
    
    <div class="clearfix"></div>

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h2>
                                        <a href="index.html"><img src="img/logo.jpg" style="width:60px; height:60px; border-radius:50%;" /></a>
                                    </h2>
                                </div>

                                <p>Shu bilan birga, siz ishlayotgan kompaniya tizimimizga ulangan bo'lishi kerak.</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="facebook.com"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="twitter.com"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="google.com"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="pinterest.com"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-offset-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Ma'lumot:</h4>
                                <p>
                                    Xabar orqali ish haqi haqida ma'lumot olish uchun USSD so'rov yuborish kifoya.
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +99894 613 01 11</p>
                                    <p><span>Email:</span> Email@mail.ru</p>
                                    <p><span>Ish soati:</span> 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <iframe src="https://oylik.uz/" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Dasturchi <strong>Yakubov Mirshod</strong>. Barcha xizmatlar litsenziyalangan.
                            </p>
                        </div>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
                            Dizainda <a href="https://bootstrapmade.com/">BootstrapMade</a> dan foydalanildi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script type="text/javascript">
        var menu1 = document.getElementById("menu1");
        var menu2 = document.getElementById("menu2");
        var menu3 = document.getElementById("menu3");
        
        var ish_qush = document.getElementById("ish_qush");
        var oy_his = document.getElementById("oy_his");
        var oylik_hisobot = document.getElementById("oylik_hisobot");
        
        menu1.addEventListener("click", function() {
            oy_his.style.display = "none";
            oylik_hisobot.style.display = "none";
            ish_qush.style.display = "block";
        });
        menu2.addEventListener("click", function() {
            ish_qush.style.display = "none";
            oy_his.style.display = "block";
            oylik_hisobot.style.display = "none";
        });
        menu3.addEventListener("click", function() {
            ish_qush.style.display = "none";
            oy_his.style.display = "none";
            oylik_hisobot.style.display = "block";
        });
        
    </script>
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="js/main.js"></script>
</body>

</html>