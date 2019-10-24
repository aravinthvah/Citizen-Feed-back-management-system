<html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
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
</head>

<body>
<div class="row">
<nav>
  <div class="nav-wrapper">
    <a href="" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="">sass</a></li>
      <li><a href="">sass <span class="new badge">4</span></a></li>
      <li><a href="">sass</a></li>
    </ul>
  </div>
</nav>
</body>
<body>
      <div class="col s3" id=s3>
        <!-- Grey navigation panel -->
		<div class="grid-example col s12"><span class="flow-text">
		<?php
// Start the session
session_start();
?>

<?php
// Start the session
$name=$_SESSION["name"];
echo "Welcome";
echo $name;


?>
		I am always full-width (col s12)</span></div>
      </div>

      <div class="col s9" id=s9>
        <!-- Teal page content  -->
		<div class="grid-example col s12 m6"><span class="flow-text">I am full-width on mobile (col s12 m6)</span></div>
      </div>


</body>
</html>