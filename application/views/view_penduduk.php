<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Penduduk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table style="width:100%">

    <?php foreach($penduduk as $penduduk2) { ?>
        <tr>
            <th>No</th>
            <th>Nama</th> 
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
        <tr>
            <td><?php echo $penduduk2->No ?></td>
            <td><?php echo $penduduk2->Nama ?></td> 
            <td><?php echo $penduduk2->Alamat ?></td>
            <td><?php echo $penduduk2->Telepon ?></td>
        </tr>
        </table>
    <?php } ?>
</body>
</html>