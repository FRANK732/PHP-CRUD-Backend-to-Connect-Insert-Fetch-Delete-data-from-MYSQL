
<?php
require "dbconnection.php";

if(isset($_POST['submit'])){
    #Declare a variable to take the user input
    $task = $_POST['myInput'];

    $insert = $dbcon->prepare("INSERT INTO dbconn1.tasks(name) VALUES (:name)");
    $insert->execute([
        ':name'=>$task
    ]);

    header("location:index.php");
}

?>