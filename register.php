<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="registration_handler.php" method="POST">
        <label for="name">
            <input type="text" placeholder="Enter name" name="user">
            <br>
            <br>
            <br>
        </label>
        <label for="email address">
            <input type="email" placeholder="Enter email address" name="email_address">
            <br>
            <br>
            <br>
        </label>
        <label for="admission number">
            <input type="text" placeholder="Enter admission number" name="admission_number">
            <br>
            <br>
            <br>
        </label>
        <input type="submit" value="Register" name="register_button">
        <br>
        <br>
        <a href="members.php">View Members</a>
    </form>
</body>
</html>