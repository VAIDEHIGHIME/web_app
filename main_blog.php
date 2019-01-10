<?php 
session_start();
    require 'database.php';
    if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    } 
	else{
		
		$query = "SELECT * FROM `blogdata` WHERE `author`='".$_SESSION['username'] ."'";
		$search_result = filterTable($query);
	
	}
	function filterTable($query)
	{
		$conn = mysqli_connect("blog-a-thon.mysql.database.azure.com", "vaidehi@blog-a-thon", "privacy@1234", "blogger");
		$filter_result = mysqli_query($conn, $query);
		return $filter_result;
	}
?>
<html>
<head>

<title> My Blog </title>
<style type="text/css">
	table td {
    border: 2px solid #003366;
    border-collapse: collapse;
    padding: 5px;
	background-color:white;
    font-size: 20px;
    
}
h1 {
	color: white;
	background-color: black;
	text-align: center;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;


}
body {
	background-image: url("use1.jpg");
	background-size: cover;
}
caption {
		color: white;
		font-size: 30px;
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
  <li><a href="HomePage2.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="photogallery.php">Photo Gallery</a></li>
  <li><a href="postanentry.php">Create A Blog</a></li>
  <li><a  class="active" href="main_blog.php">My Posts</a></li>
  <li><a href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<br>
<center>
<h1>MY POSTS </h1><br>



<table>
<tr>

<th><h1> Title</h1> </th>

<th> <h1>Content </h1></th>
</tr>

<?php 
while($row = mysqli_fetch_array($search_result)): ?>
<tr>
	
	<td> <?php echo $row['title']; ?> </td>
	
	<td> <?php echo $row['content']; ?> </td>
</tr>

<?php endwhile; ?>
</table>
</center>


</body>
</html>
