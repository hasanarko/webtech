<html>
<body>

  <?php
      session_start();
	  $name=$_post["Uname"];
      $pass=$_post["pass"];
	  
	  $_SESSION["name"]=$name;
	  $_SESSION["pass"]=$pass;
   ?>
<?php
      $UnameErr = $passErr="";
      $Uname = $pass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Uname"])) {
    $UnameErr = "Name is required";
  } else {
    $Uname = test_input($_POST["Uname"]);
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "password is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }

}

function test_input($data) {
}
?>

</body>
</html>