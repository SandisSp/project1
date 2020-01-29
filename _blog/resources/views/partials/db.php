<?php

var_dump('yolo'); die;

?>

<style lang="">
    table {
        border: 2px solid grey;
        background-color: #8d9bb3;
    }

    td {
        border: 2px solid grey;
        padding: 10px;
    }
</style>

<table> 
 <thead>
     <tr>
         <td>id</td>
         <td>Vārds</td>
         <td>Uzvārds</td>
         <td>1.posms</td>
         <td>2.posms</td>
         <td>3.posms</td>
         <td>4.posms</td>
         <td>5.posms</td>
     </tr>
 </thead>



<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dati_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlQuerry = "SELECT * FROM results";
$result = $conn->query($sqlQuerry);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        foreach ($row as $key => $value) {
            echo '<td>';
            echo $value;
            echo '</td>';
        }

        echo '</tr>';
       // echo "id: " . $row["id"]. " - Vārds: " . $row["Vārds"]. " - Uzvārds: " . $row["Uzvārds"]. " - 1.posms:" . $row["1.posms"].  " - 2.posms:" . $row["2.posms"].  " - 3.posms:" . $row["3.posms"].  " - 4.posms:" . $row["4.posms"].  " - 5.posms:" . $row["5.posms"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?> 

</table>
