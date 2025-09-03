<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <p><a href="knihaForm.php"> Vkládání nových knih </a></p>
    <p><a href="vyhledavaniKnihForm.php"> Vyhledávaní knih </a></p>
    <br>
    <?php
    if (!($con = mysqli_connect("localhost", "librarian", "******", "library"))) {
        die("Nelze se připojit k databázovému serveru!</body></html>");
    }
    mysqli_query($con, "SET NAMES 'utf8'");
    if (!($vysledek = mysqli_query($con, "SELECT ISBN, nameAuth, surnameAuth, book, bookDescription FROM books"))) {
        die("Nelze provést dotaz.</body></html>");
    }
    ?>
    <h2>Knihy:</h2>
    <?php
    while ($radek = mysqli_fetch_array($vysledek)) {
    ?>
        <h4><?php echo htmlspecialchars($radek["book"]); ?></h4>
        <dl>
            <dt>ISBN:</dt>
            <dd><?php echo htmlspecialchars($radek["ISBN"]); ?></dd>
            <dt>Jméno autora:</dt>
            <dd><?php echo htmlspecialchars($radek["nameAuth"]); ?></dd>
            <dt>Příjmení autora:</dt>
            <dd><?php echo htmlspecialchars($radek["surnameAuth"]); ?></dd>
        </dl>
        <p><?php echo htmlspecialchars($radek["bookDescription"]); ?></p>
    <?php
    }
    mysqli_free_result($vysledek);
    mysqli_close($con);
    ?>
</body>
</head>