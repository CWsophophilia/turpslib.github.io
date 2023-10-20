<?php

if (isset($_POST["submit"])){

    echo "<script>console.log('www');</script>";

    include "dbh.inc.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES ('$name','$email','$username','$pwd')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the insertion was successful
    if ($result) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection when done
    mysqli_close($conn);

}
else{
    header("location: signup.php");
    error_log("Something is wrong when signing up.");
    echo 'wrong!';
}



?>