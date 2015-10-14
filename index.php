<!DOCTYPE html>

<html lang="en"><head>
      <style>
body#home #navhome, body#about #navabout, body#photography #navphotography, body#websites #navwebsites, body#contact #navcontact, body#resume #navresume {
	color:#941512;
}

* {margin: 0; padding: 0;}

#lightbox {
	float:left;
	width:100%;
	margin-left:5.5%;
	margin-top:1%;
}
@media (min-width: 975px) and (max-width: 1270px) {
	#lightbox {
	float:left;
	width:100%;
	margin-left:1%;
	margin-top:1%;
}
}
@media (min-width: 740px) and (max-width: 974px) {
	#lightbox {
	float:left;
	width:100%;
	margin-left:4%;
	margin-top:1%;
}
}
@media (min-width: 300px) and (max-width: 739px) {
	#lightbox {
	float:left;
	width:100%;
	margin-left:18%;
	margin-top:1%;
}
}
#lightbox h1 {
	text-transform: uppercase;
	text-align: center;
	padding: 10px 0;
	margin: 20px 0;
	color: white;
	font-size: 24px;
	background: rgba(255, 255, 255, 0.1);
	border-left: 2px solid rgba(255, 255, 255, 0.65);
	border-right: 2px solid rgba(255, 255, 255, 0.65);
}
#lightbox ul {
	overflow: hidden;
}
/*Image styles*/
#lightbox ul li {
	float: left;
	padding-right:5%;
	list-style-type: none;
	position: relative;
	cursor: pointer;
}
@media (min-width: 740px) and (max-width: 974px) {
#lightbox ul li {
	float: left;
	padding-right:5%;
	list-style-type: none;
	position: relative;
	cursor: pointer;
	width:30%;
	height:30%;
	margin-right:3%;
}
}
@media (min-width: 500px) and (max-width: 739px) {
	#lightbox ul li {
	float: left;
	padding-right:5%;
	list-style-type: none;
	position: relative;
	cursor: pointer;
	width:50%;
	height:50%;
	margin-right:15%;
	margin-top:8%;
}
}
@media (min-width: 300px) and (max-width: 499px) {
	#lightbox ul li {
	float: left;
	padding-right:5%;
	list-style-type: none;
	position: relative;
	cursor: pointer;
	width:65%;
	height:70%;
	margin-top:8%;
}
}
/*No right margin for images in the 2nd column*/
#lightbox ul li:nth-child(even) {
	margin-right: 0;
}
#lightbox ul li img {
	display: block;
	border-radius:25px;
}

/*Image titles*/
#lightbox .image_title {
	width: 260px; height: 252px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
	border-radius:25px;
}
@media (min-width: 740px) and (max-width: 974px) {
#lightbox .image_title {
	width: 200px; height: 252px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
	border-radius:25px;
}
}
@media (min-width: 300px) and (max-width: 739px) {
#lightbox .image_title {
	width: 225px; height: 225px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
	border-radius:25px;
}
}
#lightbox .title {
	color: #fff;
	background: rgba(0, 0, 0, 0.5);
	text-transform: uppercase;
	font-size: 14px;
	text-align: center;
	/*Vertical center align*/
	display: table-cell;
	vertical-align: middle;
	/*Hover effect - default state*/
	transform: scale(0.2);
	transition: all 0.25s;
	margin-left:80px;
	margin-top:110px;
}
/*Zoom icon over each title using iconfont and pseudo elements*/
#lightbox .title::before {
	font-family: websymbols;
	font-size: 24px;
	color: #fff;
	opacity: 0.5;
	display: block;
	line-height: 36px;
}
/*Hover states*/
#lightbox li:hover {
	box-shadow: inset 0 0 10px 15px rgba(255,255,255, 0.3);
}
#lightbox li:hover .image_title {
	opacity: 1;
}
#lightbox li:hover .title {
	transform: scale(1);
}

/*Lets change the iconfont to websymbols since entypo has some issues with rendering on windows*/
@font-face {
	font-family: websymbols;
	src: url("http://thecodeplayer.com/uploads/fonts/websymbols.eot");
	src: url('http://thecodeplayer.com/uploads/fonts/websymbols.eot?#iefix') format('embedded-opentype'),
     url('http://thecodeplayer.com/uploads/fonts/websymbols.woff') format('woff'),
     url('http://thecodeplayer.com/uploads/fonts/websymbols.ttf') format('truetype'),
	 url('http://thecodeplayer.com/uploads/fonts/websymbols.svg#WebSymbolsRegular') format('svg');
}



