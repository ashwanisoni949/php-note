<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			background: url(img/1.jpeg);
			background-size: cover;
		}
		#login
		{
			min-height: 300px;
			width: 450px;
			padding: 30px;
			box-sizing: border-box;
			margin: 40px auto;
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
		input
		{
			border-radius: 5px;
			background:#f4f4f4;
		}
		input::placeholder
		{
			color:red;
		}
	</style>
</head>
<body>
<div id="login">
	<form action="4sthandle.php" method="GET">
	<h2><u>DISPLAY&nbsp;<b>DETAILS</b></u></h2>
	USRENAME<br>
	<input type="text" class="txt" name="n1" placeholder="ENTER USERNAME"><br>
	EMAIL-ID<br><input class="txt" type="email" name="n2" placeholder="ENTER EMAIL-ID"><br>
	PASSWORD<br><input class="txt" type="password" name="n3" placeholder="ENTER PASSWORD"><br>
	MOBILE<br><input class="txt" type="number" name="n4" placeholder="ENTER NUMBER"><br>
	<input type="submit" name="" class="btn" value="SUBMIT">
</form>
</div>
<p>make by <font>Ashwani Soni</font></p>
</body>
</html>