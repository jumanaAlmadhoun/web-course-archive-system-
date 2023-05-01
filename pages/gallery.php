<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../JS/gallery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Gallery</title>
</head>

<body>
    <!--––header––-->
    <div class="logodiv">
        <?phpecho '<a href="home.php"><img class="logo" src="../image/logo.png" alt="Logo"/></a>';?>
    </div>

    <div>
        <?php include '../pages/links.php'; ?>
    </div>


    <div class="head">
        <h1 id="headText">Computer Evolution Gallery</h1>
    </div>



    <!--––content––-->
    <div class="temp">
        <div class="galleryImg">
            <img id="selImg" src="../image/1.jpg" alt="Images" />
        </div>

        <!--buttons-->
        <div class="buttons">
            <img src="../image/left-arrow.png" alt="Left Arrow" class="lfBT" onclick="prev()">
            <img src="../image/right-arrow.png" alt="Right Arrow" class="rtBT" onclick="next()">
        </div>
    </div>

    <ul class="thumbs">
        <li onclick="thumbsChange(1)">
            <img src="../image/1.jpg" alt="First Img" />
        </li>
        <li onclick="thumbsChange(2)">
            <img src="../image/2.jpg" alt="Second Img" />
        </li>
        <li onclick="thumbsChange(3)">
            <img src="../image/3.jpg" alt="third Img" />
        </li>
        <li onclick="thumbsChange(4)">
            <img src="../image/4.jpg" alt="fourth Img" />
        </li>
        <li onclick="thumbsChange(5)">
            <img src="../image/5.jpg" alt="fifth Img" />
        </li>
        <li onclick="thumbsChange(6)">
            <img src="../image/6.jpg" alt="sixth Img" />
        </li>
        <li onclick="thumbsChange(7)">
            <img src="../image/7.jpg" alt="seventh Img" />
        </li>

    </ul>
    <!--footer-->
    <div>
        <?php include "../pages/footer.php"; ?>
    </div>

</body>

</html>