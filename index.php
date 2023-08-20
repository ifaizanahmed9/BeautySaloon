<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beauty Saloon</title>

</head>

<body>
    <center>
        <h1> Contact Us </h1>

        <form action="insert.php" method="post">

            <p>
                <label for="Full Name"> Full Name: </label>
                <br>
                <input type="text" name="full_name" id="FullName" cols="25" rows="25" required>
            </p>

            <p>
                <label for="PhoneNumber"> Phone Number: </label>
                <br>
                <input type="text" name="phone_number" id="PhoneNumber" cols="25" rows="25" required>
            </p>

            <p>
                <label for="emailAddress"> Email: </label>
                <br>
                <input type="text" name="email" id="emailAddress" cols="25" rows="25" required>
            </p>


            <p>
                <label for="Subject"> Subject: </label>
                <br>
                <input type="text" name="subject" id="Subject" cols="25" rows="25" required>
            </p>


            <p>
                <label for="Message"> Message: </label>
                <br>
                <input type="text" name="message" id="Message" cols="25" rows="25" required>
            </p>



            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>