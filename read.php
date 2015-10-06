<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<link href="CSS/stylesheet.css" rel="stylesheet" type="text/css">

<style>
body#home #navhome, body#about #navabout, body#photography #navphotography, body#websites #navwebsites, body#contact #navcontact, body#resume #navresume {
	color:#941512;
}

* {margin: 0; padding: 0;}

#lightbox {
	float:left;
	width:100%;
	margin-left:11.5%;
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
	padding-right:13%;
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
	width: 320px; height: 220px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
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

#background2 {
	width:1300px;
	height:900px;
	background-color:#F4F4F4;
	text-align:center;
	margin-left:9%;
	margin-top:1.5%;
	border-radius:25px;
}
#kelly2 {
	width:100%;
	margin-left:5%;
}
#whitebackground2 {
	width:900px;
	height:650px;
	background-color:#FFFFFF;
	margin-left:15%;
	margin-top:1%;
	border-radius:25px;
}
#kellypicture2 {
	float:left;
	margin-top:15%;
}
</style>
</head>

<body>
<div id="background2">
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
<div id="whitebackground2">
<h1>About Kelly</h1>
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
 
        

</body>
</html>