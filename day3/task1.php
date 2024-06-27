<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <P>
        Aplication name :AAST_BIG class registration
    </P>
    <P style="color:red">* Required Fields.</P>

    <form method="get" action="<?php $_php_self ?>">
        <table>
            <tbody>
                <tr>
                    <td class="form"> <label for="name"> name:</label></td>
                    <td>
                        <input type="text" id="fname" name="name" >
                        <?php if(empty($_GET['name'])){echo"<span style='color:red'>*name is required</span>";}?>
                    </td>
                </tr>
                <tr>
                    <td class="form"> <label for="email">E-mail:</label></td>
                    <td>
                        <input type="text" id="email" name="email" >
                        <?php if(empty($_GET['email'])){echo"<span style='color:red'>*email is required</span>";}?>
                    </td>
                </tr>
                <tr>
                    <td class="form"> <label for="Group">Group :</label></td>
                    <td> <input type="text" id="Group" name="Group"> </td>
                </tr>


                <tr>
                    <td class="form"> <label for="Class">Class details :</label></td>
                    <td>
                        <textarea name="message" rows="10" cols="30"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="form">
                        <label for="Gender">Gender :</label>
                    </td>
                    <td> <input type="radio" id="male" name="Gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="Gender" value="female">
                        <label for="female">Female</label>
                        <?php if(empty($_GET['gender'])){echo"<span style='color:red'>*gender is required</span>";}?>
                    </td>
                </tr>
                <tr>
                    <td class="form"> <label for="Courses">Select Courses :</label></td>

                    <td> <select id="courses" name="courses[]" size="4" multiple>
                            <option value="PHP">PHP</option>
                            <option value="java Script">java Script</option>
                            <option value="MySQL">MySQL</option>
                            <option value="HTML">HTML</option>
                    </td>
                </tr>

            </tbody>
        </table>
        <br>
        <span style="margin-right: 70px;">agree</span> <input style="display:inline ;" name="check" type="checkbox">
        <?php if(empty($_GET['check'])){echo"<span style='color:red'>*you should agree</span>";}?>
        <br><br>

        <input style="display: inline;" type="submit" value="submit">
        <button type="reset">reset</button>
    </form>
</body>

</html>
<?php
if (!empty($_GET["name"] && $_GET["email"] && $_GET["Gender"] && $_GET["check"])) {
    echo "Name: " . $_GET["name"] . "<br>";
    echo "Email: " . $_GET["email"] . "<br>";
    echo "Group: " . $_GET["Group"] . "<br>";
    echo "Message: " . $_GET["message"] . "<br>";
    echo "Gender: " . $_GET["Gender"] . "<br>";
    $selectedCourses = $_GET['courses'];
    echo "Selected courses: " . implode(', ', $selectedCourses) . "<br>";
    echo "agree: " . $_GET["check"] . "<br>";
}
?>