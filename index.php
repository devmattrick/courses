<?php $homepage = true; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeSchool</title>
        
        <link rel="icon" type="x-icon/image" href="#">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#2c3e50">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Lato|Raleway:400,700|Comfortaa" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body id="home">
        <?php include("partials/nav.php"); ?>
        
        <section class="masthead">
            <div class="container">
                <h1>Start your future career in programming</h1>
                <form action="courses.php" method="GET">
                    <div class="input-group">
                        <input name="q" type="text" placeholder="Search our online courses...">
                        <button type="submit"><i class="material-icons">search</i></button>
                    </div>
                </form>
            </div>
            <video class="masthead-bg" src="media/background.mp4" autoplay loop></video>
        </section>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>