<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Spa application </title>
    <link rel="stylesheet" href="partial/style.css">
</head>

<body>
<?php
           include('partial/header.php');
           include('partial/sidebar.php');
            ?>
 
<table border="0" width="100%" height="600px">



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