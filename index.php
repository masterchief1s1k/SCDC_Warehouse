<!DOCTYPE html>
<html >
  <?php include_once 'widgets/head.php' ?>
<body>
  <?php 
  	$task = "id";
  	if (isset($_GET["task"])) {
  		# code...
  		$task = $_GET["task"];
  	}
  	
  	if ($task=="contact") {
  		# code...
  		include_once 'controllers/c_contact.php';
	    $controllers = new c_contact();
	    $controllers->contact();
  	}elseif ($task=="about") {
  		# code...
  		include_once 'controllers/c_about.php';
	    $controllers = new c_about();
	    $controllers->about();
  	}
  	else {
  		# code...
	  	include_once 'controllers/c_homepage.php';
	    $controllers = new c_homepage();
	    $controllers->homepage();
  	}
    
  ?>
  <input name="animation" type="hidden">
  </body>
</html>