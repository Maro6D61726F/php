<?php
include("students.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="redd.css">

</head>

<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Track</th>
        </thead>

        <tbody>
            <?php for ($i = 0; $i < count($students); $i++) { ?>
                <tr style="color:<?php echo ($students[$i]['track'] == "CMS") ? "red" : "black" ?>">
                    <td><?php echo $students[$i]['name'] ?></td>
                    <td><?php echo $students[$i]['email']  ?></td>
                    <td><?php echo $students[$i]['track'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>