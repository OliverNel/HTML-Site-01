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
                    <a href="#home"><li>Home</li></a>
                    <a href="#about"><li>About</li></a>
                    <a href="#skills"><li>Skills</li></a>
                    <a href="#career"><li>Career</li></a>
                    <a href="#contact"><li>Contact</li></a>
                    <a href="#game"><li>Game</li></a>
                    <?php
                        if (isset($_SESSION['u_id'])) {
                           echo ('<a href="/login-logout/data.php"><li>Daten</li></a> ');
                           echo ('<a href="/login-logout/login.php"><li>Profil</li></a> ');
                        }
                        else {
                            echo ('<a href="/login-logout/login.php"><li>Login / Registrieren</li></a> ');
                        }
                        
                    ?>
                    
                </ul>
            </nav>
        </header>
        <div class="main-content"> <!---main-contnet ANFANG-->
<!------------------------------------------------------- HOME ------------------------------------------------------> 
            <section id="home" class="home">
                <h1>Oliver Neller</h1>
                <h2>Fachinformatiker f&uuml;r Systemintegration</h2>
                <div class="row">
                    <div class="column">
                        <a href="#about"><img src="assets/images/about.png" alt="About"></a>  
                    </div>
                    <div class="column">
                        <a href="#skills"><img src="assets/images/skills.png" alt="skills"></a>  
                    </div>
                    <div class="column">
                        <a href="#career"><img src="assets/images/career.png" alt="career"></a>  
                    </div>
                    <div class="column">
                        <a href="#contact"><img src="assets/images/contact.png" alt="contact"></a>  
                    </div>
                    <div class="column">
                        <a href="#game"><img src="assets/images/game.png" alt="game"></a>  
                    </div>
                </div>
                <div class="picture">
                    <a href="#about"><img src="assets/images/down-arrow.png" alt="arrow-down" class="arrow"></a>
                </div>
                
            </section>
<!------------------------------------------------------- ABOUT -----------------------------------------------------> 
            <section id="about" class="about">
                <h3>About</h3>
                <hr>
                <div class="row">
                    <div class="column1">
                        <div class="picture-box">
                            <a href="/vCard2.0/assets/images/about.png"><img src="assets/images/about.png" alt="About"></a>
                        </div>
                        
                        <h4>About Me</h4>
                        <hr>
                        <p>
                            Ich hei&szlig;e Oliver Neller und bin 18 Jahre alt. Ich bin ein Familien Mensch und liebe Motorrad fahren. Ich finde es schön unter freunden zu sein.
                            Ich mache meine Ausbildung seid dem 01.09.2018 bei "Getriebebau Nord" als Fachinformatiker f&uuml;r Systemintegration und habe viel Spaß draran.
                            Ich durchlaufe dort verschiedene Abteilungen um die Firmenzusammenhänge zu verstehen und kennenzulernen.
                        </p>  
                    </div>
                    <div class="column2">
                        <div class="picture-box">
                            <a href="/vCard2.0/assets/images/hobbys.png"><img src="assets/images/hobbys.png" alt="Hobbys"></a> 
                        </div>
                        
                        <h4>My Hobbys</h4>
                        <hr>
                        <div class="listeHobby">
                            <ul>
                                <li>
                                    Meine Hobbys sind:
                                    <ul>
                                        <li>Feuerwehr</li>
                                        <li>Motorrad fahren</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                Was ich sonst so mache: 
                                    <ul>
                                        <li>Fu&szlig;ball spielen</li>
                                        <li>An Technik rumschrauben</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="picture">
                    <a href="#skills"><img src="assets/images/down-arrow.png" alt="arrow-down" class="arrow"></a>
                </div>
                
            </section>
<!------------------------------------------------------- SKILLS ----------------------------------------------------> 
            <section id="skills" class="skills">
                <h3>Skills</h3>
                <hr>
                <div class="picture">
                    <a href="/vCard2.0/assets/images/skills.png"><img src="assets/images/skills.png" alt="Skills"></a> 
                </div>
                
                <div class="row">
                    <div class="column">
                        <div class="picture-box">
                            <a href="/vCard2.0/assets/images/hardware.png"><img src="assets/images/hardware.png" alt="Hardware"></a>
                        </div>
                        
                        <h4>Hardware</h4>
                        <p>
                            Ich habe mit 8 meinen ersten Computer zusammengeschraubt und seid dem an ist mein Interesse an Computern immer mehr gewachsen. 
                            Ich baue unser Netzwerk bei uns zu Hause und habe einen eigenen Server wo ich Testen kann wie bestimmte dinge funktionieren.
                            Ich habe z.B ein Webserver mit einer Cloud aufgesetzt zusätlich noch eine Wiki und vieles weitere.
                        </p>
                    </div>
                    <div class="column">
                        <div class="picture-box">
                            <a href="/vCard2.0/assets/images/code.png"><img src="assets/images/code.png" alt="Code"></a>
                            </div>
                        <h4>Coding</h4>
                        <p>
                            Ich habe ein Praktikum im Bereich "Fachinformatiker für Anwendungsentwicklung" absolviert. Dort sollte ich C# benutzen. 
                            Persöhnlich versuche ich mich an HTML + CSS und durch das Praktikum auch in C#. Früher habe ich noch Visual Basic ausprobiert. 
                        </p>
                    </div>
                    <div class="column">
                        <div class="picture-box">
                           <a href="/vCard2.0/assets/images/helpdesk.png"><img src="assets/images/helpdesk.png" alt="Helpdesk"></a> 
                        </div>
                        <h4>Helpdesk</h4>
                        <p>
                            Ich habe zwei weitere Praktika absolviert in den Bereichen "Fachinformatiker für Systemintegration" und "Informatikkaufmann". 
                            In beiden Praktika haben die Mitarbeiter Helpdesk gemacht. Ich konnte mitlaufen und habe Betriebsysteme geupdatet und Hardware ausgetauscht.
                            Bei Nord musste ich mich mit Software technischen Problemen auseinander setzen. Ich habe dort viele Office probleme gelöst 
                            und ab und zu auch mal einen neuen Computer ausgeliefert. 
                        </p>  
                    </div>
                </div>
                <div class="picture">
                    <a href="#career"><img src="assets/images/down-arrow.png" alt="arrow-down" class="arrow"></a>
                </div>
                
            </section>
