<?php
    define("DBHOST", "localhost");//:
    define("DBUSER", "wg11ksui_Admin");
    define("DBPASS","Admin123");
    define("DBNAME","wg11ksui_HRMS");
    
    $connection = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
    $error = mysqli_connect_error();
    if ($error != null){
       echo "<p>could not connect to the database . </p>";
    }
  
   
   
?>