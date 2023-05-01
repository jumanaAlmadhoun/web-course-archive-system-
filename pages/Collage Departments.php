<!doctype html>
<!--
Students Name:
1-Jumana Almadhoun 191188
2- Noha Sukker 1906817
Seection: B9A
Date: 17-10-2022 
-->
<html>

<head>
    <meta charset="utf-8">
    <!--the title of pafe-->
    <title>College Departments</title>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/print.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


    <div>

        <div class="logodiv">
            <?phpecho '<a href="home.php"><img class="logo" src="../image/logo.png" alt="Logo"/></a>';?>
        </div>

        <div>
            <?php include '../pages/links.php'; ?>
        </div>

    </div>

    <div class="head">
        <h1 id="headText">Departments</h1>
    </div>
    <div class="tablecon">
        <table class="tg">
            <caption>College Departments Description </caption>
            <thead>
                <tr>
                    <!--we marge first row cells-->
                    <th class="tg-7apv" colspan="3"><span style="font-weight:bold"> Collage Departments </span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-3xi5">CS</td>
                    <td class="tg-3xi5" rowspan="3"><br><br><br><br>Description </td>
                    <td class="tg-3xi5">A specialization that integrates theoretical and scientific computer basics with
                        its
                        applications, <br>which provides us with deep and focused knowledge of how the computer works,
                        <br>and about programming, as well as tools and techniques for solving problems.
                    </td>
                </tr>
                <tr>
                    <td class="tg-3xi5"> IT </td>
                    <td class="tg-3xi5">A specialization that highlights the creation of technical solutions that help
                        us<br> in the work environment. Doesn't care too much<br>The theoretical details of the way the
                        computer works, but it is more concerned<br> with the way to use the technologies in the work
                        environment.<br></td>
                </tr>
                <tr>
                    <td class="tg-3xi5">IS</td>
                    <td class="tg-3xi5">A specialization concerned with the study of technology from an
                        administrative<br>
                        perspective and combines the basics of computer science with information technology <br>with
                        management in the end. Create and improve the work environment in institutions and organizations
                    </td>
                </tr>
            </tbody>
        </table>
    </div>




    <!-- We use a grid system on css to structure the page easily -->
    <div class="container_collage_depart">
        <!--the first block of the grid-->
        <a href='../pages/CS.php' class="box1_CD">
            <div class="content_CD"> CS </div>
        </a>
        <!--the sec block of the grid-->
        <a href="../pages/IT.php" class=box2_CD>
            <div class="content_CD"> IT </div>
        </a>
        <!--the third part -->
        <a href='../pages/IS.php' class="box3_CD">
            <div class="content_CD"> IS </div>
        </a>
    </div>

    <div>
        <?php include "../pages/footer.php"; ?>
    </div>



</body>

</html>