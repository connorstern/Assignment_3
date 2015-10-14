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
@media (min-width: 300px) and (max-width: 739px) {
	#lightbox ul li {
	float: left;
	padding-right:5%;
	list-style-type: none;
	position: relative;
	cursor: pointer;
	width:70%;
	height:70%;
	margin-right:20%;
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
	width: 192px; height: 252px;
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
	width: 270px; height: 265px;
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
@media (min-width: 991px) and (max-width: 1090px) {
.well-lg {
	margin-top:1%;
	margin-left:5%;
	width:90%;
height:500px;
background-color:#FFFFFF;	
} }
@media (min-width: 740px) and (max-width: 990px) {
.well-lg {
	margin-top:1%;
	margin-left:5%;
	width:90%;
height:500px;
background-color:#FFFFFF;	
} }
@media (min-width: 300px) and (max-width: 739px) {
.well-lg {
	margin-top:1%;
	margin-left:5%;
	width:90%;
height:500px;
background-color:#FFFFFF;	
} }
#background2 {
  width: 80%;
  height: 1150px;
  background-color: #F4F4F4;
  text-align: center;
  margin-left: 10%;
  border-radius: 25px; }

@media (min-width: 975px) and (max-width: 1270px) {
  #background2 {
    width: 80%;
    height: 1000px;
    background-color: #F4F4F4;
    text-align: center;
    margin-left: 10%;
    border-radius: 25px; } }
@media (min-width: 740px) and (max-width: 990px) {
  #background2 {
    width: 80%;
    height: 1200px;
    background-color: #F4F4F4;
    text-align: center;
    margin-left: 10%;
    border-radius: 25px; } }
@media (min-width: 300px) and (max-width: 739px) {
  #background2 {
    width: 90%;
    height: 1100px;
    background-color: #F4F4F4;
    text-align: center;
    margin-left: 5%;
    border-radius: 25px; } }
@media (min-width: 500px) and (max-width: 974px) {
	.statement {
	width:100%;
	float:left;
	text-align:justify;
	margin-top:1%;
	margin-left:.6%;
	font-size:.7em;
	word-spacing:2px;
}
}
@media (min-width: 100px) and (max-width: 499px) {
	.statement {
	width:85%;
	float:left;
	text-align:justify;
	margin-top:1%;
	font-size:.53em;
	word-spacing:2px;
}
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>About</title>
 

    <!-- Custom styles for this template -->
    <link href="CSS/stylesheet.css" rel="stylesheet">
      <link href="CSS/bootstrap.css" rel="stylesheet">
      
  </head>

  <body>
  
      <div id="backcolor">
      
        
          <div id="background2">
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
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jewelry <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bracelets/bracelets.php">Bracelets</a></li>
            <li><a href="earrings/earrings.php">Earrings</a></li>
            <li><a href="necklaces/necklaces.php">Necklaces</a></li>
            
          </ul>
          <li class="active"><a href="about.php">Our Story</a></li>
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
        </li>
      </ul>
     
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="page-header">
  <h1>About Kelly</h1>
</div>
<div class="well well-lg">
<div id="kelly2">
<div id="kellytext2">
<p class="statement">Magic happens when the power of flame can turn a solid piece of glass into a substance that can be manipulated into a completely new form. It was this curiosity with the properties of glass, along with my bead fascination, that lead me to start creating my own lampworking beads. Lampworking beads are created using an oxygen and propane torch and glass rods. The rods are heated until the glass resembles honey. The molten glass is wrapped around a steel mandrel then shaped into the desired form. The beads are annealed in a kiln to slowly cool and “temper” the glass. To complete my beads, I saw, file, and fit each bead individually with sterling silver tubing.</p>
<br>
<p class="statement">Along with my love of glass, I also love clay. I have been teaching ceramics at a public high school for over fifteen years. Now I sculpt with a different type of malleable medium. To create my jewelry, I use a material called Precious Metal Clay, or PMC. PMC comes in silver, gold, copper, bronze, and nickel. One can sculpt PMC just like clay. Once a piece is carefully sculpted, a kiln is used to remove the binder leaving the design in solid metal. Because I find this medium as interesting and challenging to work with as glass, many of my designs include both materials. In addition, I use sterling silver findings and spacer beads in all my designs with the exception of the leather bracelets.</p>
<br>
<p class="statement">The subtle variations of colors on the surface of stones, the continuous movement and rhythm of water, and the infinite beauty of the night sky strongly inspire my hade-made jewelry. Textures, colors, and forms capture my attention and ultimately work their way into my original designs. As a small child, I remember holding a glass paperweight up close to my eyes and trying to imagine living among the swirls and bubbles in that seemingly liquid universe. Creating my own tiny worlds brings me great pleasure. As an art teacher, I try to impart to my students the importance of the creative spirit of man. I believe the craftsman serves the function of connecting the owner/viewer to the power and magic of beauty. My sincere hope is my glass worlds and jewelry will bring joy and beauty into your life.</p>
</div>
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