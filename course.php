<?php
    $courses = json_decode(file_get_contents("data/courses.json"));
    
    $result;
    
    $query = $_GET["id"];
    if (isset($query) && $query != "") {
        foreach ($courses as $key=>$course) {
            if ($key == $query) {
                $result = $course;
                break;
            } 
        }
    }

?>

<html>
    <head>
        <title>CodeSchool - </title>
        
        <link rel="icon" type="x-icon/image" href="#">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Lato|Raleway:400,700|Comfortaa" rel="stylesheet">
        
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body id="viewCourse">
        <?php include("partials/nav.php"); ?>
        <div class="page-wrap">
            <main>
                <div class="container">
                    <?php if ($result == null) { ?>
                        <h1>We couldn't find the course you are looking for :/</h1>
                        <a href="/courses.php">View all courses?</a>
                    <?php } else { ?>
                        <div class="course-wrapper">
                            <div class="sidebar">
                                <div class="course-icon" style="background-color: <?php echo $result->color; ?>;">
                                    <i class="material-icons"><?php echo $result->icon; ?></i>
                                </div>
                                <div class="course-meta">
                                    <p class="coursePrice">$ <?php echo $result->coursePrice; ?></p>
                                    <h2><i class="material-icons">people</i> <?php echo $result->students; ?> Enrolled</h2>
                                    <h2>
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
                                    </h2>
                                    <hr>
                                    <h2>Materials</h2>
                                    <ul>
                                        <?php foreach ($result->materials as $material) { ?>
                                            <li><?php echo $material; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="courseContent">
                                <h1><?php echo $result->name; ?></h1>
                                <p><?php echo $result->description; ?></p>
                                <video controls poster="<?php echo $result->backgroundImage; ?>">
                                    <source src="<?php echo $result->video; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="sidebar2">
                                <p class="courseSale">On Sale</p>
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </main>
            <?php include("partials/footer.php"); ?>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>