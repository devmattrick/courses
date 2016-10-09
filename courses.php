<?php

    //Load courses; either based on a query or all of 'em ;)

    $courses = json_decode(file_get_contents("data/courses.json"));
    
    $results;
    
    $query = $_GET["q"];
    if (isset($query) && $query != "") {
        
        $results = array();
        foreach ($courses as $key=>$course) {
            if (strpos(strtolower($course->name), strtolower($query)) !== false) {
                $results[$key] = $course;
            } 
        }
    }
    else {
        $results = $courses;
    }

?>

<html>
    <head>
        <title>CodeSchool - Courses</title>
        
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
                        <h1>Our Courses</h1>
                        <form method="GET">
                            <div class="input-group">
                                <input name="q" type="text" placeholder="Search our online courses..." value="<?php echo htmlspecialchars($query); ?>">
                                <button type="submit"><i class="material-icons">search</i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <?php if ($results == null) { ?>
                        <h1>We couldn't find any courses matching your query :/</h1>
                        <a href="/courses.php">View all courses?</a>
                    <?php } ?>
                    
                    
                    
                    <div class="courses">
                        <?php foreach ($results as $key=>$result) { ?>
                        
                        <!-- Custom Course -->
                    <div class="courseItem">
                        <div class="courseImage">
                            <img src="<?php echo $result->backgroundImage; ?>">
                        </div>
                        <div class="courseHeader">
                            <p><?php echo $result->name; ?></p>
                            <span><?php echo $result->description; ?></span>
                        </div>
                        <div class="courseInfo">
                            <span class="meta"><i class="material-icons">people</i> <?php echo $result->students; ?> Enrolled</span>
                            <span class="meta rating">
                                <?php for ($i = 1.0; $i <= 5.0; $i += 1) { ?>
                                    <?php if($i <= $result->rating) { ?>
                                        <i class="material-icons">star</i>
                                    <?php } else { ?>
                                        <?php if (floor($result->rating) != $result->rating && floor($result->rating) - $i == -1) { ?>
                                            <i class="material-icons">star_half</i>
                                        <?php } else { ?>
                                            <i class="material-icons">star_border</i>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </span>
                        </div>
                        <a href="course.php?id=<?php echo $key; ?>" class="courseButton">See More</a>
                    </div>
                        <?php } ?>
                    </div>
                </div>
            </main>
            <?php include("partials/footer.php"); ?>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>