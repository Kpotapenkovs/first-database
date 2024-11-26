<?php

include 'connect.php';


    $result = $conn->query("SELECT * FROM users");

    echo"<br>";

    $data = $result->fetch_assoc();

    var_dump($data);

    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users 
        (username, pasword) 
        VALUES
        ('$username', '$password')";
        $conn->query($sql);
    }



    echo "<form method='POST'>";
    echo "<lable>lietotājvārds<input type='text' name='username' /></lable>";
    echo "<br>";
    echo "<lable>parole<input type='password' name='password'/></lable>";
    echo "<br>";
    echo "<lable><input type='submit' value='reg' /> </lable>";
    echo "</form>";