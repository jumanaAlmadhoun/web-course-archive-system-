<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>
<!--this page contine frame to display navbar vedio and  footer-->

<body style="margin: 0; text-align: center;">
    <div>
        <!--header-->
        <div class="logodiv">
            <?phpecho '<a href="home.php"><img class="logo" src="../image/logo.png" alt="Logo"/></a>';?>
        </div>

        <div class="header">
            <?php include '../pages/links.php'; ?>
        </div>
        <!--video-->
        <?php include "../pages/video.php"; ?>
    </div>
    <!--footer-->
    <div>
        <?php include "../pages/footer.php"; ?>
    </div>
    </div>

</body>

</html>