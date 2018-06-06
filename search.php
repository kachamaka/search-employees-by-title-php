<?php
include 'titles.php';
echo '
<form action="res.php" method="post">
<h2>Search employees by title</h2>
';
echo '<select id="title" onchange="this.form.submit()" name="title">';
echo "<option selected disabled hidden>Choose title</option>";
 foreach($titles as $title){
   if(isset($_POST["title"]) && $_POST["title"]==$title){
   echo "<option selected value=\"$title\">$title</option>";     
   }else{
    echo "<option value=\"$title\">$title</option>";
   }
 }
echo '</select>';
echo '</form>';
?>