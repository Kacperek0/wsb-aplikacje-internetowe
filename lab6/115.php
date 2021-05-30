<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plane Generator</title>
</head>

<body>
    <form action="115.php" method="post">
        <table>
            <?php
            for ($i = 1; $i <= 34; $i++) {
                print('<tr>');
                for ($j = 'A'; $j <= 'F'; $j++) {
                    if ($i == 13) {
                        continue;
                    } else {
                        print('<td><input type="button" value="'. $i . $j . '"</td>');
                    }
                }
                print('</tr><br>');
            }
            ?>
        </table>
    </form>
</body>

</html>
