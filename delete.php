<?php
require "dbconnection.php";

if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];

    $delete =$dbcon->prepare("DELETE FROM dbconn1.tasks WHERE id=?;
    SET @autoid=0; 
    UPDATE dbconn1.tasks SET id=@autoid :=(@autoid + 1);
    ALTER TABLE dbconn1.tasks AUTO_INCREMENT = 1;
    ");

    $delete->execute(array(
        $id
    ));

    header ("location:index.php");
}#We're using the get method

?>