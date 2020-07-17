<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sailor Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 <!-- add by me -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>

  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>

  <style>
      #mapid { 
          width :100%;
          height : 658px;
          margin-top: 30px;
          }
      iframe{
          width :100%;
          height : 658px;
          margin-top: 30px;
          margin-bottom: 0px;
          -moz-box-shadow: 4px 4px 14px #000;
          -webkit-box-shadow: 4px 4px 14px #000;
          box-shadow: 4px 4px 14px #000;
          filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.2);

      }

  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="/">Student-ColoCo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="active"><a href="/">Accueil</a></li>

          <li class="drop-down"><a href="#">Nous</a>
            <ul>
              <li><a href="/about">Qu'est Nous</a></li>
              <li><a href="/team">Équipe</a></li>
            </ul>
          </li>
        </ul>

      </nav><!-- .nav-menu -->

      <a href="/admin" class="get-started-btn ml-auto">Connexion</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
      <div class="row">
        <div class="col-5">
          <iframe  src = "/listCards" >
            Sorry your browser does not support inline frames.
          </iframe>
        </div> 
        <div class="col-7"  id="mapid"></div>       
      </div>
  </section><!-- End Hero -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Student-ColoCo</h3>
              <p>BP 591, Boulevard Mohammed V<br>
                Beni-Mellal, Maroc<br><br>
                <strong>Phone:</strong> +121 611223344<br>
                <strong>Email:</strong> example@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div style="margin-left:23%"></div>

          <div class="col-lg-6 col-md-6 footer-newsletter">
            <h4>Contactez nous</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Student-ColoCo</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  @foreach($contacts as $offre)
  <form id="myForm" method="post">
    <input  type="hidden" id="latitude"  class="mail-contacts" name="to[]" value="{{$offre ->latitude}}">
    <input type="hidden" id="langitude" class="mail-contacts" name="to[]" value="{{ $offre ->langitude}}">
    <!--input type="hidden" id="demo1" name="hfName[]" value="{{ $offre ->  	latitude }}">
    <input type="hidden" id="demo"  value="{"-->
    </form>
  @endforeach

  <!--add by me-->
  <script>

    var locat = [
    @foreach ($contacts as $article)
        [ "{{ $article->prix }} Dh" ,{{ $article->latitude }}, {{ $article->langitude }} ], 
    @endforeach
    ];

    console.log(locat);

    const mymap = L.map('mapid').setView([32.3424, -6.3758], 15);
    var locations = [
    ['dk',32.326923, -6.363363]
    ];
    //show the map
    const attribution =
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const tiles = L.tileLayer(tileUrl, { attribution });
    tiles.addTo(mymap);

    for (var i = 0; i < locat.length; i++) {
        //here we have latitude and lantitude
    marker = new L.marker([locat[i][1], locat[i][2]])
        //here we have the description of the popup
        .bindPopup(locat[i][0])
        .addTo(mymap);
    }
    
</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>