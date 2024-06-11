<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mahasiswa oleh Alfini dan 2110020053</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #fff;
        }

        .glow {
            font-size: 1.5em;
            color: #ffffff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #00f, 0 0 20px #00f, 0 0 30px #00f, 0 0 40px #00f, 0 0 50px #00f, 0 0 60px #00f, 0 0 70px #00f;
            }

            to {
                text-shadow: 0 0 20px #00f, 0 0 30px #00f, 0 0 40px #00f, 0 0 50px #00f, 0 0 60px #00f, 0 0 70px #00f, 0 0 80px #00f;
            }
        }

        .table-container {
            width: 80%;
            margin: 0 auto;
            margin-top: 20px;
        }

        .table-header {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            /* Add gap between buttons */
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 2px solid #fff;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #2c2c2c;
        }

        .btn {
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
    </style>
</head>

<body>
    <h1 class="glow">Selamat Datang di Web Alfini</h1>
    <div class="container mt-4">
        <div class="table-container">
            <div class="table-header">
                <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-success mb-3">Tambah</a>
                <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn btn-primary mb-3" target="_blank">Cetak</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>Program Studi</th>
                        <th>AKSI</th>
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
                            <td><?php echo $row->nama_prodi ?></td>
                            <td>
                                <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>