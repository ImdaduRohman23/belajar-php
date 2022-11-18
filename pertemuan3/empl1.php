<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emplemetasi 1</title>
</head>

<body>
    <h3>Cara Manual</h3>
    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <td>3,3</td>
        </tr>
    </table>
    <hr>
    <hr>

    <h3>Dengan Looping Biasa</h3>
    <table border="1" cellpadding='10' cellspacing='0'>
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 3; $j++) {
                echo "<td>$i, $j </td>";
            }
            echo '</tr>';
        }
        ?>
    </table>
    <hr>
    <hr>

    <h3>Dengan Looping Templating</h3>
    <table border="1" cellpadding='10' cellspacing='0'>
        <?php for ($i = 1; $i <= 3; $i++) { ?>
        <tr>
            <?php for ($j = 1; $j <= 3; $j++) { ?>
            <td>
                <?php echo "$i , $j" ?>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>

</html>