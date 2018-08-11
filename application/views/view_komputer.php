<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Komputer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table style="width:100%">
    <?php foreach ($komputer as $isi) { ?>
        <tr>
            <th>tipe</th>
            <th>tahun</th>
            <th>spec</th>
        </tr>
        <tr>
            <td><?php echo $isi->tipe ?></td>
            <td><?php echo $isi->tahun?></td>
            <td><?php echo $isi->spec?></td>
        </tr>
</table>
   <?php } ?>
</body>
</html>