<?php
if (isset($_GET['my_id'])){
    $receive_id = $_GET['my_id'];

    $host = "localhost";
            $user = "root";
            $password = "";
            $db = "class_members";
        
            // Connect
            $connection  = mysqli_connect($host,$user,$password,$db);
        
            // Check if the connection was successful
            if (!$connection){
                die("Connection failed!!");
            }else{
                //Start deleting
                // To delete, prepare the delete query
                $delete_query = "DELETE FROM `members` WHERE `id` = '$receive_id'";
                //Finally execute the deletion using the mysqli_query method
                $delete = mysqli_query($connection, $delete_query);
                if(!$delete){
                    echo "Deletion Failed!!";
                }else{
                    header("location:members.php");
                }
            }
}