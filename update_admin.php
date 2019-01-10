<?php

	session_start();
    require 'database.php';
	if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    } 
	if(isset($_POST['update']))
	{
		$conn = mysqli_connect("blog-a-thon.mysql.database.azure.com", "vaidehi@blog-a-thon", "privacy@1234", "blogger");
		
		$title = $_POST['title'];
		$content = $_POST['content'];
		$query = 'UPDATE `blogdata` SET `content`="'
		.$content.
		'"'.
		' WHERE `author`="'.
		$_SESSION['username'].
		'" and `title`="'.
		$title.
		'"';

		$result = mysqli_query($conn, $query);

		if($result)
		{
			echo ("Post UPDATED!");
			header('Location: main_blog.php');
		}
		else
		{
			echo("Post NOT UPDATED!");
		}
		mysqli_close($conn);
	}
?>
<html>
	<head>
	<title> Update </title>
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
	
	background-image: url("dell.jpg");
	background-size: cover;
	color: black;
	
}
.button {
    background-color: #ff9999;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
label {
	color: black;
	text-decoration: underline;
}
.button3 {border-radius: 8px;}
input {
	float: right;
}
h1 {
	text-align: center;
}
		</style>
	</head>

	<body>
	<ul>
  <li><a href="HomePage2.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
 
  <li><a href="photogallery.php">Photo Gallery</a></li>
  <li><a href="postanentry.php">Create A Blog</a></li>
  <li><a href="main_blog.php">My Posts</a></li>
  <li><a  href="search_admin.php">Search Blogs</a></li>
  <li><a  class="active" href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	<br>
	<h1>Enter The Title of the post you want to update</h1>
	<div class = "form">
		<form action = "" method = "POST">
			
			<label>Title: </label><input type = "text" name = "title"required> <br> <br>
			
			<label>New Content: </label><input type = "text" name = "content"required> <br> <br>
			<input class="button button3" type = "submit" name = "update" value = "Update Data">
		</form>
		</div>
	</body>
</html>