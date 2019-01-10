

<html>
<head>
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
</style>
</head>
<body>
<br>
<h1> CREATE YOUR BLOG! </h1>
	<div id = "wrapper">
		<div id = "content">
	<form action = "" method = "POST" >
	<label> Title: </label> <input type = "text" name = "title"> <br> <br>
	<label> Author: </label> <input type = "text" name = "author"> <br> <br>
	<label for = "body"> Body </label> <br>
	<textarea name = "body" cols=100 rows=20></textarea>
	
	<br> <br>
	<input class = "button" type = "submit" name = "submit" value = "Submit" />

	</form>
	</div>
	</div>

</body>
</html>
