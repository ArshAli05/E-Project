<?php
require 'buy.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buy Now</title>
	<style>
    body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
	background-color: #f1f1f1;
}

header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

h1 {
	margin: 0;
	font-size: 36px;
}

main {
	padding: 20px;
}

form {
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
	display: block;
	margin-bottom: 10px;
	font-weight: bold;
}

textarea{
  width:400px;
  display: block;
	
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}
input[type="email"]{
  display: block;
	width:250px;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}
input[type="text"]
{
	display: block;
	width:100px;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type="number"] {
	display: block;
	width: 250px;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

button[type="submit"] {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

button[type="submit"]:hover {
	background-color: #555;
}

footer {
	background-color: #333;
	color: #fff;
	padding: 20px;
	text-align: center;
}
.first{
  
  width:150px;
}
.last{
  margin:-77px 0 0 205px;
}
.number{
  width:200px;
}
  </style>
</head>
<body>
	<header>
		<h1>GROUPY</h1>
	</header>
    	<main>
		<form action="" method="post">
			<h4>First name:
      <input type="text" name="first" class="first">
      </h4>
      <h4 class="last">
      Last Name:
      <input type="text" name="last">
      </h4>
     
      <h4>Phone Number:
            <input class="number" name="number" type="number">
          </h4>
          <h4>E-Mail:
            <input type="email" name="email" class="mail">
          </h4>
      <h4>Postal Code:
        <input type="text" name="postal_code">
        </h4>
        <h4 class="last">
         Town/City:
          <input type="text" name="city">
          </h4>
          <h4>Address:
        <textarea rows="4" name="address" cols="100"></textarea>
      </h4>
	  
			<button type="submit" name="submit">Buy Now</button>
		</form>
	</main>
	
	<footer>
		<p>&copy; 2023 Buy Now. All Rights Reserved.</p>
	</footer>
</body>
</html>