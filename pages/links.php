<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<body class="header">
    <!--this the navbar of our website-->
    <nav>
        <ul>
            <?php
            $home = "../pages/home.php";
            $gallery = "../pages/gallery.php";
            $resume = "../pages/resume.php";
            $feedBack = "../pages/feedback_.php";
            $contact = "../pages/contactus.php";
            $colDept = "../pages/Collage Departments.php";

            echo " <li><a href='" . $home . "'>Home</a></li>";
            echo " <li><a href='" . $colDept . "'>Collage Departmets</a></li>";
            echo " <li><a href='" . $gallery . "'>Gallery</a></li>";
            echo " <li><a href='" . $resume . "'>Resume</a></li>";
            echo " <li><a href='" . $feedBack . "'>Feedback</a></li>";
            echo " <li><a href='" . $contact . "'>Contact us</a></li>";
            ?>
        </ul>
    </nav>


</body>