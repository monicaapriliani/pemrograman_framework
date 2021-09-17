<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img {
        width: 250px;
    }
    </style>
</head>

<body>
    <?php
     $nim = 192520041;
     $nama = "Monica Apriliani";
     $alamat = "Lampung";
     $alamat_email = "monicaaprilianima@gmail.com";
     $bidang_minat = "Aktivis";
?>
    <p> Identitas Diri </p>
    <img src="monica.jpeg" alt="">
    <p> NIM : <?php echo $nim;?> </p>
    <p> Nama : <?php echo $nama;?> </p>
    <p> Alamat : <?php echo $alamat;?> </p>
    <p> Alamat Email : <?php echo $alamat_email;?> </p>
    <p> Bidang Minat : <?php echo $bidang_minat;?> </p>
</body>

</html>