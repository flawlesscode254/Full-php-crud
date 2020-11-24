<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h3>Class Members</h3>
    <table>
        <tr>
            <th>Names</th>
            <th>Email Addresses</th>
            <th>Admission Numbers</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

        <?php
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
                // Start fetching data from the db
                // To fetch, prepare a select query
                $select_query = "SELECT * FROM `members` WHERE 1";
                // To get the actual data, execute the query using the mysqli_query method
                $members = mysqli_query($connection, $select_query);
                // Loop through the members to display them row after another
                while ($row = mysqli_fetch_assoc($members)){
                    extract($row);
                    echo "
                        <tr>
                            <td>$name</td>
                            <td>$email_address</td>
                            <td>$admission_number</td>
                            <td><a href='delete.php?my_id=$id'><button>Delete</button></a></td>
                            <td><a href='update.php?my_id=$id&my_name=$name&my_email=$email_address&my_admission=$admission_number'><button>Update</button></a></td>
                        </tr>
                    ";
                }
            }
        ?>

    </table>
</body>
</html>