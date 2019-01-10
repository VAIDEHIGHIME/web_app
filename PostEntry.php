<?php 
	  session_start();
    require 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Post a new Entry</title>
</head>
<body>
<?php 
	echo ("hello");
	if(isset($_POST['submit'])) 
	{
		//post it
		$title = $_POST['title'];
		$author = $_POST['author'];
		$content = $_POST['content'];
		echo ("hello");

		$sql = "INSERT INTO blogdata (title, author, content) 
			VALUES ('$title', '$author', '$content')";
		$result = mysqli_query($conn,$sql);

	}
	else
	{
		?>
		<form action = 'PostEntry.php' method = 'post'>
		Title: <input type = "text" name = "title" /> <br>
		Author: <?=$_SESSION['username']?> <br>
		Content: <textarea name = "content" > </textarea> <br>
		<input type = "submit" name = "submit" value =  "post!" />
		</form>
		<?php
	}
	?>
		</body>
</html>