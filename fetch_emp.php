<?php
 $host        = "host = localhost";
 $port        = "port = 5432";
 $dbname      = "dbname = postgres";
 $credentials = "user = postgres password=postgres";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
      die();
   }
   if(isset($_POST["title"])){
   $selectedTitle = $_POST["title"];     
    $sql = "select * from employees where title = '$selectedTitle' ";   
    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        die();
    }
    $employees = array();
    while($row = pg_fetch_row($ret)){
      array_push($employees, $row);
    } 
   }
?>