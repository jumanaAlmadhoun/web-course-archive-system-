<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <script src="../JS/email.js"></script>
    <title>Contact Us</title>
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
        <h1 id="headText">Contact Us</h1>
    </div>
    <hr>

    <!--––content––-->
    <div class="Contact_Us">
        <table class="ta" rules="groubs">
            <thead>
                <th>Name</th>
                <th>Student ID</th>
                <th>E-mail</th>
            </thead>

            <tr>
                <td>Noha Abbas Sukkar</td>
                <td>1906817</td>
                <td id=email1></td>
            </tr>

            <tr>
                <td>Jumana Mahmoud Almadhoun</td>
                <td>1911188</td>
                <td id=email2></td>
            </tr>

        </table>


    </div>
    <!--––footer––-->
    <div>
        <?php include "../pages/footer.php"; ?>
    </div>

</body>


<Script>
    var emails = scrambleEmail();
    var email1 = document.getElementById("email1");
    email1.innerHTML = `Email : ${emails.noha}`;
    console.log(email1);

    var email2 = document.getElementById("email2");
    email2.innerHTML = `Email : ${emails.jumana}`;
    console.log(email2);


</Script>

</html>