<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
</head>

<body>
	<p><a href="seznamKnih.php"> Seznam všech knih </a></p>
	<p><a href="vyhledavaniKnihForm.php"> Vyhledávaní knih </a></p>
	<br>
	<form method="POST" action="kniha.php">
		<h2>Vkládání nových knih:</h2>
		ISBN:
		<input name="ISBN" type="text"><br>
		Křestní jméno autora:
		<input name="nameAuth" type="text"><br>
		Příjmení autora:
		<input name="surnameAuth" type="text"><br>
		Název knihy:
		<input name="book" type="text"><br>
		Popis:
		<textarea name="bookDescription"></textarea>
		<input type="submit" value="Vložit">
	</form>
</body>

</html>