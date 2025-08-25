<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['altura']) && isset($_GET['peso'])) {
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $imc = $peso / ($altura * $altura);

        if ($imc < 16) {
            $classificacao = "Magreza grave";
        } elseif ($imc < 17) {
            $classificacao = "Magreza moderada";
        } elseif ($imc < 18.5) {
            $classificacao = "Magreza leve";
        } elseif ($imc < 25) {
            $classificacao = "Saudável";
        } elseif ($imc < 30) {
            $classificacao = "Obeso";
        } elseif ($imc < 35) {
            $classificacao = "Obesidade Grau I";
        } elseif ($imc < 40) {
            $classificacao = "Obesidade Grau II (severa)";
        } else {
            $classificacao = "Obesidade Grau III (mórbida)";
        }
?>
        <div class="result">
            <p>Grau de obesidade: <b><?= $classificacao ?></b></p>
        </div>

<?php
    }
}
?>