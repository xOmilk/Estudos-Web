<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['number1']) && isset($_GET['number2'])) {
        $numero1 = $_GET['number1'];
        $numero2 = $_GET['number2'];

        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $mult = $numero1 * $numero2;
        $div = $numero1 / $numero2;
?>

        <p>Numeros: <?= "$numero1 & $numero2" ?></p>
        <div class="result">
            <p>Soma: <?= $soma ?></p>
            <p>Subtração: <?= $subtracao ?></p>
            <p>Multiplicação: <?= $mult ?></p>
            <p>Divisão: <?= $div ?></p>

        </div>
<?php
    }
}
?>