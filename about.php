<?php
 session_start();
    require 'database.php';
	 if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    } 
?>  
<html>
<head>
<style>
h1 {
	color: white;
	//background-color: #663300;
	text-align: center;
	padding: 30px 30px;
	background-image: url(abt.jpg);
	background-size: cover;
	font-weight: bold;
	text-decoration-line: underline;
}
div {
	text-align: center;
	font-weight: italic;
	border: 2px solid black;
	color: white;
}
p {
	font-size: 25px;
	color: white;
}
body {
	background-image: url("page3.jpg");
	background-size: cover;
}
#ppp {
	color: black;
	text-decoration: underline;
	font-weight: italic;
	color:#FFCC00;
}
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

</style>
</head>
<body>
<ul>
  <li><a  href="HomePage2.php">Home</a></li>
  <li><a class="active" href="about.php">About Us</a></li>
 
  <li><a href="photogallery.php">Photo Gallery</a></li>
  <li><a href="postanentry.php">Create A Blog</a></li>
  
  <li><a href="main_blog.php">My Posts</a></li>
  <li><a href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1> ABOUT US </h1>

<p>
In this crazy age of an overflow of information at the click of one:s
fingertips, blogging is fast gaining it:s ground and making a mark in our
lives. Blogging provided a platform where one can read and key in
information as and when one finds the time and inclination to.
Every person has a voice, their ideas and feelings, which, if they want,
they can share online by the way of a blog. One can post anything, like
business ideas, hobbies, travel tips, or even cooking recipes on their
blogs. What better way to express oneself! 
</p>
<div>
<p id = "ppp">
Blogging is the way to go, tell it all and let it show.</p>
<p id = "ppp">Write, read and reveal. And let your thoughts flow.</p>
<p id = "ppp">Open your minds to ideas galore,</p>
<p id = "ppp">And enter the world of technology like never before.
</p>
</div>

<p>
Hence, Blog-a-thon offers a very user friendly environment and easy to
use features that let you express your opinions freely, that let you
explore new arenas and that let you spread the enthusiasm of reading and
creative writing.
</p>
</body>
</html>