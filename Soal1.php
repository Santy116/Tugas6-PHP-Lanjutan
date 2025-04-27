<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Soal 1: Menampilkan Bilangan Genap 1-10</h1>
    <div class="container">
        <?php
            for ($i = 1; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo "<span class='genap'>$i </span>";
                }
            }
        ?>
        <br><br>
        <a href="Biodata.php">Lihat Siapa yang Buat 🌸</a><br>
        <a href="Soal1.php">Ini Jawaban Soal Nomor 1</a><br>
        <a href="Soal2.php">Ini Jawaban Soal Nomor 2</a>
    </div>
</body>
</html>