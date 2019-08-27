<?php
$pdo = new PDO('mysql:host=localhost;dbname=website', 'root', '');

$sql = "SELECT Vorname, Nachname, EMail FROM contact";
foreach ($pdo->query($sql) as $row) {
   echo $row['vorname']." ".$row['nachname']."<br />";
   echo "E-Mail: ".$row['email']."<br /><br />";
}
?>