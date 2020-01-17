<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr,th,td{
            border:1px solid black;
            padding: 10px 5px;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Key</th>
        <th>Value</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_POST as $key=>$g){ ?>
        <tr>
            <td> # </td>
            <td> <?php echo $key; ?> </td>
            <td> <?php echo $g; ?> </td>
        </tr>
    <?php } ?>
    </tbody>
    <pre><?php print_r($_FILES); ?></pre>
</table>
</body>
</html>

