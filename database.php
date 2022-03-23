<?php
    
    $connection = mysqli_connect("localhost","root","root","happy_family");
    mysqli_query($connection,"SET CHARACTER SET utf8");

    if(mysqli_connect_errno() == 0)
    {
        //print("ok");
    }
    else
    {
        print("khata");
        print(mysqli_connect_error());
    }
?>