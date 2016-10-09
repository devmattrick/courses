<html>
    <head>
        <title>CodeSchool - About</title>
        
        <link rel="icon" type="x-icon/image" href="#">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Lato|Raleway:400,700|Comfortaa" rel="stylesheet">
        
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <?php include("partials/nav.php"); ?>
        <div class="page-wrap">
            <main>
                <div class="jumbotron">
                    <div class="container">
                        <h1>About Us</h1>
                    </div>
                </div>
                <div class="container">
                    
                    <nav class="secondNavbar">
                        <div class="container">
                            <a href="/" class="brand">
                                &lt;/&gt; CodeSchool
                            </a>
                            <div class="nav-toggle-wrapper">
                                <div class="nav-toggle">
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <ul class="snavItems">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#team">Our Team</a></li>
                                <li><a href="#sponsors">Sponsors</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <section id="team">
                        <h1>Meet the Team</h1>
                        <div class="flex-row">
                            <div class="flex-col">
                                <img src="https://i.imgur.com/jVIlGtD.png">
                                <h1>TheLightDev</h1>
                                <h2>Designer</h2>
                            </div>
                            <div class="flex-col">
                                <img src="https://i.imgur.com/sOuMxQf.png">
                                <h1>mattrick</h1>
                                <h2>Backend Developer & Designer</h2>
                            </div>
                            <div class="flex-col">
                                <img src="https://i.imgur.com/hQO609L.png">
                                <h1>Jeff</h1>
                                <h2>His Name is Jeff</h2>
                            </div>
                        </div>
                        <div class="flex-row">
                            <div class="flex-col">
                                <img src="https://i.imgur.com/QnX2mfJ.png">
                                <h1>Hugh Mungus</h1>
                                <h2>Has Awesome Name</h2>
                            </div>
                            <div class="flex-col">
                                <img src="https://i.imgur.com/eLteSAS.png">
                                <h1>Mr. Skeltal</h1>
                                <h2>doot doot</h2>
                            </div>
                            <div class="flex-col">
                                <img src="https://i.imgur.com/sQrsHd2.png">
                                <h1>Doge</h1>
                                <h2>much code. very wow.</h2>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
            <?php include("partials/footer.php"); ?>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>