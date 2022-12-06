<html>
<head>
	<title>Student Detail</title>
	<style>
		tr {
			background-color: deeppink;
		}
		th {
			background-color: black;
			color: palevioletred;
		}
		th, td {
			padding: 6px;
		}
	</style>
</head>
<body>
<?php
if(isset($_POST["Submit"])){
	$usn=$_POST['usn'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['psw'];
	$cpsw=$_POST['cpsw'];
	echo'<table width="20%" border="1px" cellspacing="0"
	cellpadding="10"><tr><th>USN</th><td>';
	echo "$usn";
	echo '</td></tr>';
	echo '<tr><th>FIRST NAME</th><td>';
	echo "$fname";
	echo '</td></tr>';
	echo '<tr><th>LAST NAME</th><td>';
	echo"$lname";
	echo '</td></tr>';
	echo '<tr><th>GENDER</th><td>';
	echo "$gender";
	echo '</td></tr>';
	echo '<tr><th>EMAIL</th><td>';
	echo "$email";
	echo '</td></tr>';
	echo '<tr><th>USERNAME</th><td>';
	echo "$username";
	echo '</td></tr>';
	echo '<tr><th>PASSWORD</th><td>';
	echo "$password";
	echo '</td></tr>';
	echo '<tr><th>CONFIRM PASSWORD</th><td>';
	echo "$cpsw";
	echo '</td></tr>';
	echo '</table>';
}
?>
</body>
</html>
