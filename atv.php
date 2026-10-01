<?php

echo "<h1>ATV 1</h1>" . "<br>";

date_default_timezone_set('America/Sao_Paulo');

echo date("d/m/y") . "<br>";

$amanha = strtotime('+1 day');
echo date("d/m/y", $amanha) . "<br>";

$ontem = strtotime('-1 day');
echo date("d/m/y", $ontem) . "<br>";


echo "<h1>ATV 2</h1>" . "<br>";

echo date("d/m/y") . "<br>";

$vinte = strtotime('-25 day');
echo date("d/m/y", $vinte) . "<br>";


echo "<h1>ATV 3</h1>" . "<br>";

echo date("d/m/y") . "<br>";

$quinze = strtotime('-15 day');
echo date("d/m/y", $quinze) . "<br>";


echo "<h1>ATV 4</h1>" . "<br>";

if (isset($_POST['calcular_data'])) {

    $data1 = strtotime($_POST['d1']);
    $data2 = strtotime($_POST['d2']);

    $dias = abs($data2 - $data1) / 86400;

    echo "Diferença: " . $dias . " dias.<br>";
}

?>

<form method="POST">
    <input type="date" name="d1" required>
    <input type="date" name="d2" required>

    <input type="submit" name="calcular_data" value="Calcular">
</form>


<?php

echo "<h1>ATV 5</h1>" . "<br>";

if (isset($_POST['calcular_hora'])) {

    $hora1 = strtotime($_POST['h1']);
    $hora2 = strtotime($_POST['h2']);

    $segundos = abs($hora2 - $hora1);

    echo "Diferença: " . $segundos . " segundos.<br>";
}

?>

<form method="POST">
    <input type="time" name="h1" required>
    <input type="time" name="h2" required>

    <input type="submit" name="calcular_hora" value="Calcular">
</form>


<?php

echo "<h1>ATV 6</h1>" . "<br>";

date_default_timezone_set('America/Sao_Paulo');

$dataAtual = date("Y-m-d");

echo "Data atual: " . date("d/m/Y") . "<br>";

if (isset($_POST['calcular_vencimento'])) {

    $vencimento = $_POST['vencimento'];

    echo "Data de vencimento: " . date("d/m/Y", strtotime($vencimento)) . "<br>";

    $atual = strtotime($dataAtual);
    $dataVencimento = strtotime($vencimento);

    $diferenca = ($dataVencimento - $atual) / 86400;

    if ($diferenca > 0) {

        echo "Ainda não venceu.<br>";
        echo "Faltam " . $diferenca . " dias.";

    } elseif ($diferenca == 0) {

        echo "O prazo vence hoje.";

    } else {

        echo "O prazo já venceu.<br>";
        echo "Está atrasado há " . abs($diferenca) . " dias.";
    }
}

?>

<form method="POST">

    <input type="date" name="vencimento" required>

    <input type="submit" name="calcular_vencimento" value="Verificar">

</form>
