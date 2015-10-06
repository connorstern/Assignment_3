<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Beeds</title>
<link href="CSS/stylesheet.css" rel="stylesheet" type="text/css">
<style>

<style>
body#home #navhome, body#about #navabout, body#photography #navphotography, body#websites #navwebsites, body#contact #navcontact, body#resume #navresume {
	color:#941512;
}

* {margin: 0; padding: 0;}

#lightbox {
	float:left;
	width:70%;
	margin-left:7%;
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
}

/*Image titles*/
#lightbox .image_title {
	width: 260px; height: 252px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	margin-top:7%;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
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
</head>

<body>
<div id="background">
<div id="logo">
<a href="index.php"><img src="Images/kelly logo gold.png" alt="logo">
</div>
<div id="underline">
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Jewelry <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="bracelets/bracelets.php">Bracelets</a></li>
                    <li><a href="necklaces/necklaces.php">Necklaces</a></li>
                    <li><a href="earrings/earrings.php">Earrings</a></li>
                    <li><a href="beeds.php">Beeds</a></li>
                </ul>
            </li>
            <li><a href="about.php">Our Story</a></li>
            <li class="current-item"><a href="#">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</div>
</div>
<div id="content">
<h1>Beeds</h1>
<div id="content">
<div id="pictures">
<div id="lightbox">
<ul>
    	<li>
			<img src="Images/bracelet1.png"/>
			<div class="image_title">
				<h5 class="title">$40.00</h5>
			</div>
		</li>
 
		<li>
			<img src="Images/bracelet1.png"/>
			<div class="image_title">
				<h5 class="title">$40</h5>
			</div>
		</li>
		<li>
			<img src="Images/bracelet1.png">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        <li>
			<img src="Images/bracelet1.png">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        <li>
			<img src="Images/bracelet1.png"/>
			<div class="image_title">
				<h5 class="title">Walking Up</h5>
			</div>
		</li>
 
		<li>
			<img src="Images/bracelet1.png"/>
			<div class="image_title">
				<h5 class="title">Looking Down</h5>
			</div>
		</li>
		<li>
			<img src="Images/bracelet1.png">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        <li>
			<img src="Images/bracelet1.png">
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        <li>
			<img src="Images/bracelet1.png"/>
			<div class="image_title">
				<h5 class="title">Walking Up</h5>
			</div>
		</li>
        </ul>
        </div>
</div>
<div id="sidenav">
<div id="sidenavtitle">
<h4>Colors</h4>
</div>
<a class="blue" href="Photography Pages/reservoir.php"><h3>Blue</h3></a>
<a class="green" href="Photography Pages/aquarium.php"><h3>Green</h3></a>
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
 
        

</body>
</html>