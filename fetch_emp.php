<?php
  include($_SERVER['DOCUMENT_ROOT']."/php/db/db.php");
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