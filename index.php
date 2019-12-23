<!doctype html>
<html>
<head>
<title>Home Villa.com</title>
<link rel="icon" type="image/ico" href="logo/logo_icon.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap-3.4.0-dist/js/bootstrap.min.js"></script>
<link href="bootstrap-3.4.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="leaflet/leaflet.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/carousel.js"></script>
<link rel="stylesheet" href="vendors/linericon/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!--header-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" id="logo" href="index.php"><img src="logo/logo_web1.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#customer service">CUSTOMER SERVICE</a></li>
        <li><a href="buy.php">BUY</a></li>
        <li><a href="rent.php">RENT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--header-->

<!--banner-->
				<div class="container" id="banner">
            <div class="row" id="banner_image" style="background-image:url(images/orig.jpg)">
                <div class="col-sm-12">
                <div class="banner_content">
                    <div class="content">
                        <h2>Discover homes for you</h2>
                        <h4>Search real estate property records and more on HomeVilla.com®.</h4>
                    </div>
                    <!-- Search -->
                    <div id="search_form">
                    <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Buy</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Rent</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Villa</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <form class="example" method="post" action="search.php">
  <input type="text" placeholder="Search.." name="location">
  <button type="submit" name="save"><i class="fa fa-search"></i></button>
</form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <form class="example" method="post" action="search.php">
  <input type="text" placeholder="Search.."  name="location">
  <button type="submit" name="save"><i class="fa fa-search"></i></button>
</form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <form class="example" method="post" action="search.php">
  <input type="text" placeholder="Search.." name="location">
  <button type="submit" name="save"><i class="fa fa-search"></i></button>
</form>
                    </div>
                </div>
                </div>
                </div>
               </div>
              </div>
             </div>
        <!--banner-->

<!-- Container (Featured Properties) -->
<div class="container" id="slideshow" style="padding-top:50px;">
<h1 class="h1" style="text-align:center;">FEATURED PROPERTIES</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="images/85a1f081ef6f3e3a0f8dda1b407b3ba150c82e91.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Regent Villa</a></h4>
            <p>"Highly recommend, close to shopping and hotels."</p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="images/Best-Architectural-House-Designs-In-World-Inspiring.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Radison Blu</a></h4>
            <p>"An exclusive Portuguese-colonial style farmhouse."</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="images/5caba4f0ead462f4121c90f0f88d6edb.jpg">
           <div class="carousel-caption">
            <h4><a href="#">CP Villa</a></h4>
            <p>"The hospitality, service and the place is just unmatched."</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="images/artsfon.com-76161.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Villa 33</a></h4>
            <p>With garden views, luxurious abode amidst abundant green has accommodation with a kitchen located in Dwarka.</p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="images/Los-Olivos-Nueva-Andalucia-Marbella-new-modern-villa-project_Realista-Quality-properties-Marbella_villa-17.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Anand Niwas</a></h4>
            <p>The villas are elegantly constructed. The ambience was very serene and refreshingly green. The pool is well maintained.</p>
          </div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active";"><h4>Gurgaon</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Noida</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>Rohini</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Dwarka</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>Faridabad</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>
<!--Container(Featured Properties)-->

<!-- Container (Service Section) -->
	
	<section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<center><h2>SERVICES</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p></center>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-user"></i>Expert Technicians</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-license"></i>Professional Service</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-phone"></i>Great Support</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-rocket"></i>Technical Skills</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-diamond"></i>Highly Recomended</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Positive Reviews</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
	
	<!-- Container (Service Section) -->

<!-- Container (Contact Section) -->
<div class="contact-form">
    <div class="container" id="customer service" name="customer service">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Customer Service <br>
                    <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form class="form-h" role="form" action="sendmessage.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" name="subject" required>
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Buy/Sell Property</option>
                                <option value="product">Complaints</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" name="message" cols="25" required
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
        <div id="map">
        <script type="text/javascript" src="leaflet/leaflet.js"></script>
<script>
var map = L.map('map').setView([28.6315, 77.2167], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([28.6315, 77.2167]).addTo(map)
    .bindPopup('<p style:"text-align:centre;">HOUSE VILLA<br> Indira Chowk</p>')
    .openPopup();
</script>
</div>
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>House Villa, Inc.</strong><br>
                Shop No 4, 55, Indira Chowk<br>
                New Delhi-400001<br>
                <abbr title="Phone">
                    P:</abbr>
                0222-2644602
            </address>
            <address>
                <strong>Vimal Gupta</strong><br>
                <a href="mailto:#">hr@housevilla.biz</a>
            </address>
            </form>
        </div>
    </div>
</div>
<!--Container(Contact Section)-->

<!--footer-->
<footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
          
           <div class="col-md-6 col-sm-12 col-xs-12">
           <h3 style="padding-left:30px;">Quick Links</h3>
              <div class="aa-footer-left">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
            <h3 style="text-align:right; padding-right:35px;">Social Media</h3>
              <div class="aa-footer-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
                       
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
      <!--footer-->
      
      <!--information-->
       <div class="container" id="info">
      <div class="row">
        <div class="col-md-12">
          <div class="info-area">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="info-centre">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-523-3564
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@homevilla.com
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
     <!--information-->
      
</body>
</html>
