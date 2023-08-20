<!DOCTYPE html>
<html>

<head>
    <title> Insert Page </title>
</head>

<body>
    <center>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database= "test";
        $conn = mysqli_connect("$servername", "$username", "$password", "$database");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect, Try Again. ". mysqli_connect_error());
        }

       
        $full_name = $_REQUEST['full_name'];
        $phone_number = $_REQUEST['phone_number'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        $time_stamp = date('Y-m-d H:i:s');
        $ip_address = $_SERVER['REMOTE_ADDR'];

       

        $sql = "INSERT INTO contact_form VALUES ( '$full_name','$phone_number','$email','$subject','$message', '$time_stamp', '$ip_address')";

        if (mysqli_query($conn, $sql)){
            echo "<h3>Thank You!,   $full_name for Contacting Us. We will Get in touch with you Soon",...."Have a Good Day";

        } 
        
        else{
            echo "ERROR: Hush! Sorry... You are allowed to fill only once & Cannot Submit Duplicate Form Data. <br> "
                . mysqli_error($conn);
        }

        
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
