<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <?php for ($i = 1; $i <= 20; $i++) : ?>
        Bilangan <?= $i ?>: <input type="number" name="number<?= $i ?>"><br>
    <?php endfor; ?>
    <input type="submit" name="submit" value="Hitung">

</form>

    <?php
if (isset($_POST['submit'])){
    $numbers = [];
    for ($i = 1; $i <= 20; $i++) {
        if (isset($_POST["number$i"])) {
            $number = floatval($_POST["number$i"]);
            array_push($numbers, $number);
        }
    }

    if (!empty($numbers)) {
        $count = count($numbers);
        $max = max($numbers);
        $min = min($numbers);
        $sum = array_sum($numbers);
        $average = $sum / $count;

        echo "Bilangan Terbesar: $max <br>";
        echo "Bilangan Terkecil: $min <br>";
        echo "Rata-rata Bilangan: $average";
    } else {
        echo "Tidak ada bilangan yang dimasukkan.";
    }
}
?>

</body>
</html>