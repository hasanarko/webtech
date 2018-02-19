 <?php
      session_start();
	  $name=$_post["Uname"];
      $pass=$_post["pass"];
	  
	  $_SESSION["name"]=$name;
	  $_SESSION["pass"]=$pass;
            
	?>
