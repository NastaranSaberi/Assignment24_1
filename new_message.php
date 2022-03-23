<?php 

    include "database.php";

    $name = $_POST["name"];
    $text = $_POST["text"];

    mysqli_query($connection , "INSERT INTO messages(name,text) VALUES('$name','$text')");
    
    header("Location:index.php");

?>