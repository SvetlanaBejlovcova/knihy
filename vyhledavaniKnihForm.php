<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="vyhledavaniKnih.php" method="POST">
        <p><a href="knihaForm.php"> Vkládání nových knih </a></p>
        <p><a href="seznamKnih.php"> Seznam všech knih </a></p>
        <br>
        <h2>Vyhledávání knih:</h2>
        Příjmení autora:
        <input name="surnameAuth" type="text"><br>
        Křestní jméno autora:
        <input name="nameAuth" type="text"><br>
        Název knihy:
        <input name="book" type="text"><br>
        ISBN:
        <input name="ISBN" type="text"><br>
        <input type="submit" value="Zobrazit">
    </form>
</body>

</html>