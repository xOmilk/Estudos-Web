<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['array'])) {
        $text = $_GET['array'];
        $new_array = explode(',', $text);

        $size_array = sizeof($new_array);

        $sum = 0;

        foreach ($new_array as $key => $value) {
            $sum += $new_array[$key];
        }
        $formatado = json_encode($new_array);
        $media = $sum / $size_array;

?>
        <div class="result">
            <p>Array de numeros: <?= $formatado ?></p>
            <p>Quantidade de numeros <?= $size_array ?></p>
            <p>Media dos elementos: <?= $media ?></p>
        </div>

<?php
    }
}
?>