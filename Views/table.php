<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment</title>

        <link rel="stylesheet" href="/public/dist/style.css">
    </head>
    <body>
        <h1>CSV Compiled</h1>
        <table>
            <tr>
                <?php $i = 0; ?>
                <?php foreach ($vars[0][$i] as $row) { ?>
                    <th><?php echo $row; ?></th>
                <?php } $i++; ?>
            </tr>
                <?php for ($i; $i < (count($vars[0]) - 1); $i++) { ?>
                    <tr>
                    <?php if (!is_bool($vars[0][$i])) { ?>
                        <?php foreach ($vars[0][$i] as $row) { ?>
                        <td><?php echo $row; ?></td>
                        <?php } ?>
                    <?php } ?>
                    </tr>
                <?php } ?>
        </table>
    </body>
</html>