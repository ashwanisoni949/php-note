<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        body
        {
            text-align: center;
        }
        #name
        {
            height: 30px;
            width: 150px;
        }
        #submit
        {
            height: 30px;
            width: 90px;
            border: 2px solid black;
            box-shadow: 0px 0px 0px 1px yellow;
            border-radius: 10px;
            background: red;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>HTML FORM</h1><hr>
        <form action="handle-p2.php" method="GET">
            <p>ENTER THE NAME : <input type="text" id="name" name="name"/>
        </p>
        <input type="submit" id="submit" name="submit">
    </form>
</body>
</html>