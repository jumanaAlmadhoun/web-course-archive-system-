<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Resume</title>
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
        <h1 id="headText">Resume</h1>
    </div>
    <!--––content––-->
    <div class="cv">

        <table class="ta">
            <tr>
                <td>
                    <p> <b>Noha's CV</b> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <object data="../cv/Noha_Sukkar_Resume.pdf" width="85%" height="600" type="application/pdf">
                        <p>Something went wrong,Your browser night not support PDF.</p>
                    </object>
                </td>

            </tr>
            <tr>
                <td>
                    <br><br>
                    <hr>
                    <br><br>
                    <p> <b>Jumana's CV</b></p>
                </td>
            </tr>

            <tr>
                <td>
                    <object data="../cv/Jumana Almadhoun - Resume.pdf" width="85%" height="600" type="application/pdf">
                        <p>Something went wrong,Your browser night not support PDF.</p>
                    </object>
                </td>
            </tr>

        </table>


    </div>
    <!--footer-->
    <div>
        <?php include "../pages/footer.php"; ?>
    </div>

</body>

</html>