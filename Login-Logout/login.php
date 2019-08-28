<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
<!------------------------------------------------------- DEFINITION ------------------------------------------------> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        
        <title>vCard 3.0 | Meine Website</title>

        <link rel="stylesheet" type="text/css" href="assets/css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <script defer src="assets/js/all.js"></script>
        <script defer src="assets/js/mobile.js"></script>
        <script defer src="assets/js/ttt-game.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap" rel="stylesheet">
        

        <link rel="icon" href="assets/images/favicon.ico">
    </head>

    <body>
        <h1>Registrieren</h1>
        <?php   
            if (isset($_SESSION['u_id'])) {
                echo ('<div class="contact-form"><form id="contact-form" method="POST" action="assets/php/logout-from-database.php"><input class="button" type="submit" name="submit" tabindex="9" value="Logout"></form></div>');
            }

            else {
                echo ('<div class="contact-form">
                        <form id="contact-form" method="POST" action="assets/php/register-from-database.php">
                            <input name="name" type="text" tabindex="1" class="form-control" placeholder="Name"><br>
                            <input name="email" type="email" tabindex="2" class="form-control" placeholder="E-Mail" required><br>
                            <input name="username" type="text" tabindex="3"  class="form-control"placeholder="Username"><br>
                            <input name="password"  type="password" tabindex="4" class="form-control" placeholder="Passwort"><br>
                            <input class="button" type="submit" tabindex="5" value="Registrieren">
                        </form>
                        </div>
                
                        <div class="contact-form">
                            <form id="contact-form" method="POST" action="assets/php/login-from-database.php">
                                <input name="username" type="text" tabindex="6"  class="form-control"placeholder="Username"><br>
                                <input name="password"  type="password" tabindex="7" class="form-control" placeholder="Passwort"><br>
                                <input class="button" type="submit" tabindex="8" value="Login">
                            </form>
                        </div>'
                    );
                }
            ?>
                
    </body>
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
<!------------------------------------------------------- FOOTER ---------------------------------------------------->      
<footer>
        <ul class="footer-nav">
            <a href="/login-logout/index.php#home"><li>Home</li></a>
            <a href="/login-logout/index.php#about"><li>About</li></a>
            <a href="/login-logout/index.php#skills"><li>Skills</li></a>
            <a href="/login-logout/index.php#career"><li>Career</li></a>
            <a href="/login-logout/index.php#contact"><li>Contact</li></a>
            <a href="/login-logout/index.php#game"><li>Game</li></a>
            <a href="/login-logout/data.php"><li>Data</li></a>
        </ul>
        <p>&copy; 2019</p>
    </footer>
</body>
</html>