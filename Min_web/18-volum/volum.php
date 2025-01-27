<?php
$bredde = $_GET['bredde'];
$lengde = $_GET['lengde'];
$max_volum = 0;
$optimal_hoyde = 0;

function beregnVolum($h, $bredde, $lengde) {
    return max(($bredde - 2 * $h) * ($lengde - 2 * $h) * $h, 0);
}

for ($h = 0.1; $h <= min($bredde, $lengde) / 2; $h += 0.1) {
    $volum = beregnVolum($h, $bredde, $lengde);
    if ($volum > $max_volum) {
        $max_volum = $volum;
        $optimal_hoyde = $h;
    }
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>
    <h1>Resultat</h1>
    <h2>
        <?php
            echo "Maksimalt volum: $max_volum cm3  ved høyde: $optimal_hoyde cm";sss
        ?>
    </h2>
</body>
</html>