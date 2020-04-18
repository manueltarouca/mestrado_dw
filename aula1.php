<html>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo '<form action="aula1.php" method="post">
        n1: <input type="number" name="n1"><br>
        n2: <input type="number" name="n2"><br>
        <input type="submit">
    </form>';
    } else {
        $soma = $_POST["n1"] + $_POST["n2"];
        echo "A soma é: [" . $soma . "].";
    }
    ?>

</body>

</html>