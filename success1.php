<html>
<head>
<title> REG_SUCCESS </title>
<style>


h1 {
	//text-align: center;
	color: FF3300;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: FF3300;
  border: none;
  color: white;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
h1 {
  text-align: center;
}
div {
  display: block;
    text-align: center;
}
</style>
</head>
<body>
<br> <br> <br> <br>
<h1> SUCCESSFULLY REGISTERED! </h1>
<BR> <BR>
<div> <a href = "login.php"><button class="button"><span>Login To Continue</span></a> </div>
</body>
</html>
