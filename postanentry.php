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
	<title> Post a new Entry</title>
	<style>
#wrapper {
	margin: auto;
	width: 800px;
}
label {
	display: block;
	font-size: 25px;
	color: white;

}
body {
	background-image: url("use.jpg");
	background-size: cover;
}
h1 {
	color: white;
	text-align: center;
    background-color: black;
}
.button {
    position: center;
    background-color: black;
    border: none;
    font-size: 28px;
    color: white;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: purple;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    color: white;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
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
<?php 
	
	if(isset($_POST['submit'])) 
	{
		//post it
		$title = $_POST['title'];
		
		$content = $_POST['content'];
		//echo ("hello");

		$sql = "INSERT INTO blogdata (title, author, content) 
			VALUES ('$title', '".$_SESSION['username']."', '$content')";
		$result = mysqli_query($conn,$sql);
		header ("Location: main_blog.php");

	}		
?>
		
<ul>
  <li><a href="HomePage2.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
 
  <li><a href="photogallery.php">Photo Gallery</a></li>
  <li><a class="active" href="postanentry.php">Create A Blog</a></li>
  <li><a href="main_blog.php">My Posts</a></li>
  <li><a href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	<h1> CREATE YOUR BLOG! </h1>
	<div id = "wrapper">
	<div id = "content">
	<form action = '' method = 'POST' >
	<label> Title: </label> <input type = "text" name = "title"> <br> <br>	
	<label for = "content"> Content </label><br>
	<textarea name = "content" cols=100 rows=20></textarea>	
	<br><br>
	<input class = "button" type = "submit" name = "submit" value = "Submit" />
	</form>
	</div>
	</div>
	</body>
</html>