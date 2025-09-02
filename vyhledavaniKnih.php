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
    $varISBN = addslashes($_POST["ISBN"]);
    $varNameAuth = addslashes($_POST["nameAuth"]);
    $varSurnameAuth  = addslashes($_POST["surnameAuth"]);
    $varBook = addslashes($_POST["book"]);
    $con = mysqli_connect("localhost", "librarian", "******", "library");
    if ($varISBN == '' &&  $varNameAuth == '' && $varSurnameAuth == '' &&  $varBook == '') {
        die("Musí být vyplněno alespoň jedno vyhledávací kritérium!<body></html>");
    }
    if (!$con) {
        die("Nelze se připojit do databáze<body></html>");
    }
    mysqli_query($con, "SET NAMES 'utf8'");

    $dotaz = "SELECT ISBN, nameAuth, surnameAuth, book, bookDescription FROM books WHERE ISBN IS NOT NULL";
    if ($varISBN != '') {
        $dotaz .= " AND ISBN LIKE '$varISBN'";
    }

    if ($varNameAuth != '') {
        $dotaz .= " AND nameAuth LIKE '$varNameAuth'";
    }

    if ($varSurnameAuth != '') {
        $dotaz .= " AND surnameAuth LIKE '$varSurnameAuth'";
    }

    if ($varBook != '') {
        $dotaz .= " AND book LIKE '$varBook'";
    }

    if (!($vysledek = mysqli_query($con, $dotaz))) {
        die("Nelze provést dotaz.</body></html>");
    }
    ?>
    <h2>Nalezené knihy:</h2>
    <table border="1">
        <?php
        while ($radek = @mysqli_fetch_array($vysledek)) { ?>
            <h4><?php echo $radek["book"]; ?></h4>
            <dl>
                <dt>ISBN:</dt>
                <dd><?php echo $radek["ISBN"]; ?></dd>
                <dt>Jméno autora:</dt>
                <dd><?php echo $radek["nameAuth"]; ?></dd>,
                <dt>Příjmení autora:</dt>
                <dd><?php echo $radek["surnameAuth"]; ?></dd>
            </dl>
            <p><?php echo $radek["bookDescription"]; ?></p>
        <?php
        }
        mysqli_free_result($vysledek);
        mysqli_close($con);
        ?>
    </table>
</body>

</html>