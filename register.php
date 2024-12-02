
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/fatimaalhamad_web2_part1/public/css/output.css'; ?>" rel="stylesheet">
    <link href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/fatimaalhamad_web2_part1/public/css/style.css'; ?>" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    
<?php
    $con = mysqli_connect("localhost", "root", "")
    or die("Could not connect to the server.<br>" . mysqli_connect_error());

    mysqli_select_db($con, 'foodyfood')
    or die("Could not connect to the DB.<br>" . mysqli_error($con));

    // Collect data from form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $street = $_POST['street'];

    // SQL query to insert data
    $sql = "INSERT INTO user (firstName, lastName, email, password, address, street) 
            VALUES ('$firstName', '$lastName', '$email', '$password', '$address', '$street')";

    // Execute the query and give feedback
    if(mysqli_query($con, $sql)) {
        // Success message
        echo '
            <div style="background-color: #d4edda; color: #155724; padding: 20px; margin: 20px auto; width: 50%; border-radius: 10px; text-align: center; font-family: Arial, sans-serif;">
                <h2>Registration Successful!</h2>
                <p>Your account has been created successfully. You can now <a href="login.php" style="color: #007bff; text-decoration: none;">login</a> to explore more.</p>
                <a class="text-orange-500 font-medium hover:text-orange-600 transition-colors duration-300" href="/index.html">back to home</a></button>
            </div>
        ';
    } else {
        // Error message
        echo '
            <div style="background-color: #f8d7da; color: #721c24; padding: 20px; margin: 20px auto; width: 50%; border-radius: 10px; text-align: center; font-family: Arial, sans-serif;">
                <h2>Oops! Something went wrong.</h2>
                <p>There was an error while creating your account. Please try again later or <a href="register.php" style="color: #007bff; text-decoration: none;">go back</a> to the registration page.</p>
            </div>
        ';
    }

    // Close the connection
    mysqli_close($con);
?>
</body>
</html>
