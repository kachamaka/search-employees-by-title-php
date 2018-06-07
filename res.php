<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include($_SERVER['DOCUMENT_ROOT']."/php/search/search.php");
    include($_SERVER['DOCUMENT_ROOT']."/php/fetch_emp.php");    
    if(!isset($_POST["title"])){
      echo "<br>please select an option";
      die();
    }
  ?>
    <br>
    <table>
    <th>Name</th>
    <th>Family name</th>
    <th>Birth year</th>
    <th>Monthly salary</th>
    <?php
    foreach($employees as $emp){
      if($emp[4] == $_POST["title"]){  
        echo "<tr>";
        echo "<td>$emp[1]</td>";
        echo "<td>$emp[2]</td>";
        echo "<td>$emp[3]</td>";
        echo "<td>$$emp[5]</td>";
        echo "</tr>"; 
      }
    }
    pg_close($db);    
    ?>    
    </table> 
</body>
</html>