<?php
    // Replace the following values with your actual database information
    $servername = "localhost";
    $username = "db_username";
    $password = "db_password";
    $dbname = "db_name";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the submitted data from the form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);

    // Execute the prepared statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Check if the user exists and if the password matches
    if ($result->num_rows > 0) {
        // If the user is found and the password matches, redirect to the desired page
        header("Location: welcome.php");
    } else {
        // If the user does not exist or the password is incorrect, redirect back to the login page with an error message
        header("Location: login.html?error=invalid");
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
?>