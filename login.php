<html>
<head>
<title>Login Form</title>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="../css/styles.css"/>
<!-- Include JS File Here -->
<!--<script src="../js/login.js"></script>-->
</head>
<body>
<div class="container">
<div class="main">
<h2>Login Form</h2>
<form id="form_id" method="post" name="myform">
<label>User Name :</label>
<div data-validate = "Username should not be blank">
<input type="text" name="uname" id="uname" required/>
</div>
<label>Password :</label>
<input type="password" name="pass" id="pass"/>
<input type="submit" value="Login" name="submit"/>
<a href="../signup.php">Create New Account</a>
</form>
<!--<span><b class="note">Note : </b>For this demo use following username and password. <br/><b class="valid">User Name : Formget<br/>Password : formget#123</b></span>-->
</div>
</div>
</body>
</html>
<?php
// Start the session
session_start();
?>

<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodmanagement";
$idname=$_POST['uname'];
$idpass=$_POST['pass'];
$uname="balaji";
$pass="balaji";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$re=mysqli_query($con,$sql);
$sql = "SELECT pass FROM register where email='$idname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//$uname=$row["email"];
		$pass=$row["pass"];
		//echo "name" . $uname ."<br>";
		echo "pass" . $pass ."<br>";
        echo "id: " . "$idname" . " - Name: " . $row["pass"]. "<br>";
	}
    if ($pass == $idpass)
      echo '<script type="text/javascript">

          window.onload = function () { alert("Login Successfull"); }
		  window.location = "dashboard.html"; // Redirecting to other page.

</script>';
	//echo "login ok da";
}
else {
    echo "0 results";
	echo $uname;
	echo $pass;
	echo $idname;
	echo $idpass;
	
}
$conn->close();
}
?>