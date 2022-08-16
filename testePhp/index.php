<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de PHP</title>
</head>

<body>
    <form method="post" style="margin-left:39%;">
        Numero Inteiro <input type=text name=valor><br><br>
        <input type=submit value="Calcular"><br>
    </form><br>
    <?php
    if ($_POST) {
        $valor = $_POST['valor'];
        $total = 0;
        for ($i = 0; $i < $valor; $i++) {
            if ($i % 3 == 0) {
                $total = $total + $i;
            } else if ($i % 5 == 0) {
                $total = $total + $i;
            }
        }
        echo "<div style=margin-left:39%;>" . $total;
    }
    ?>
</body>

</html>