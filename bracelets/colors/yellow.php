<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bracelets</title>
<link href="../CSS/stylesheet.css" rel="stylesheet" type="text/css">
<style>

<style>
body#home #navhome, body#about #navabout, body#photography #navphotography, body#websites #navwebsites, body#contact #navcontact, body#resume #navresume {
	color:#941512;
}

* {margin: 0; padding: 0;}

#lightbox {
	float:left;
	width:100%;
	margin-left:4%;
	
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
	padding-right:14px;
	padding-top:2%;
	list-style-type: none;
	position: relative;
	cursor: pointer;
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
	width: 260px; height: 256px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	margin-top:9%;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
	border-radius:25px;
}
#lightbox .title {
	color: #fff;
	background: rgba(0, 0, 0, 0.5);
	text-transform: uppercase;
	font-size: 2em;
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
	line-height: 100px;
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
</head>

<body>
<!-- Custom styles for this template -->
    <link href="../../CSS/stylesheet.css" rel="stylesheet">
      <link href="../../CSS/bootstrap.css" rel="stylesheet">
  </head>

  <body>
      <div id="backcolor">
        
          <div id="background">
<div id="logo">
    <a href="default.html"><img src="../../Images/kelly%20logo%20gold.png" alt="logo"></a>
</div>
<script src="../../js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>
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
        <li><a href="../../index.php">Home <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jewelry <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beeds</a></li>
            <li class="active"><a href="bracelets.php">Bracelets</a></li>
            <li><a href="earrings/earrings.php">Earrings</a></li>
            <li><a href="necklaces/necklaces.php">Necklaces</a></li>
            
          </ul>
          <li><a href="about.php">Our Story</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </li>
      </ul>
     
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1>Yellow Bracelets </h1>

<div id="content">
<div class="row">
  <div class="col-md-8"><div id="lightbox">
<ul>
    	<li>
			<a href="Checkout/bracelet1.php"><img src="../../Images/Bracelets/6.png"/>
			<div class="image_title">
				<h5 class="title">$40.00</h5>
			</div>
		</li>
        
 
		<li>
			<img src="../../Images/Bracelets/20.png"/>
			<div class="image_title">
				<h5 class="title">$40.00</h5>
			</div>
		</li>
		<li>
			<img src="../../Images/Bracelets/31.png">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        <li>
			<img src="../../Images/Bracelets/32.png">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
		</div>
        </li>
          
        </ul>
        </div></div>
  <div class="col-md-4"><div id="sidenav">
  <div class="colors">
  <a href="../bracelets.php"><h3>Colors</h3>
  </div>
   <a class="black" href="black.php"><h3>Black</h3></a>
  <a class="blue" href="blue.php"><h3>Blue</h3></a>
  <a class="brown" href="brown.php"><h3>Brown</h3></a>
  <a class="green" href="green.php"><h3>Green</h3></a>
  <a class="red" href="red.php"><h3>Red</h3></a>
  <a class="yellow" href="yellow.php"><h3>Yellow</h3></a>
</div>
</div>
</div>

</div>

</div>
<div id="footer">
<h3>Connect with us</h3>
<div id="icons">
<img src="../../Images/icons/twitter.png" alt="twitter">
<img src="../../Images/icons/facebook.png" alt="facebook">
<img src="../../Images/icons/instagram.png" alt="instagram">
<div id="designed">
Designed by ©Connor Stern
</div>
</div>
</div>
 
        
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>
