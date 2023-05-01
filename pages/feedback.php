<!DOCTYPE html>
<html>

<body>
    <!--PHP code to insert new user into database-->
    <?php


    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $Major = $_POST['Major'];
    $rate = $_POST['rate'];
    $Know_us = $_POST['Know_us'];
    $massage = $_POST['massage'];


    if (
        !empty($fullname) || !empty($email) || !empty($Major) ||
        !empty($rate) || !empty($Know_us) || !empty($massage)
    ) {


        $host = 'localhost';
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "fcit_19";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


        if (mysqli_connect_error()) {
            die('ConnectError(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            /*to make sure the email dosn't exsit on our database*/
            $SELECT = "select * from form where Email='$email';";
            $res = mysqli_query($conn, $SELECT);

            if (mysqli_num_rows($res) > 0) {

                $row = mysqli_fetch_assoc($res);

                if ($email == isset($row['Email'])) {
                    echo "already registered";
                }
            } else {
             $INSERT = "INSERT Into form (Full_Name, Email, Major, Rate, Know_us, Massage) values('$fullname', 
            '$email','$Major', '$rate', '$Know_us', '$massage');";
                $data_check = mysqli_query($conn, $INSERT);
                if ($data_check) {
                    echo "<script>;
                    alert('Thanks, we received your feedback');
                    window.location.href='feedback_.php';</script>";
                } else {
                    echo "Failed while inserting data into database!";
                }

                $conn->close();

            }
        }
    } else {
        echo "All field are required";
        die();
    }


    ?>
</body>

</html>