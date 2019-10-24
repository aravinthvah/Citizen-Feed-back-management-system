<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:clogin.php");
}

?>
<html>
<head>
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
    position:relative;
     }
#s9
	  {
	  background-image: linear-gradient(to top left,#B8E9FE, #0FD9B8);
	  height: auto;
    position: relative;
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
  <div class="nav-wrapper" >
   &nbsp;&nbsp; <a href="" class="brand-logo">Complaints</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
     &nbsp;&nbsp;
	 <li >&nbsp; <button class="btn waves-effect waves-light" type="submit" name="logout" >Logout
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

<?php
// Start the session
$idname=$_SESSION["name"];
echo "Welcome"."<br>";
echo $idname."<br>";

$username = "root";
$password = "";
$database = "registration";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM cregister where uname='$idname'";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["cname"];
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
<a href="newfeed.php"><button class="btn waves-effect waves-light" type="submit" name="newfeed">New Feed
            </button></a>&nbsp;&nbsp;
		</span></div>
      </div>

      <div class="col s9" id=s9>
        <!-- Teal page content  -->
		<div class="grid-example col s12 m6"><span class="flow-text">

		<?php
$username = "root";
$password = "";
$database = "registration";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM comp";


echo '<table border="0" cellspacing="2" cellpadding="2" >
      <tr id="good">
          <td> <font face="Arial">Charity Name</font> </td>
          <td> <font face="Arial">feed</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["email"];
        $field2name = $row["address"];
        $field3name = $row["ward"];
        $field4name = $row["story"];
       // $field3name = $row["email"];
       // $field4name = $row["uname"];
       // $field5name = $row["pass"];
        echo '<tr id="good">
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>

              </tr>';

    }
    $result->free();
}
?>
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    $_SESSION = array();
//Location('Header;clogin.php');
header('Location:adminlogin.php');
}
?>
		</span></div>
      </div>


</body>
</html>
