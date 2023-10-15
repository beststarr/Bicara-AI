<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $conn = new mysqli('localhost', 'root', '', 'registration');
    if($conn->connect_error) {
        die('Connection Failed: ' .$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into registration(Name, Email, Password) 
            values(?, ?, ?)");
        $stmt->bind_param("sss", $Name, $Email, $Password);
        $stmt->execute();
        echo "Thank You";
        $stmt->close();
        $conn->close();
        }
?>