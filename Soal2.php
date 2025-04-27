<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Soal 2: Tabel Perkalian 1-10</h1>
    <div class="container">
        <table>
            <tr>
                <th>Bilangan</th>
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<th>$i</th>";
                    }
                ?>
            </tr>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<th>$i</th>";
                    for ($j = 1; $j <= 10; $j++) {
                        $hasil = $i * $j;
                        $warna = ($i == 1 || $j == 1) ? 'kuning' : 'biru';
                        echo "<td class='$warna'>$hasil</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        <br><br>
        <a href="Biodata.php">Lihat Siapa yang Buat 🌸</a>
        <a href="Soal1.php">Ini Jawaban Soal Nomor 1</a>
        <a href="Soal2.php">Ini Jawaban Soal Nomor 2</a>
    </div>
</body>
</html>