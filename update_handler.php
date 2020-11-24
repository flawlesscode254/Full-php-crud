<?php

if (isset($_POST['update_button'])){
    //Start receiving the updated data
    $updated_name = $_POST['user'];
    $updated_email = $_POST['email_address'];
    $updated_admission = $_POST['admission_number'];
    $received_id = $_POST['my_id'];

    $host = "localhost";
            $user = "root";
            $password = "";
            $db = "class_members";
        
            // Connect
            $connection  = mysqli_connect($host,$user,$password,$db);
        
            // Check if the connection was successful
            if (!$connection){
                die("Connection failed!!");
            }else {
                //update the db
                //prepare the update query
                $update_query = "UPDATE `members` SET `name`='$updated_name',`email_address`='$updated_email',`admission_number`='$updated_admission' WHERE `id`='$received_id'";
                $update = mysqli_query($connection, $update_query);
                if(!$update){
                    echo "Update Failed!!";
                }else{
                    echo "Update Successful!!";
                }
            }
}
