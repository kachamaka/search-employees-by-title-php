<form action="res.php" method="post">
<h2>Search employees by title</h2>
<select id="title" onchange="this.form.submit()" name="title">
<option selected disabled hidden>Choose title</option>
<?php 
  include 'titles.php';
  foreach($titles as $title){
    if(isset($_POST["title"]) && $_POST["title"]==$title){
    echo "<option selected value=\"$title\">$title</option>";     
    }else{
      echo "<option value=\"$title\">$title</option>";
    }
  }
  pg_close($db);  
?>
<select>
</form>