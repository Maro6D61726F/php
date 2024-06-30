<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./index.php" style='font-size:large'><b> Go to Page 2</b></a>
    <br>
    <?php
    if (!empty($_SESSION["S_user"])) {
        echo '<b style=\'font-size:large\'>' . '<br>last user is ' . '<span style=\'color:green\'>' . $_SESSION["S_user"] . '</span></b><br>';
    }

    isset($_SESSION['view']) ? $_SESSION['view']++ : $_SESSION['view'] = 1;
    echo '<br>' . '<b>' . $_SESSION['name'] . " Views: <span style=\"color:red\">" . $_SESSION['view'] . '</span></b>';
    ?>
    <form action="page2.php" method="post">
        <br>
        <input type="submit" name="submit" value="destroy session" style="border-radius:10px ; font-size:large">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        session_destroy();
        header("location: index.php");
        exit;
    }

    ?>

</body>

</html>