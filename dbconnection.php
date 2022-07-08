<?php

#Using try and catch to knw the result

try{
    #Declare all the four default variable(host,password,username, databasename) with their entries
    $host = "localhost";
    $databasename = "dbconn1"; #we will create the table later
    $password = "";#Enter your password if you have one
    $username = "root";
    
    #Initialize the connection variable
    $dbcon = new PDO("mysql: host= $host; $databasename","$username","$password");
    $dbcon -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // #print something to know the connection is successful
    // echo "SUCCESSFUL";

}catch(PDOException $e){
    
    #print the error message
    
    echo $e-> getMessage();    
}

?>