<?php
$active = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Modularisasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav>
            <a href="home.php" class="<?= $active == 'home' ? 'active' :''?>">Home</a>
            <a href="about.php" class="<?= $active == 'about' ? 'active' :''?>">Tentang</a>
            <a href="kontak.php" class="<?= $active == 'kontak' ? 'active' :''?>">Kontak</a>
        </nav>
        <header>
            <h1>Modularisasi menggunakan <code>require</code></h1>
        </header>