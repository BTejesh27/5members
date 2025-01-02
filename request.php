<?php

include 'connect.php';


if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $year = $_POST["year"];

    $son = $_POST["son"];
    $mess = $_POST["mess"];






    $sql = "INSERT INTO request ( `name`, `year`, `son`, `message`) VALUES ('$name',  '$year' ,  '$son',  '$mess')";

    if ($conn->query($sql) === TRUE) {
        echo "Request sent successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
