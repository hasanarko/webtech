<html>
<body>
<?php
     $UnameErr = $passErr=$c.passErr=$emailErr=$phonenoErr=$fullnameErr"";
      $Uname = $pass=$c.pass=$email=$phoneno=$fullname"";

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
 if (empty($_POST["c.pass"])) {
    $c.passErr = "confirm password is required";
  } else {
    $c.pass = test_input($_POST["c.pass"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
 if (empty($_POST["phoneno"])) {
    $phonenoErr = "phoneno is required";
  } else {
    $phoneno = test_input($_POST["phoneno"]);
  }
  if (empty($_POST["fullname"])) {
    $emailErr = "fullname is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
  }

}

function test_input($data) {
 
}
?>

</body>
</html>