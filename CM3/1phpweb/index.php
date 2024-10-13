<?php

    $serverName = "localhost";
    $username = "root";
    $pass = "12345678";
    $dbName = "registration";

    $conn = mysqli_connect($serverName, $username, $pass, $dbName);

    // Check connection
    if ($conn == false) {
        die("Error: " . mysqli_connect_error());
    } else {
        // Print "Connect successfully" if the connection is successful
        echo "Connect successfully\n";
      
        // Close the connection
        mysqli_close($conn);
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
</head>

<body>
    <div class="container">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <div class="modal-body">
            <form action="process_form.php/" method="POST">
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="fullName">Full Name</label>
                    <input type="text" name="full_name" id="fullName" placeholder="Enter your full name" required="">
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="emailid">Email Address</label>
                    <input type="email" name="email" id="emailid" placeholder="Enter your email address" required="">
                </div>
               
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" placeholder="Create Password" required="">
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="mess">Message</label>
                    <input type="text" name="message" id="mess" required="">
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
