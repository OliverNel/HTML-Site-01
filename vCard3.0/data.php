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
                    <table class="database_content">
                        <tr>
                            <th>ID</th> 
                            <th>Name</th>
                            <th>EMail</th>
                            <th>Betreff</th>
                            <th>Nachricht</th>
                        </tr>
                        <?php
                            $i = 1;
                            $pdo = new PDO('mysql:host=localhost;dbname=website', 'root', '');
                            $sql = "SELECT Vorname, Nachname, EMail, Betreff, Nachricht FROM contact";
                                foreach ($pdo->query($sql) as $row) {   
                                    echo "<tr>"."<td>"."$i:"."</td>"."<td>".$row['Vorname']." ".$row['Nachname']."</td>"."<td>".$row['EMail']."</td>"."<td>".$row['Betreff']."</td>"."<td>".$row['Nachricht']."</td>"."</tr>";
                                    $i++;
                                }
                        ?> 
                    </table>
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