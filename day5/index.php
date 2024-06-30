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
    <a href="./page2.php" style="font-size:larger"><b> Go to Page 2 </b></a>
    
    <form action="index.php" method="post">
        <table>
            <tr>
            <br>
                <td><label><b>USER:</b></label></td>
                <td><input type="text" name="user"></td>
            </tr>
        </table>
        <br>
        <button type="submit" name="make" style="border-radius:10px ; font-size:large"> make the user cookie </button>
        <button onclick="deleteCookie('user')" style="border-radius:10px ; font-size:large"> Delete user cookie </button>
        <br>
        <script>
            function deleteCookie(name) {
                document.cookie = name + '=; Max-Age=-99999999; path=/';
            }
        </script>
        <?php
        if (isset($_POST['make'])) {
            if (!empty($_POST["user"])) {
                $_SESSION["S_user"] = $_POST["user"];
                setcookie("user", $_SESSION["S_user"], time() + 86400 * 3, "/");
                echo '<br> user is ' . $_SESSION["S_user"];
            }
        }

        $_SESSION['name'] = "S1";
        isset($_SESSION['view']) ? $_SESSION['view']++ : $_SESSION['view'] = 1;
        echo '<br>'.'<b>'. $_SESSION['name'] . " Views: <span style=\"color:red\">" . $_SESSION['view'].'</span></b>';

        ?>

    </form>

</body>

</html>