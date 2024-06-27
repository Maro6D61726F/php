<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "table";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

echo 'Connected successfully<br>';
?>
 
 <?php
// $query_file = 'sql_query.sql';

// $fp = fopen($query_file, 'r');
// $sql = fread($fp, filesize($query_file));
// fclose($fp);

// //select
// mysqli_select_db($conn , $db_name);

// $retval = mysqli_query($conn, $sql);

// if(! $retval) {
//     die('Could not create table: ' . mysqli_connect_error($retval));
// }

// echo "<br>Database Table  created successfully\n";
// mysqli_close($conn);
?>

<?php
if (isset($_POST['submit'])) {
    // Retrieve and sanitize inputs
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $stat = isset($_POST['mail']) && $_POST['mail'] == 'on' ? 'yes' : 'no';

    $sql = "INSERT INTO user (Name, Email, Gender, MailStatus) VALUES ('$name', '$email', '$gender', '$stat')";
    $retval = mysqli_query($conn, $sql);

    if (!$retval) {
        die('Could not insert to table: ' . mysqli_error($conn));
    }

    echo "<br>Data inserted to table successfully\n";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data into Database</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="border: 2px solid black; padding: 20px; border-radius: 10px; width: fit-content; margin: auto;">
<h2>Insert Data into Database</h2>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td><label for="email">E-mail:</label></td>
                <td><input type="text" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td><label>Receive mail from us:</label></td>
                <td><input type="checkbox" id="mail" name="mail"></td>
            </tr>
        </tbody>
    </table>
    <br>
    <input type="submit" name="submit" value="Submit">
    <button style="cursor: pointer;">
        <a href="./table.php">USER TABLES</a>
    </button>
</form>
    
</body>
</html>

<?php
mysqli_close($conn);
?>
