<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Post | Aqpa Indonesia</title>
  <meta name="description" content="Distributor sealing & insulation (gland Packing, Removable Thermal Insulation, Expansion Joint, spiral wound gasket, PTFE Line pipe & fitting), mechanical equipment, electrical equipment, plumbing, piping system and steel structure">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'template/imperial/img/favicon.png'?>">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="<?php echo base_url().'template/imperial/css/style.css'?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300i,400,400i,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/slicknav.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/bootstrap-theme.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/owl.carousel.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/owl.theme.default.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/animate.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/magnific-popup.css'?>">

  <!-- Xman CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/normalize.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/style.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/responsive.css'?>">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.css'>
  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

  <!-- news template -->

  <link rel="stylesheet" href="<?php echo base_url().'assets/news/css/owl.carousel.css'?>" >
  <link rel="stylesheet" href="<?php echo base_url().'assets/news/css/owl.theme.css'?>" >



  <?php 
  function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
  }
  ?>
</head>
<body>
  <!-- Header Area -->
  <header id="header" style="border-bottom: #0373fc 2 solid;">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="<?php echo base_url().'template/imperial/img/aqpamenu.png'?>" alt="" title="" /></img></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?php echo base_url().''?>">HOME</a></li>
          <li class="menu-has-children" ><a href="#">PRODUCTS</a>
            <ul>
              <li class="menu-has-children" ><a href="#">GTE PRODUCTS</a>
                <ul>
                  <li><a href="<?php echo base_url().'removable_thermal_insulation'?>">Removable Thermal Insulation</a></li>
                  <li><a href="<?php echo base_url().'expansion_joint'?>">Expansion Joint</a></li>
                  <li><a href="<?php echo base_url().'gland_packing'?>">Gland Packing</a></li>
                  <li><a href="<?php echo base_url().'spiral_wound_gasket'?>">Spiral Wound Gasket</a></li>
                  <li><a href="<?php echo base_url().'graphite_ring'?>">Graphite Ring/Molded</a></li>
                  <li><a href="<?php echo base_url().'line_pipe_and_fitting'?>">Line Pipe & Fitting</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url().'mechanical_electrical_plumbing'?>">MEP Division</a></li>
              <li><a href="<?php echo base_url().'pipe_and_steel'?>">Steel Division</a></li>
            </ul>

          </li>
          <li class="menu-active"><a href="<?php echo base_url().'berita'?>">POST</a></li>
          <li><a href="<?php echo base_url().'galeri'?>">GALLERY</a></li>
          <li><a href="<?php echo base_url().'kontak'?>">CONTACT US</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End Header Area -->

  <!-- Slider Area -->
  <section id="slider" class="slider2">
    <div class="flexslider ">
      <ul class="slides">
        <li>
          <section id="slider" class="slider2" style="background-image:url('<?php echo base_url().'template/xman/img/slider1.png'?>')">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="text">
                    <h1><strong>PT AQPA</strong> INDONESIA</h1>
                    <p>Was establish on early 2012. In very short time, the company has shown a remarkable growth in term of sales turn over. This is the evident of customer trust to our company as we only work together with best product. </p>
                    <div class="button">
                      <a href="" class="btn primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase"></i>GTE Products &nbsp;&nbsp; <span class="caret"></span></a>
                      <a href="<?php echo base_url().'kontak'?>" class="btn"><i class="fa fa-phone"></i>Contact Us</a>
                      <ul style="margin-left: 15px" class="dropdown-menu" id="dropdown">
                        <li><a href="<?php echo base_url().'removable_thermal_insulation'?>">Removable Thermal Insulation</a></li>
                        <li><a href="<?php echo base_url().'expansion_joint'?>">Expansion Joint</a></li>
                        <li><a href="<?php echo base_url().'gland_packing'?>">Gland Packing</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'spiral_wound_gasket'?>">Spiral Wound Gasket</a></li>
                        <li><a href="<?php echo base_url().'graphite_ring'?>">Graphite Ring</a></li>
                        <li><a href="<?php echo base_url().'line_pipe_and_fitting'?>">Line Pipe & Fitting</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </li>
      </ul>
    </div>
  </section>
  <!--/ End Slider Area -->

  <!-- Start about -->
  <section id="skill" class="post section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 style="color: black;">List All <span style="color: white">News</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $no=0;
        foreach ($data->result_array() as $i) :
         $no++;
         $tulisan_id=$i['tulisan_id'];
         $tulisan_judul=$i['tulisan_judul'];
         $tulisan_isi=$i['tulisan_isi'];
         $tulisan_tanggal=$i['tanggal'];
         $tulisan_bulan=$i['bulan'];
         $tulisan_tahun=$i['tahun'];
         $tulisan_author=$i['tulisan_author'];
         $tulisan_gambar=$i['tulisan_gambar'];
         $tulisan_views=$i['tulisan_views'];
         $kategori_id=$i['tulisan_kategori_id'];
         $kategori_nama=$i['tulisan_kategori_nama'];

         ?>

         <div class="col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
          <!-- single-news -->
          <div class="single-news">
            <div class="news-head">
              <div class="news-date">
                <span><?php echo $tulisan_tanggal;?></span> 
                <span><?php echo $tulisan_bulan;?></span> 
                <span><?php echo $tulisan_tahun;?></span> 
              </div>
              <img src="<?php echo base_url().'assets/images/'.$tulisan_gambar;?>" alt="#">
              <div class="news-view"> 
                <span><i class="fa fa-eye"></i><?php echo $tulisan_views;?></span>
              </div>
            </div>
            <div class="news-body">
              <h2><a href="#"><?php echo $tulisan_judul;?></a></h2>
              <p><?php echo limit_words($tulisan_isi,10).'...'?></p>
              <a href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      <?php endforeach;?>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12 pginaiton">
        <!-- Start Pagination -->
        <ul class=" ">
          <li><?php echo $page;?></li>
        </ul>
        <!--/ End Pagination -->
      </div>
    </div>
  </section>
  <!--/ End about --> 

  <!-- Footer -->
  <section id="newslatter" class="newslatter section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="news-text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <h4>don't miss out</h4>
            <h2>sign up for updates</h2>
            <p>Get all latest news and our exclusive content straight to your email inbox</p>
          </div>
          <form class="form" action="<?php echo base_url().'kontak/kirim_email'?>" method="post">
            <div class="form wow shake" data-wow-duration="0.8s" data-wow-delay="0.5s">
              <input name="xemail" type="email" placeholder="Enter your email" required>
              <button type="text" value="send">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="footer section">
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 style="color: #b0b0b0; text-align: center; margin-top: 0px">Copyright © 2019 Aqpa Indonesia</h5>
          </div>
          <div class="col-md-4">
            <img style="width: 35%" class="center" src="<?php echo base_url().'template/imperial/img/authorized-gte2.png'?>" alt="">
          </div>
          <div class="col-md-4">
            <h5 style="color: #b0b0b0; text-align: center; "> aqpa.id -  All Rights Reserved </h5>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--/ End Footer -->


  <script src="<?php echo base_url().'template/xman/js/jquery.min.js'?>">  </script>
  <script src="<?php echo base_url().'template/xman/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/jquery.nav.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/jquery.slicknav.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/easing.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/jquery-appear.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/jquery.scrollUp.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/owl.carousel.min.js'?>"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="<?php echo base_url().'template/xman/js/jquery.counterup.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/wow.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/jquery.magnific-popup.min.js'?>"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
  <script type="text/javascript" src="<?php echo base_url().'template/xman/js/gmaps.min.js'?>"></script>
  <script src="<?php echo base_url().'template/xman/js/main.js'?>"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.js'></script>
  <script  src="<?php echo base_url().'template/xman/css/js/index.js'?>"></script>


  <!-- news script -->
  <script src="assets/news/js/jquery-2.1.1.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url().'template/imperial/lib/superfish/superfish.min.js'?>"></script>
  <script src="<?php echo base_url().'template/imperial/lib/morphext/morphext.min.js'?>"></script>
  <script src="<?php echo base_url().'template/imperial/lib/stickyjs/sticky.js'?>"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url().'template/imperial/js/custom.js'?>"></script>




</body>
</html>
