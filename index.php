<?php
require "dbconnection.php";

$data =$dbcon ->query("SELECT * FROM dbconn1.tasks");


?>

<!DOCTYPE html>
<html>
    <head>
        <title>DBconnections</title>
        <link rel="stylesheet" href="style.css">
    </head>


    <body>
        <!--Creating a div container-->
        <div class="container">
            <form id="Tasks" method="POST" action="insert.php" class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <h3 >Create Your Tasks Here</h3>
                    <fieldset>
                    <input type="text" name="myInput" class="form-control" id="inputID" placeholder="Type your task">
                </fieldset>
                </div>
                <fieldset>
                <button type="submit" name="submit" class="btn btn-primary mb-2" >Create</button> 
            </fieldset>
            </form>
            <table class="table"><!--Create table to display our data-->
                <thead>
                    <tr><!--Rows-->
                        <!--table Headers-->
                        <th>#</th>
                        <th>task</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody><!---Creating Table body-->
                <?php while ($row=$data->fetch(PDO::FETCH_OBJ)):;#Yo can also fetch as an array?>
                    <tr>
                        <td><!--Table Data--><?php echo $row->id;?></td><!--Data fetched will be displayed here later-->
                        <td><?php echo $row->name;?></td>
                        <td><a class="btn-danger" href="delete.php?del_id=<?php echo $row->id;?>">delete</a></td><!--Delete.php will be created later-->
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
            
        </div>
        

    </body>
</html>