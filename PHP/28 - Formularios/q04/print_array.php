<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['number1']) && isset($_GET['number2'])) {

        $numero1 = $_GET['number1'];
        $numero2 = $_GET['number2'];
        if ($numero1 > $numero2) {
            $maior = $numero1;
            $menor = $numero2;
        } else {
            $maior = $numero2;
            $menor = $numero1;
        }

        $array_list = [];
        for ($i = $menor; $i <= $maior; $i++) {
            array_push($array_list, $i);
        }
?>
        <p>Numeros entre <?= "$menor & $maior" ?></p>
        <p><?= implode(', ', $array_list) ?></p>

<?php
    }
}
?>