<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <p><a href="knihaForm.php"> Vkládání nových knih </a></p>
    <p><a href="seznamKnih.php"> Seznam všech knih </a></p>
    <p><a href="vyhledavaniKnihForm.php"> Vyhledávaní knih </a></p>
    <br>
    <?php
    if (!($con = mysqli_connect("localhost", "librarian", "******", "library"))) {
        die("Nelze se připojit k databázovému serveru!</body></html>");
    }
    mysqli_query($con, "SET NAMES 'utf8'");
    if (mysqli_query(
        $con,
        "INSERT INTO books(ISBN, nameAuth, surnameAuth, book, bookDescription) VALUES('" .
            htmlspecialchars(addslashes($_POST["ISBN"])) . "', '" .
            htmlspecialchars(addslashes($_POST["nameAuth"])) . "', '" .
            htmlspecialchars(addslashes($_POST["surnameAuth"])) . "', '" .
            htmlspecialchars(addslashes($_POST["book"])) . "', '" .
            htmlspecialchars(addslashes($_POST["bookDescription"])) . "')"
    )) {
        echo "Úspěšně vloženo.";
    } else {
        echo "Nelze provést dotaz. " . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
</body>

</html>