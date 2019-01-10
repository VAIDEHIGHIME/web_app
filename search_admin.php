<?php

	session_start();
    require 'database.php';
    if(!isset($_SESSION['username']))
    {
    	header('Location: login.php');
    	exit();	
    } 
	if(isset($_POST['search']))
	{
		$value = $_POST['value'];
		$query = "SELECT * FROM `blogdata` WHERE CONCAT(`title`, `author`, `content`)LIKE'%".$value."%'";
		$search_result = filterTable($query);
	}
	else
	{
		$query= "SELECT * FROM `blogdata`";
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
<title> SEARCH </title>
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
	table, tr, th, td {
			border : 1px solid black;
	}
	input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
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
h1 {
	text-align: center;
	color: #ff6600;
	background-color: black;
}
table, tr, th, td {
	 border-collapse: collapse;
    padding: 10px;
   color: white;
   border: 2px solid white;
   font-size:22px;
}
body {
	background-image: url("sear.jpg");
	background-size: cover;

}
.button {
    background-color: #ff6600;
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
  <li><a  class="active" href="search_admin.php">Search Blogs</a></li>
  <li><a href="update_admin.php">Update A Blog</a></li>
  <li><a href="delete_admin.php">Delete A Blog</a></li>
  <li><a href="#"><?=$_SESSION['username']?></a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<br>
<h1> Kindly Enter the Keywords you want to search </h1>
<br> <br>
<div class = "form">
<form action = "" method = "POST">

<input type = "text" name = "value" placeholder = "Value to be searched" /> <br> <br>
<input class="button button3" type = "submit" name = "search" placeholder = "Filter" /> <br> <br>

<table>
<tr>

<th> Title </th>
<th> Author </th>
<th> Body </th>
</tr>
<?php while($row = mysqli_fetch_array($search_result)): ?>
<tr>
	
	<td> <?php echo $row['title']; ?> </td>
	<td> <?php echo $row['author']; ?> </td>
	<td> <?php echo $row['content']; ?> </td>
</tr>

<?php endwhile; ?>
</table>
</form>
</div>
</body>
</html>
