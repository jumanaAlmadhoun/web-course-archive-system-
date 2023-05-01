<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IS Projects</title>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css" media="screen" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>


</head>

<body>
    <!--header-->
    <div class="logodiv">
        <?phpecho '<a href="home.php"><img class="logo" src="../image/logo.png" alt="Logo"/></a>';?>
    </div>

    <div>
        <?php include '../pages/links.php'; ?>
    </div>

    <div class="head">
        <h1 id="headText">IS Senior Projects</h1>
    </div>

    <div class="report">
        <!--to retrive IS department Projects-->
        <?php
        $dbh = new PDO("mysql:host=localhost;dbname=fcit_19", "root", "");
        $stat = $dbh->prepare("select * from reports where depart='IS'");
        $stat->execute();
        while ($row = $stat->fetch()) {
            echo "<div id=\"tray\">
           
            <a id=\"project\"target='_blank' href='view.php?id=" . $row['id'] . "'>" . $row['name'] . "</a>
            
          
            </div>";
        }
        ?>
    </div>
    <!--footer-->
    <div>
        <?php include "../pages/footer.php"; ?>
    </div>
</body>

</html>