<!------------------------------------------------------- CAREER ----------------------------------------------------> 
            <section id="career" class="career">
                <h3>Career</h3>
                <hr>
                <div class="picture">
                    <a href="/vCard2.0/assets/images/career.png"><img src="assets/images/career.png" alt="career"></a>
                </div>
        
                <div class="timeline-dahmals"><p>2001</p></div>
                
                <div class="timeline">
                    <div class="container left">
                        <div class="content">
                            <h5>Grundschule</h5>
                            <p>Ab 2009 habe ich die Johannes Gutenberg Grundschule in Bargtehiede besucht.</p>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h5>Weiterführende Schule</h5>
                            <p>Ab 2013 wechselte ich dann auf die Dietrich Bonhhoeffer Gemeinschafts Schule in Bargtehiede.</p>
                        </div>
                    </div>
                    <div class="container left">
                            <div class="content">
                                <h5>Realschulabschuss</h5>
                                <p>2018 habe ich mein Realschulschluss dort gemacht.</p>
                            </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h5>Ausbildungsanfang bei NORD</h5>
                            <p> Am 01.09.2018 startete ich meine Ausbildung bei NORD als "Fachinformatiker für Systemintegration" 
                                und habe schon verschiedene Abteilungen durchlaufen.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-heute"><p>Heute</p></div>
                
                <div class="picture">
                    <a href="#contact" class=".arrow-a"><img src="assets/images/down-arrow.png" alt="arrow-down" class="arrow"></a>
                </div>
                
            </section>
<!------------------------------------------------------- CONTACT ---------------------------------------------------> 
            <section id="contact" class="contact">
                <h3>Contact</h3>
                <hr>   
                <div class="picture">
                    <a href="/vCard2.0/assets/images/contact.png"><img src="assets/images/contact.png" alt="Contact"></a> 
                </div>             
            
                <div class="contact-form">
                    <form id="contact-form" method="POST" action="assets/php/contact-form-database.php">
                        <input name="fname" type="text" tabindex="1" class="form-control" placeholder="Vorname"><br>
                        <input name="lname" type="text" tabindex="2" class="form-control" placeholder="Nachname"><br>
                        <input name="email" type="email" tabindex="3" class="form-control" placeholder="E-Mail" required><br>
                        <input name="subject" type="text" tabindex="4"  class="form-control"placeholder="Betreff"><br>
                        <textarea name="text" tabindex="5" class="form-control" placeholder="Nachrricht"></textarea><br>
                        <input class="button" type="submit" value="Senden">
                    </form>
                </div>
                <div class="picture">
                    <a href="#game" class=".arrow-a"><img src="assets/images/down-arrow.png" alt="down-up" class="arrow"></a>
                </div>
                
            </section>
<!------------------------------------------------------- GAME ------------------------------------------------------>
            <section id="game" class="game">
                <h3>Game</h3>
                <hr>
                <div class="picture">
                    <a href="/vCard2.0/assets/images/game.png"><img src="assets/images/game.png" alt="Game"></a> 
                </div>
                
                <h4>Tic-Tac-Toe</h4>
                
                <p class="resultat"></p>

                <table class="board">
                    <tr>
                        <td class="player-box" data-box="1" id="box1"></td>
                        <td class="player-box" data-box="2" id="box2"></td>
                        <td class="player-box" data-box="3" id="box3"></td>
                        <td class="player-box" data-box="4" id="box4"></td>
                    </tr>
                    
                    <tr>
                        <td class="player-box" data-box="5" id="box5"></td>
                        <td class="player-box" data-box="6" id="box6"></td>
                        <td class="player-box" data-box="7" id="box7"></td>
                        <td class="player-box" data-box="8" id="box8"></td>
                    </tr>
                    
                    <tr>
                        <td class="player-box" data-box="9" id="box9"></td>
                        <td class="player-box" data-box="10" id="box10"></td>
                        <td class="player-box" data-box="11" id="box11"></td>
                        <td class="player-box" data-box="12" id="box12"></td>
                    </tr>

                    <tr>
                        <td class="player-box" data-box="13" id="box13"></td>
                        <td class="player-box" data-box="14" id="box14"></td>
                        <td class="player-box" data-box="15" id="box15"></td>
                        <td class="player-box" data-box="16" id="box16"></td>
                    </tr>
                    
                </table>

                <button type="button" class="reset-btn" id="reset" name="button">RESET</button>

                <div class="picture">
                    <a href="#home" class="arrow-a"><img src="assets/images/up-arrow.png" alt="arrow-up" class="arrow"></a>
                </div>
                
            </section>          
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
                <a href="/login-logout/data.php"><li>Data</li></a>
            </ul>
            <p>&copy; 2019</p>
        </footer>
    </body>
</html>