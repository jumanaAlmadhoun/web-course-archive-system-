<!DOCTYPE html>
<html>

<body>

    <?php


    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];



    if (!empty($fullname) && !empty($email) && !empty($password) && !empty($confirmpassword)) {
        if ($password !== $confirmpassword) {
            echo "<script>;
                            alert('Confirm password not matched!');
                            window.location.href='createAccount.html';
                            
                          </script>";
        }


        $host = 'localhost';
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "fcit_19";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


        if (mysqli_connect_error()) {
            die('ConnectError(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $SELECT = "select * from registration where Email='$email';";
            $res = mysqli_query($conn, $SELECT);

            if (mysqli_num_rows($res) > 0) {

                $row = mysqli_fetch_assoc($res);

                if ($email == isset($row['Email'])) {
                    echo "<script>;
                    alert('already registered');
                    window.location.href='createAccount.html';
                </script>";
                }
            } else {
                $INSERT = "INSERT Into registration (Full_Name, Email, Password_) values('$fullname', '$email','$password');";
                $data_check = mysqli_query($conn, $INSERT);
                if ($data_check) {
                    echo "<script>;
                    alert('Account created succsfually');
                    window.location.href='home.php';
                </script>";
                 
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