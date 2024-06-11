<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mahasiswa oleh Alfini dan 2110020053</title>
</head>

<body>
    <h1>Selamat datang di web Alfini metode result</h1>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>