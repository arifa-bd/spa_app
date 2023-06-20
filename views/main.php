<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Spa application </title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>

<body>

<table border="0" width="100%" height="600px">

<tr>
    <td colspan="2" height="100 px">
    <h4 class="logo">SPA APPLICATION</h4>
    </td>
</tr>
   
<tr>
    <td>
    <?php loadView('partial/header'); ?>   
</td>
        <tr>
            <td width="20%">
                <?php loadView('partial/sidebar'); ?>
            </td>
            <td width="80%">
                <?php loadController(); ?>
            </td>

        <tr>
            <td colspan="2" height="100px">
                <?php loadView('partial/footer'); ?>
            </td>
        </tr>

    </table>

</body>

</html>