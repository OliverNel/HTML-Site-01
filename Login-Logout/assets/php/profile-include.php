<?php
    $user_uname = $_SESSION['u_uname'];
    $pdo = new PDO('mysql:host=localhost;dbname=website', 'root', '');
    $sql = "SELECT Name, EMail, Username, `Permissions`, date FROM users WHERE Username='$user_uname'";
        foreach ($pdo->query($sql) as $row) {  
            echo "<tr>"."<td>".$row['Name']."</td>"."<td>".$row['EMail']."</td>"."<td>".$row['Username']."</td>"."<td>".$row['Permissions']."</td>"."<td>".$row['date']."</td>"."</tr>";
        }
?>
