<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			background: url(img/18.jpg);
			background-size: cover;
		}
		#login
		{
			min-height: 300px;
			width: 450px;
			padding: 30px;
			box-sizing: border-box;
			margin: 80px auto;
			font-weight: bold;
			font-size: 22px;
			color: white;
			box-shadow: 5px 5px 5px white,-5px -5px 5px white;
			border: 5px double orange;
		}
		#login:hover
		{
			transition: all ease 1s;

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
		h2
		{
			text-align: center;
			color: white;
		}
		p
		{
			color:white;
			text-align:center;
			margin-top:-40px;
		}
		font
		{
			color:orange;
		}
	</style>
</head>
<body>
<div id="login">
	<form action="2sthandle.php" method="GET">
	<h2><u>ALL <b>SUM</b></u></h2>
	FIRST INPUT NUMBER<br>
	<input type="number" class="txt" name="n1" placeholder="FIRST INPUT NUMBER"><br>
	SECOND INPUT NUMBER<br><input class="txt" type="number" name="n2" placeholder="SECOND INPUT NUMBER"><br>
	THIRD INPUT NUMBER<br><input class="txt" type="number" name="n3" placeholder="THIRD INPUT NUMBER"><BR>
	<input type="submit" name="" class="btn" value="SUBMIT">
</form>
</div>
<p>make by <font>Ashwani Soni</font></p>
</body>
</html>