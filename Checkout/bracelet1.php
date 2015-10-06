<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bracelets</title>

<style>
body#home #navhome, body#about #navabout, body#photography #navphotography, body#websites #navwebsites, body#contact #navcontact, body#resume #navresume {
	color:#941512;
}

* {margin: 0; padding: 0;}

#lightbox {
	float:left;
	width:90%;
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
	border-radius:25px;
}

/*Image titles*/
#lightbox .image_title {
	width: 260px; height: 256px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	margin-top:8%;
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
#whitebackground {
	width:900px;
	height:700px;
	background-color:#FFFFFF;
	margin-left:15%;
	margin-top:1%;
	border-radius:25px;
	
}
#logo {
	text-align:center;
}
body {
	background-color:#DCDCDC;
}

.clearfix:after {
    display:block;
    clear:both;
}
 
/*----- Menu Outline -----*/
.menu-wrap {
    width:100%;

}
 
.menu {
    width:1000px;
    margin:0px auto;
	border-bottom:#D1CFCF 1px solid;
	border-top:#D1CFCF 1px solid;
}
 
.menu li {
    margin:0px;
    list-style:none;
    font-family:'Ek Mukta';
}
 
.menu a {
    transition:all linear 0.15s;
    color:#919191;
}
 
.menu li:hover > a, .menu .current-item > a {
    text-decoration:none;
}
 
.menu .arrow {
    font-size:11px;
    line-height:0%;
}
 
/*----- Top Level -----*/
.menu > ul > li {
    display:inline-block;
    position:relative;
    font-size:19px;
}
 
.menu > ul > li > a {
    padding:10px 40px;
    display:inline-block;
}
 

 
/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
    z-index:1;
    opacity:1;
}
 
.sub-menu {
    width:120%;
    padding:5px 0px;
    position:absolute;
    top:100%;
    left:0px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#AFAEF9;
}
 
.sub-menu li {
    display:block;
    font-size:16px;
}
 
.sub-menu li a {
    padding:10px 30px;
    display:block;
}
 
.sub-menu li a:hover, .sub-menu .current-item a {
    background:#1E18B3;
}

a.blue{
	color:#0A40AC;
}
a.blue:hover{
	color:#0A40AC;
}
a.green{
	color:#0A6C09;
}
a.green:hover{
	color:#0A6C09;
}
	
a {
	color:#515050;
}
a:hover {
	color:#daa520;
}

a:visited {
	color:#515050;
}
a{
	text-decoration:none;
}
a.read {
	color:#0F08A8;
}
a.read:visited {
	color:#0F08A8;
}
#slideshow {
	margin-top:2%;
margin-left:1%;
	
}
h1 {
	float:right;
	font-size:1.4em;
	margin-top:5%;
}
h2 {
	float:right;
	font-size:1.4em;
}
h3 {
	float:right;
	font-size:1.4em;
}
h4 {
	color:#FFFFFF;
	font-size:2em;
	text-align:center;
}
h5 {
	font-size:1.5em;
	float:left;
}
p.statement {
	text-indent:25px;
}
p.welcome {
		text-indent:25px;
}
	
#welcome {
	margin-bottom:5%;
	width:80%;
	text-align:justify;
	margin-left:10%;
	height:100px;
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	clear:both;
	
}
#footer {
	clear:both;
	width:100%;
	bottom:0px;
	left:0px;
	height:100px;
	background-color:#000000;
	text-align:center;
	color:#FFFFFF;
}
#icons {
		text-align:center;}
#designed {
	text-align:center;
}
#sidenav {
	margin-right:2%;
	margin-top:1%;
	float:right;
	width:15%;
	height:800px;
	border:solid 1px #000000;
}
#kelly {
	width:75%;
	margin-left:13%;
}
#kellypicture {
	float:left;
}
#kellytext {
	width:60%;
	float:left;
	text-align:justify;
	margin-top:1%;
	margin-left:3%;
}

#form {
	width:40%;
	margin-left:29%;
	height:250px;
	border:3px solid #000000;
	padding-bottom:10%;
}
#background {
	width:80%;
	height:1000px;
	background-color:#F4F4F4;
	text-align:center;
	margin-left:9%;
	margin-top:1.5%;
	border-radius:25px;
}
#whitebackground {
	width:65%;
	height:700px;
	background-color:#FFFFFF;
	margin-left:17%;
	margin-top:1%;
	border-radius:25px;
}
#page {
	float:left;
	margin-left:8%;
	font-size:1.7em;
}
#bigimage img {
	border-radius:25px;
	text-align:center;
	margin-top:2%;
}
	
</style>
</head>

<body>
<div id="background">
<div id="logo">
<a href="index.php"><img src="../Images/kelly logo gold.png" alt="logo">
</div>
<div id="underline">
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="../index.php">Home</a></li>
            <li>
                <a href="#">Jewelry <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="../bracelets/bracelets.php">Bracelets</a></li>
                    <li><a href="../necklaces/necklaces.php">Necklaces</a></li>
                    <li><a href="../earrings/earrings.php">Earrings</a></li>
                    <li><a href="../beeds.php">Beeds</a></li>
                </ul>
            </li>
            <li><a href="../about.php">Our Story</a></li>
            <li class="current-item"><a href="#">Gallery</a></li>
            <li><a href="../contact.php">Contact</a></li>
        </ul>
    </nav>
</div>
</div>
<div id="content">
<div id="whitebackground">
<div id="bigimage">
<img src="../Images/Bracelets/1big.png">
</div>
<a href="#"><input type="submit" value="Purchase">
<p>This item was handmade with sterling silver and blue gems</p>
</div>
</div>
</div>
<div id="footer">
<h4>Connect with us</h4>
<div id="icons">
<img src="../Images/icons/twitter.png" alt="twitter">
<img src="../Images/icons/facebook.png" alt="facebook">
<img src="../Images/icons/instagram.png" alt="instagram">
<div id="designed">
Designed by ©Connor Stern
</div>
</div>
</div>
 
        

</body>
</html>