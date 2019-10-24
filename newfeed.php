<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:clogin.php");
}
?>
<html>
<head><!--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/signup.js"></script>
<link rel="stylesheet" href="../css/styles.css"/>
</head>
<body>

    <div id="signup" >
        <h3 class="text-center text-white pt-5">Create new Feed</h3>
		<form id="form_id" method="post" name="myform">
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Feed Details</h3>
							<div class="form-group">
                                <label for="username" class="text-info">Email or username:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="username" class="text-info">address:</label><br>
                                <input type="text" name="address" id="feed" class="form-control">
                            </div>
                            <div class="form-group">
                                              <label for="username" class="text-info">ward</label><br>
                                              <input type="text" name="ward" id="feed" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                            <label for="username" class="text-info">Complaints</label><br>
                                                            <input type="text" name="story" id="feed" class="form-control">
                                                        </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit" onclick="">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="clogin.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</form>
    </div>
</body>
</html>
<?php
// Start the session
//session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['submit']))
{
$cname =$_POST['email'];
$address =$_POST['address'];
$ward =$_POST['ward'];
$story =$_POST['story'];
//$phone =$_POST['phone'];
//$email =$_POST['email'];
//$pass  =$_POST['pass'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `comp` (`email`, `address`,`ward`,`story` ) VALUES ('$cname', '$address','$ward','$story')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	echo '<script type="text/javascript">

          window.onload = function () { alert(" details Sent to admin Successfull"); }
		  window.location = "vhome.php"; // Redirecting to other page.

</script>';
//header("location: pages/dashboard.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo '<script type="text/javascript">

          window.onload = function () { alert("Please enter valid details"); }

</script>';
header('Refresh: 0; url=csignup.php');
}
}

$conn->close();
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
