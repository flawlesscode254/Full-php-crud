<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h3>Updating records</h3>
    <?php
        if(isset($_GET['my_id'])){
            //Now receive the data coming from the update form
            $received_id = $_GET['my_id'];
            $received_name = $_GET['my_name'];
            $received_email = $_GET['my_email'];
            $received_admission = $_GET['my_admission'];
        }
    ?>
<form action="update_handler.php" method="POST">
        <label for="name">
            <input type="text" placeholder="Update name" name="user" value="<?php echo $received_name; ?>">
            <br>
            <br>
            <br>
        </label>
        <label for="email address">
            <input type="email" placeholder="Update email address" name="email_address" value="<?php echo $received_email; ?>">
            <br>
            <br>
            <br>
        </label>
        <label for="admission number">
            <input type="text" placeholder="Update admission number" name="admission_number" value="<?php echo $received_admission; ?>">
            <br>
            <br>
            <br>
        </label>
        <input type="hidden" name="my_id" value="<?php echo $received_id; ?>">
        <input type="submit" value="Update" name="update_button">
        <br>
        <br>
        <a href="members.php">Back</a>
</body>
</html>