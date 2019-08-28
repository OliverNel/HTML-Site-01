<!DOCTYPE HTML>
<html>
<!------------------------------------------------------- DEFINITION ------------------------------------------------> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        
        <title>DATA | vCard 3.0 | Meine Website</title>

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
                <a href="#home"><img src="assets/images/logo.png" alt="LOGO"></a> 
            </div>
            <nav class="main-nav">
                <div class="toggleOpen"> 
                    <i class="fas fa-bars" aria-hidden="true"></i>                    
                </div>
                <div class="toggleOpen">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </div>
                <ul class="nav-item">
                    <a href="/vCard3.0/index.html#home"><li>Home</li></a>
                    <a href="/vCard3.0/index.html#about"><li>About</li></a>
                    <a href="/vCard3.0/index.html#skills"><li>Skills</li></a>
                    <a href="/vCard3.0/index.html#career"><li>Career</li></a>
                    <a href="/vCard3.0/index.html#contact"><li>Contact</li></a>
                    <a href="/vCard3.0/index.html#game"><li>Game</li></a>
                    <a href="/vCard3.0/data.php"><li>Daten</li></a>
                </ul>
            </nav>
        </header>
            <div class="main-content"> <!---main-contnet ANFANG-->
                <h1>Daten der Datenbank</h1>

                <div class="row">
                    <div class="column">  
                        <a href="database-contact.php"><button class="auswahl">Inhalte der Kontakt-Anfragen</button></a>
                    </div>
                    <div class="column">
                        <a href="database-login.php"><button class="auswahl">Inhalte der User</button></a>
                    </div>
                </div>


            </div> <!-----------------------main-contnet ENDE-->
        <!------------------------------------------------------- FOOTER ---------------------------------------------------->      
        <footer>
                    <ul class="footer-nav">
                        <a href="#home"><li>Home</li></a>
                        <a href="#about"><li>About</li></a>
                        <a href="#skills"><li>Skills</li></a>
                        <a href="#career"><li>Career</li></a>
                        <a href="#contact"><li>Contact</li></a>
                        <a href="#game"><li>Game</li></a>
                        <a href="/vCard3.0/data.php"><li>Data</li></a>
                    </ul>
                    <p>&copy; 2019</p>
        </footer>
    </body>
</html>