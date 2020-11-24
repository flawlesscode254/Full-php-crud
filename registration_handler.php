<?php
if (isset($_POST['register_button'])){
    $jina = $_POST['user'];
    $email_address = $_POST['email_address'];
    $admission_number = $_POST['admission_number'];

    // Connecting to the database
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
        // Proceed to save data
        // To save data, create an insert query
        $insert_query = "INSERT INTO `members`(`id`, `name`, `email_address`, `admission_number`) VALUES (null,'$jina','$email_address','$admission_number')";
        // To complete the saving, use the mysqli query method
        $save = mysqli_query($connection, $insert_query);
        // Check if the saving was successful
        if ($save){
            echo "Member registered successfully";
        }else{
            echo "Member registration failed";
        }
    }
}
