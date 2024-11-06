<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKLEP</title>
    
</head>
<body>
<form action="index2.php" method="POST" target="_blank">
        <p>Cena koszulek: 24,43zł netto</p>
        <p>Cena spodni: 30zł netto</p>
        <p>Cena czapki: 19,89zł netto</p><br>

        <p>ilość zamówionych koszulek:
            <input type="number" name="koszulki" min="0" value="0">
        </p><br>
        <p>ilość zamówionych spodni:
            <input type="number" name="spodnie" min="0" value="0">
        </p><br>
        <p>ilość zamówionych czapek:
            <input type="number" name="czapki" min="0" value="0">
        </p><br>

        <input type="submit" name="submit" value="Złóż zamówienie">
    </form>


</body>
</html>