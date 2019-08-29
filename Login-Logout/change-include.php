<?php
    $user_name = $_POST['user_name'];
?>
<!DOCTYPE HTML>
        <html>
        <!------------------------------------------------------- DEFINITION ------------------------------------------------> 
            <head>
                <meta charset="UTF-8">
                <meta name="viewpoint" content="width=device-width, initial-scale=1">
                
                <title>Change | vCard 3.0 | Meine Website</title>
        
                <link rel="stylesheet" type="text/css" href="assets/css/all.css">
                <link rel="stylesheet" type="text/css" href="assets/css/style.css">
                <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
        
                <script defer src="assets/js/all.js"></script>
                <script defer src="assets/js/mobile.js"></script>
                <script defer src="assets/js/ttt-game.js"></script>
                <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        
                <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap" rel="stylesheet">
                
        
                <link rel="icon" href="assets/images/favicon.ico">
            </head>
        
            <body>
        <!------------------------------------------------------- HEADER / NAVIGATION  --------------------------------------> 
                <header>
                    <div class="logo">
                        <a href="/login-logout/index.php#home"><img src="assets/images/logo.png" alt="LOGO"></a> 
                    </div>
                    <nav class="main-nav">
                        <div class="toggleOpen"> 
                            <i class="fas fa-bars" aria-hidden="true"></i>                    
                        </div>
                        <div class="toggleOpen">
                            <i class="fas fa-times" aria-hidden="true"></i>
                        </div>
                        <ul class="nav-item">
                            <a href="/login-logout/index.php#home"><li>Home</li></a>
                            <a href="/login-logout/index.php#about"><li>About</li></a>
                            <a href="/login-logout/index.php#skills"><li>Skills</li></a>
                            <a href="/login-logout/index.php#career"><li>Career</li></a>
                            <a href="/login-logout/index.php#contact"><li>Contact</li></a>
                            <a href="/login-logout/index.php#game"><li>Game</li></a>
                            <a href="/login-logout/data.php"><li>Daten</li></a>
                        </ul>
                    </nav>
                </header>
                    <div class="main-content"> <!---main-contnet ANFANG-->
                        <h1>Benutzer Editieren</h1>
                        <form class="user-form" method="POST">
                            <input name="user_name" type="text" tabindex="1"  class="form-control" placeholder="Geben Sie einen Benutzernamen ein""><br>
                            <input class="button" type="submit" tabindex="2" value="Finden">
                        </form>
                            <table class="database_content">
                                <tr>
                                    <th>Name</th>
                                    <th>EMail</th>
                                    <th>Permissions</th>
                                    <th>Username</th>
                                    <th>Passwort</th>
                                </tr>
                                <?php
                                    $pdo = new PDO('mysql:host=localhost;dbname=website', 'root', '');
                                    $sql = "SELECT `Name`, EMail, `Permissions`, Username, `Password` FROM users WHERE Username = '$user_name'";
                                        foreach ($pdo->query($sql) as $row) {  
                                            echo "<tr>"."<td>".$row['Name']."</td>"."<td>".$row['EMail']."</td><td>".$row['Permissions']."</td>"."<td>".$row['Username']."</td>"."<td>".$row['Password']."</td>"."</tr>";
                                        }
                                ?> 
                            <tr>
                                <form class="user-form" action="assets/php/update-from-database.php" method="POST">
                                    <td><input name="name" type="text" tabindex="1"  class="form-control" placeholder="New Name"></td>
                                    <td><input name="email" type="text" tabindex="2"  class="form-control" placeholder="New EMail"></td>
                                    <td><input name="permissions" type="text" tabindex="3"  class="form-control" placeholder="Ändere die Berächtigung"></td>
                                    <td><input name="username" type="text" tabindex="4"  class="form-control" placeholder="New Username"></td>
                                    <td><input name="password" type="text" tabindex="5"  class="form-control" placeholder="New Password"><input class="button" type="submit" tabindex="6" value="Ändern"></td>
                                    
                                </form>
                            </tr>
                            </table>
                            <a href="data.php"><button class="back">Zurück</button></a>
                    </div> <!-----------------------main-contnet ENDE-->
                <!------------------------------------------------------- FOOTER ---------------------------------------------------->      
                <footer>
                            <ul class="footer-nav">
                                <a href="/login-logout/index.php#home"><li>Home</li></a>
                                <a href="/login-logout/index.php#about"><li>About</li></a>
                                <a href="/login-logout/index.php#skills"><li>Skills</li></a>
                                <a href="/login-logout/index.php#career"><li>Career</li></a>
                                <a href="/login-logout/index.php#contact"><li>Contact</li></a>
                                <a href="/login-logout/index.php#game"><li>Game</li></a>
                                <?php
                                    if (isset($_SESSION['u_id'])){
                                        echo('<a href="/login-logout/data.php"><li>Daten</li></a>');
                                        echo('<a href="/login-logout/login.php"><li>Profil</li></a>');
                                    }
                                    else {
                                        echo('<a href="/login-logout/login.php"><li>Login / Registrieren</li></a>');
                                    }
                                ?>
                            </ul>
                            <p>&copy; 2019</p>
                </footer>
            </body>
        </html>