<?php
$localhost = 'localhost';
$root = 'root';
$password = '';
$db = 'login';
$con = mysqli_connect($localhost, $root, $password, $db );

if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];
	$fname = $_POST['fname'];
	$state = $_POST['state'];
	$password = $_POST['password'];
	$select = $_POST['select'];
	
	$loginsert = mysqli_query($con, "INSERT INTO app(name, email, tel, address, fname,state, password, select) VALUES ($name, $email, $tel, $address, $fname, $state, $password, $select)");
	if($loginsert)
	{
		echo "<b> Your Form Has Been Successfully Submitted!! </b>";
	}
	else
	{
		echo "Sorry! Form Not Submitted... ";
	}
	
}

?>

<html>
<head>
<title> form </title>
</head>
<body>
<form method="POST">
<h1> FORM </h1>
<input type="text" name="name" placeholder="please enter your name" required>
<input type="email" name="email" placeholder="please enter your email id" required>
<input type="tel" name="tel" placeholder="please enter your contact number" required>
<input type="text" name="address" placeholder="please enter your current address" required>
<input type="text" name="fname" placeholder="please enter your father's name" required>
<input type="text" name="state" placeholder="please enter your state" required>
<input type="password" name="password" placeholder="please enter your password" required>
<select name="select" required>
<option> B.Com </option>
<option> B.A.(HONS) </option>
<option> B.B.A. </option>
<option> B.Sc. </option>
</select>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>