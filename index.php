<?php

$conn = mysqli_connect('localhost', 'eugen', 'password', 'elevi');

if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$grupa = $_POST['grupa'];
$media = $_POST['media'];
$id = rand(0,100000);

$sql = 'SELECT * FROM elevi';
$insert = "INSERT INTO elevi VALUES('$id','$nume','$prenume','$grupa','$media')";
$insert_query =  mysqli_query($conn, $insert);
$results = mysqli_query($conn,$sql);

// Aici începe codul pentru tabel și stilurile CSS
echo "
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>
";

echo "<table cellpadding=10 cellspacing=0 border=1>";
echo "<tr><th>ID</th><th>Nume</th><th>Prenume</th><th>Grupa</th><th>Media</th></tr>";

while($row = $results->fetch_array()) {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$row[4]."</td>";
  echo "</tr>";
}
echo "</table>";

?>