/*Lightbox element style*/
.lb_backdrop {
	background: rgba(0, 0, 0, 0.9);
	position: fixed;
	top: 0; left: 0; right: 0; bottom: 0;
}
/*The canvas contains the larger image*/
 .lb_canvas {
	background: white;
	width: 50px; height: 50px;
	position: fixed;
	top: 0; left: 0; /*Will be centered later by Jquery*/
	box-shadow: 0 0 20px 5px black;
	padding: 10px;
}

/*A separate class for loading GIF, for easy Jquery handling*/
.lb_canvas.loading {
	background: white url("http://thecodeplayer.com/uploads/media/loading.gif") center center no-repeat;
}
/*Lightbox Controls*/
.lb_controls {
	width: 400px; 
	background: rgba(0, 0, 0, 0.75);
	position: fixed;
	bottom: 10px;
	color: white;
	/*To horizontally center it*/
	left: 0; right: 0; margin: 0 auto; 
}
.lb_controls span {
	line-height: 30px;
	height: 30px;
}
.lb_controls span.inactive {
	opacity: 0.25;
}
.lb_previous, .lb_next {
	position: absolute;
	top: 0;
	padding: 5px 12px;
	font-family: websymbols;
	font-size: 14px;
	background: black;
	cursor: pointer;
}
.lb_previous {
	left: 0;
	border-right: 1px solid rgba(255, 255, 255, 0.1);
}
.lb_next {
	right: 0;
	border-left: 1px solid rgba(255, 255, 255, 0.1);
}
.lb_title {
	text-align: center;
	display: block;
	font-size: 14px;
	text-transform: uppercase;
	padding: 5px 0;
	font-weight: bold;
}

</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Home</title>
 

    <!-- Custom styles for this template -->
    <link href="CSS/stylesheet.css" rel="stylesheet">
      <link href="CSS/bootstrap.css" rel="stylesheet">
      
  </head>

  <body>
      <div id="backcolor">
        
          <div id="background">
<div id="logo">
    <a href="default.html"><img src="Images/kelly%20logo%20gold.png" alt="logo"></a>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jewelry <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bracelets/bracelets.php">Bracelets</a></li>
            <li><a href="earrings/earrings.php">Earrings</a></li>
            <li><a href="necklaces/necklaces.php">Necklaces</a></li>
            
          </ul>
          <li><a href="about.php">Our Story</a></li>
          <li><a href="product.php">Sales</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php" data-toggle="modal" data-target="#login-modal">Login</a></li>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
        </li>
      </ul>
     
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="content">
<div id="slideshow">
<script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>
<div id="section">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Images/slideshow/jewelry1.png" width="100%" alt="1">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="Images/slideshow/jewelry2.png" width="100%" alt="2">
      <div class="carousel-caption">
      
      </div>
    </div>
     <div class="item">
      <img src="Images/slideshow/jewelry3.png" width="100%" alt="3">
      <div class="carousel-caption">
      
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</div>
<div id="popular">
<h1>Most Popular </h1>
</div>
<div id="lightbox">
<ul>
    <div class="row">
  <div class="col-md-4">
        <li>
			<img src="Images/Bracelets/1.png" width="100%" height="100%"/>
			<div class="image_title">
				<h5 class="title">Walking Up</h5>
			</div>
		</li>
        </div>
  <div class="col-md-4">
        <li>
			<img src="Images/Earrings/26.png" width="100%" height="100%"/>
			<div class="image_title">
				<h5 class="title">Looking Down</h5>
			</div>
		</li>
        </div>
  <div class="col-md-4">
        <li>
			<img src="Images/Earrings/7.png" width="100%" height="100%">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        </div>
</div>
    	
 
        </ul>
        </div>

<div id="welcome">
<h2>Welcome</h2>
<p class="welcome">Welcome to my website! Terra Luna specializes in one of-a-kind lampworking beads and PMC jewelry inspired by the beauty of nature. Terra Luna is a working studio and a philosophy. My pieces are at once rooted to objects found on earth, such as, seed pods, shells, and flowers, but my work also tries to express the sense of mystery and luminosity of the moon.</p>
</div>
</div>
</div>
<div id="footer">
<h3>Connect with us</h3>
<div id="icons">
<img src="Images/icons/twitter.png" alt="twitter">
<img src="Images/icons/facebook.png" alt="facebook">
<img src="Images/icons/instagram.png" alt="instagram">
<div id="designed">
Designed by ©Connor Stern
</div>
</div>
</div>
 
              
            


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>