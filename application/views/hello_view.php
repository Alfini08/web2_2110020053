<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello Alfini - 211002053</title>
</head>

<body>
    <h1>Selamat Datang di Web Alfini <?= $nama; ?> - <?= $npm; ?></h1>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>

</body>

</html>