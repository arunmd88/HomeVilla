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
        <li><a href="index.php#customer service">CUSTOMER SERVICE</a></li>
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
  <input type="text" placeholder="Search.." name="location">
  <button type="submit"name="save"><i class="fa fa-search"></i></button>
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

<!--Properties listing-->
		<div class="container">
		<div id="recommendehouses_buy">
		<h4>Recommended Houses</h4>
		<div class="row" id="display_properties">
		<div class="col-sm-3">
		<img src="images/buy1.jpg" width="200px" height="200px">
		</div>
		<div class="col-sm-9">
		<ul class="house_properties">
		<li>Aparment:3BHK</li>
		<li>Price:37L</li>
		<li>Area:100Sq.Yards</li>
		<li>Status:Available</li>
		<li>Description:Builder floor available on sale.</li>
		</ul>
		</div>
		</div>
        <br>
        <div class="row" id="display_properties">
		<div class="col-sm-3">
		<img src="images/buy2.jpg" width="200px" height="200px">
		</div>
		<div class="col-sm-9">
		<ul class="house_properties">
		<li>Aparment:2BHK</li>
		<li>Price:86.5L</li>
		<li>Area:1444Sq. Ft.</li>
		<li>Status:Available</li>
		<li>Description:Built in residential development godrej properties.</li>
		</ul>
		</div>
		</div>
        <br>
        <div class="row" id="display_properties">
		<div class="col-sm-3">
		<img src="images/buy3.jpg" width="200px" height="200px">
		</div>
		<div class="col-sm-9">
		<ul class="house_properties">
		<li>Aparment:3BHK</li>
		<li>Price:59.5L</li>
		<li>Area:1350Sq. Ft.</li>
		<li>Status:Available</li>
		<li>Description:This property is 3BHK flat in tower J.</li>
		</ul>
		</div>
		</div>
		</div>
		</div>
        <br>
		<!--Properties listing-->
		
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
