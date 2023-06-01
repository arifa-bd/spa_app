<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Spa application </title>
</head>

<body>

    <table border="0" width="100%" height="600px">

        <tr>
            <td colspan="2" height="100px">
                <h1> Single Page Application </h1>
            </td>
        </tr>

        <tr>
            <td width="20%">
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </td>
            <td width="80%">
                <?php
                if (spaGet('page')) {
                    $page = spaGet('page');
                    include_once "views/$page.php";
                } else {
                    include_once "views/home.php";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" height="100px">
                &copy; 2023 Kauniaweb
            </td>
        </tr>

    </table>


</body>

</html>