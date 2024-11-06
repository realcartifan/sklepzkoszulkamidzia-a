<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKLEP</title>
</head>
<body>


    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

       
        $cenakoszulki = 24.43;
        $cenaspodnie = 30;
        $cenaczapki = 19.89;

        
        $ilosckoszulki = isset($_POST['koszulki']) ? (int)$_POST['koszulki'] : 0;
        $iloscspodnie = isset($_POST['spodnie']) ? (int)$_POST['spodnie'] : 0;
        $iloscczapki = isset($_POST['czapki']) ? (int)$_POST['czapki'] : 0;

        $nettokoszulka = $ilosckoszulki * $cenakoszulki;
        $nettspodni = $iloscspodnie * $cenaspodnie;
        $nettokoszulkaCzapki = $iloscczapki * $cenaczapki;

        $sumaneto = $nettokoszulka + $nettspodni + $nettokoszulkaCzapki;

        echo "<br><h2>Podsumowanie zamówienia</h2>";
        echo "Cena netto zamówionych koszulek: " . number_format($nettokoszulka, 2, ',', ' ') . " zł<br>";
        echo "Cena netto zamówionych spodni: " . number_format($nettspodni, 2, ',', ' ') . " zł<br>";
        echo "Cena netto zamówionych czapek: " . number_format($nettokoszulkaCzapki, 2, ',', ' ') . " zł<br>";

      
        $bruttok = $nettokoszulka * 1.22;
        $bruttos = $nettspodni * 1.22;
        $bruttoc = $nettokoszulkaCzapki * 1.22;

        
        $sumab = $bruttok + $bruttos + $bruttoc;

       
        echo "Cena brutto koszulek: " . number_format($bruttok, 2, ',', ' ') . " zł<br>";
        echo "Cena brutto spodni: " . number_format($bruttos, 2, ',', ' ') . " zł<br>";
        echo "Cena brutto czapek: " . number_format($bruttoc, 2, ',', ' ') . " zł<br>";
        echo "Suma brutto zamówienia: " . number_format($sumab, 2, ',', ' ') . " zł<br>";
    }
    ?>
</body>
</html>

