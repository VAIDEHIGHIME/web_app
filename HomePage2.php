<?php
 session_start();
    require 'database.php';
    if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    }   
   
    

?>  
<!DOCTYPE html>
<html>
<head>
<title> Blog-a-thon: Home Page </title>
<style>




body {
//background: url("sbF4YBU.jpg") no-repeat fixed center;
	background-image: url("tuxpi.com.1491071710.jpg");
	//background-image: url("images (5).jpg");
	background-size: cover;
	background-repeat: no-repeat;
    	background-attachment: fixed;
	
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
img {
    display: block;
    margin: auto;
    width: 40%;
}
p {
	font-size: 40px;
	color: #660066;
	font-family: Impact, Charcoal, Serif;
	text-align: center;
	font-weight: bold;
	
	
}

marquee {
	font-size: 50px;
	color: #cc0000;
	font-family: "Georgia", serif; 
	font-weight: bold;
	text-shadow: 2px 2px red;
	
}

#para1, #para2, #para3, #para4 {
				font-size: 20px;
				color: black;
				font-family: "Comic Sans MS", cursive, sans-serif;
				font-weight: bold;
				text-align: left;
}
div {
	color: #cc0000;
	font-size: 30px;
	font-family: "Comic Sans MS", cursive, sans-serif;
	font-weight: bold;
	text-decoration: underline;
}
#mainContent {
	clear: both;
	margin-top: 5px;
	font-size: 30px;
	color: black;
	align: center;
}

#down {
	font-size: 15px;
	font-family: Times New Roman, Serif; 
	color: white;
}
</style
</head>
<body>
<ul>
  <li><a class="active" href="HomePage2.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="photogallery.php">Photo Gallery</a></li>
  <li><a href="postanentry.php">Create A Blog</a></li>
  <li><a href="main_blog.php">My Posts</a></li>
  <li><a href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<img src="logo2.jpg" >
<marquee> WELCOME <?=$_SESSION['username']?> TO THE WORLD OF BLOGGING! </marquee>
<p> Publish your passions, your way! Create and explore amazing content, whenever you want! </p>
</body>
</html>
