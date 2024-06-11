<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi oleh Alfini dan 21110020053</title>
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

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            font-size: 1.5rem;
            /* Adjusted font size */
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #1c1c1c;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }

        .btn-primary,
        .btn-secondary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-primary::after,
        .btn-secondary::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.15);
            transition: all 0.75s ease-out;
            border-radius: 50%;
            z-index: 1;
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.1);
        }

        .btn-primary:hover::after,
        .btn-secondary:hover::after {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .form-control {
            border-radius: 15px;
            transition: all 0.3s ease;
            background-color: #2c2c2c;
            color: #ffffff;
            border: 1px solid #555;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .form-group label {
            font-weight: bold;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: fadeInUp 0.5s ease-out;
        }

        .form-control,
        .btn-primary,
        .btn-secondary {
            position: relative;
        }

        .form-control::after,
        .btn-primary::after,
        .btn-secondary::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            border-radius: inherit;
        }

        .form-control:hover::after,
        .btn-primary:hover::after,
        .btn-secondary:hover::after {
            opacity: 1;
        }

        .header,
        .form-control,
        .btn-primary,
        .btn-secondary {
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.5);
        }

        @media (max-width: 576px) {
            .header {
                font-size: 1.2rem;
                /* Further adjusted for small screens */
                padding: 15px;
            }

            .card {
                padding: 15px;
            }

            .form-group label {
                font-size: 0.9rem;
            }

            .btn-primary,
            .btn-secondary {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="header">
            <h1>Form Edit Prodi</h1>
        </div>
        <div class="card">
            <form action="<?= site_url('prodi/perbarui/' . $prodi->id_prodi) ?>" method="post">
                <div class="form-group">
                    <label for="kode_prodi">Kode</label>
                    <input type="text" class="form-control" name="kode_prodi" id="kode_prodi" value="<?php echo $prodi->kode_prodi ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_prodi">Nama prodi</label>
                    <input type="text" class="form-control" name="nama_prodi" id="nama_prodi" value="<?php echo $prodi->nama_prodi ?>" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
                <a href="#" onclick="window.history.back()" class="btn btn-secondary btn-block mt-3">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap
</body>

</html>