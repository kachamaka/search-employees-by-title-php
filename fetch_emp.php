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
   $sql = "select * from employees";
   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      die();
   }
   $employees = array();
   while($row = pg_fetch_row($ret)){
    array_push($employees, $row);
   }
?>