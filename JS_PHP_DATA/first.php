<?php 
include './data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    table {
        width: 50%;
        border: 1px solid #000;
        border-collapse: collapse;
        margin: 20px auto;
    }

    td {
        border: 1px solid #000;
        padding: 5px;
        text-align: center;
    }
    </style>
</head>

<body>
    <a href="./JS_PHP_DATA/data.php"></a>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>tel</td>
        </tr>
        <?php foreach ($Fake_data as $key => $value) : ?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['tel']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>