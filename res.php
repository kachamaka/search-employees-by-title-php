<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include 'fetch_emp.php';
    include 'search.php';
    if(!isset($_POST["title"])){
      echo "<br>please select an option";
      die();
    }
    echo "<br>";
    echo "<table>";
    echo "<th>Name</th>";
    echo "<th>Family name</th>";
    echo "<th>Birth year</th>";
    echo "<th>Monthly salary</th>";
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
    echo "</table>"; 
    pg_close($db);
  ?>
</body>
</html>