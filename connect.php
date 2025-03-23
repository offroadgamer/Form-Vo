<?php
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    
    $conn = new mysqli('localhost', 'root', '', 'formvo');

    if (mysqli_connect_error()){
        die('Connection Error');
    } else {
        $sql = "INSERT INTO svarinfo (firstname, lastname, email)
        values ('$firstname', '$lastname', '$email')";
        if ($conn->query($sql)){
            echo "Success!";
        } else {
            echo "Something went wrong...";
        }
        $conn->close();
    }
?>