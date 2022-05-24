# Tugas Lab 9 Web

## Profil
| # | Biodata |
| -------- | --- |
| **Nama** | Reza Riyaldi Irawan |
| **NIM** | 312010284 |
| **Kelas** | TI.20.A.2 |
| **Mata Kuliah** | Pemrograman Web |

## Langkah 1 `Persiapan`
1. Buat file baru bernama `header.php`, lalu tambahkan kode berikut.

```html
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
```

2. Buat file baru bernama `footer.php`, lalu tambahkan kode berikut.

```html
        <footer>
            <p>&copy; 2022 - Informatika @ Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>

</html>
```

3. Buat file baru bernama `home.php`, lalu tambahkan kode berikut.

```php
<?php require "header.php"; ?>

<div class="content">
    <h2>Halaman Home</h2>
    <p>Selamat datang di halaman home.</p>
</div>

<?php require "footer.php"; ?>
```

4. Buat file baru bernama `about.php`, lalu tambahkan kode berikut.

```php
<?php require "header.php"; ?>

<div class="content">
    <h2>Halaman About</h2>
    <p>Selamat datang di halaman about.</p>
</div>

<?php require "footer.php"; ?>
```

5. Buat file baru bernama `kontak.php`, lalu tambahkan kode berikut.

```php
<?php require "header.php"; ?>

<div class="content">
    <h2>Halaman kontak</h2>
    <p>Selamat datang di halaman kontak.</p>
</div>

<?php require "footer.php"; ?>
```

6. Agar tampilan menarik tambahkan sedikit style.

```css
* {
    padding: 0;
    margin: 0;
    font-family: "Roboto", sans-serif;
}

nav {
    width: 100%;
    background-color: rgb(41, 41, 41);
    padding: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
}

nav > a {
    text-decoration: none;
    color: white;
    padding: 10px;
    margin: 10px 5px;
    border-radius: 5px;
}

nav > a:hover, nav > a.active{
    background-color: crimson;
}

header {
    text-align: center;
    padding: 30px;
}

header code {
    color: crimson;
}

.content {
    background-color: rgb(165, 165, 165);
    color: white;
    width: 90%;
    margin: auto;
    padding: 20px;
    border-radius: 5px;
}

.content h2 {
    margin-bottom: 20px;
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: crimson;
    text-align: center;
    padding: 20px 0;
    color: white;
}
```

7. Maka hasilnya akan seperti berikut.
    - Halaman Home
    ![Home](img/ss-home.png)

    - Halaman About
    ![About](img/ss-about.png)

    - Halaman Kontak
    ![Contact](img/ss-kontak.png)