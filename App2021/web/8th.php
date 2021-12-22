<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			background: url(img/20.jpg);
			background-size: cover;
		}
		#login
		{
			min-height: 300px;
			width: 450px;
			padding: 30px;
			box-sizing: border-box;
			margin: 90px auto;
			font-weight: bold;
			font-size: 22px;
			color: white;
			box-shadow: 5px 5px 5px white,-5px -5px 5px white;
			transition: all ease 1s;
			border: 5px double orange;
		}
		#login:hover
		{
			transition: all ease 1s;
			transform: rotate(360deg);

		}
		.txt
		{
			width: 100%;
			height: 30px;
			margin-bottom: 15px;

		}
		.btn
		{
			width: 100%;
			height: 30px;
			background: orange;
			margin-top: 25px;
			font-weight:bold;
			color:black;
		}
		b
		{
			color: red;
		}
		input
		{
			border-radius: 5px;
			background:#f4f4f4;
		}
		input::placeholder
		{
			color:red;
		}
		h2
		{
			text-align: center;
			color: white;
		}
		p
		{
			color:white;
			text-align:center;
			margin-top:-20px;
		}
		font
		{
			color:orange;
		}
	</style>
</head>
<body>
<div id="login">
	<form action="8sthandle.php" method="GET">
	<h2><u>REMAINDER&nbsp;<b>RESULT</b></u></h2>
	ENTER THE FIRST NUMBER<br>
	<input type="number" class="txt" name="n1" placeholder="ENTER THE FIRST NUMBER"><br>
	ENTER THE SECOND NUMBER<br>
	<input type="number" class="txt" name="n2" placeholder="ENTER THE SECOND NUMBER"><br>
	<input type="submit" name="" class="btn" value="SUBMIT">
</form>
</div>
<p>make by <font>Ashwani Soni</font></p>
</body>
</html>