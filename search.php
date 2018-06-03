<?php
$allTitles = array();
foreach($employees as $emp){
  array_push($allTitles, $emp[4]);
}
$titles = array();
foreach($allTitles as $singleTitle){
  if(!in_array($singleTitle, $titles)){
    array_push($titles, $singleTitle);
  }
}
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
?>