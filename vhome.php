
<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:clogin.php");
}

?><html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/signup.js"></script>
  <link rel="stylesheet" href="../css/styles.css"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
	  <style>
	  #s3
	  {
	  background-image: linear-gradient(to bottom right,violet, #B8E9FE);
	  height:100%;

	  }
	  #s9
	  {
	  background-image: linear-gradient(to top left,#B8E9FE, #0FD9B8);
	  height:100%;
	  }
	  </style>
	  <style>
#good {
            color:green;
             font-size:20px;
              display:block;
              border: 1px solid silver;
              margin:0.8em;
              padding:1em;
              background-color:whitesmoke;
              }
h1 {
      display:block;
      font-weight:bolder;
      text-align:center;
      font-size:30px;
      background-color: green;
      color: white;

      }
</style>
</head>

<body>
<div class="row">
<nav>
  <form id="form_id" method="post" name="myform">
  <div class="nav-wrapper">
   &nbsp;&nbsp; <a href="" class="brand-logo">complaints</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
     &nbsp;&nbsp;
	 <li>&nbsp; <button class="btn waves-effect waves-light" type="submit" name="logout">Logout
            </button></li>
    </ul>
  </div>
  </form>
</nav>
</body>
<body>
      <div class="col s3" id=s3>
        <!-- Grey navigation panel -->
		<div class="grid-example col s12"><span class="flow-text">
<?php
// Start the session
//session_start();
?>
<div class="form-group">
                  <label for="username" class="text-info">feed details:</label></br>
                  <input type="text" name="feed" id="feed" class="form-control">
              </div>
<?php
// Start the session
$idname=$_SESSION["name"];
echo "Welcome"."<br>";
echo $idname."<br>";

$username = "root";
$password = "";
$database = "registration";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM client where email='$idname'";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["uname"];
        //$field2name = $row["address"];
       // $field3name = $row["phone"];
        //$field4name = $row["email"];
        //$field5name = $row["pass"];

       // echo  "<div class='row valign-wrapper'>";
        //echo  "<div class='card-panel pink lighten-9 z-depth-7'>";

		echo  " HI!!: " . "$field1name" . "<br>"."<br>";


		//echo "</div>";
		//echo "</div>";
    }
    $result->free();
}
?>
<!--<a href="newfeed.php"><button class="btn waves-effect waves-light" type="submit" name="newfeed">New Feed
</button></a>-->&nbsp;&nbsp;
		</span></div>
      </div>

      <div class="col s9" id=s9>
        <!-- Teal page content  -->
		<div class="grid-example col s12 m6"><span class="flow-text">
      <body>

          <div id="signup" >
              <h3 class="text-center text-white pt-5">File New Complaint</h3>
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
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
      		</form>
          </div>
      </body>

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

<?php
if(isset($_POST['logout']))
{
  session_destroy();
  $_SESSION = array();
  //Location('Header;clogin.php');
  header('Location:clogin.php');
}
?>
		</span></div>
      </div>


</body>
</html>
