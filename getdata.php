<?php
   $query = "SELECT * FROM company";
   $result = $connection->query($query);
   echo "Who are you looking up? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="astra" value="';
        echo $row["name"];
        echo '">' . $row["name"] . "<br>";
   }
?>