
<?php
	session_start();
    require 'database.php';
    if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    } 
?><!DOCTYPE html>
<html>
<head>
<title> Photo Gallery </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #696969;
}

.active {
    background-color: #cc0066;
}
* {box-sizing:border-box}

.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: white;
  /* font-size: 35px; */
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
  text-decoration: bold;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
body {
	background-image: url("leather-texture-black-wallpaper-abstract-wooden-textured-wallpapers.jpg");
	background-size: cover;
	text-align: center;
}
h1 {
	font-family: "Georgia", Serif;
	color: white;
	/* text-decoration: bold; */
}
</style>
</head>
<body>
<ul>
  <li><a href="HomePage2.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
 
  <li><a class="active"  href="photogallery.php">Photo Gallery</a></li>
  <li><a href="postanentry.php">Create A Blog</a></li>
  <li><a href="main_blog.php">My Posts</a></li>
  <li><a href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1> Some of the famous and well-known BLOGGERS..</h1>
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="vaynerchuk-1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="brian-clark.jpg" style="width:100%">
  <div class="text">Brian Clark</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="andrew-sullivan-3980.jpg" style="width:100%">
  
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
