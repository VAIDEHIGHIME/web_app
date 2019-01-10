<?php
	session_start();
    require 'database.php';
    if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    }   
	if(isset($_POST['delete']))
	{
		$title = $_POST['title'];
		$query="DELETE FROM `blogdata` WHERE `title`='$title' and `author`='".$_SESSION['username']."' ";
		$result = mysqli_query($conn, $query);

		if($result)
		{
			echo ("BLOG DELETED");
			header ("Location: main_blog.php");
		}
		else
		{
			echo ("BLOG NOT DELETED");
			header ("Location: delete_admin.php");
		}
		mysqli_close($conn);

	}
?>
<!DOCTYPE html>
<html>
<head>
<title> DELETE BLOG </title>
<style>
div.form
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}
body 
{
	
	background-image: url("del.jpg");
	background-size: cover;
	color: white;
	
}
.button {
    background-color: #009933;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
label {
	color: #003300;
	text-decoration: underline;
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
.button3 {border-radius: 8px;}
</style>
</head>
<body>
<ul>
  <li><a href="HomePage2.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="photogallery.php">Photo Gallery</a></li>
  <li><a href="postanentry.php">Create A Blog</a></li>
  <li><a href="main_blog.php">My Posts</a></li>
  <li><a href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a class="active" href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<br> <br> <br> <br> <br>
<div class = "form">
<form action = "" method = "post">
<label> <h3>Input the title to be deleted:</h3> </label> <input type = "text" name = "title">
<br> <br>
<input class="button button3" type = "submit" name = "delete" value = "Clear Data">

</form>
</div>
</body>
</html>
