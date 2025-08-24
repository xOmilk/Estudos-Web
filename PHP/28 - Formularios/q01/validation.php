<?php
if (
    isset($_POST['nome']) &&
    isset($_POST['nota1']) &&
    isset($_POST['nota2']) &&
    isset($_POST['nota3'])
) {
    $name = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;


    if ($media >= 6) {
?>
        <div class="result">
            <p style="color: green;">Aprovado, Aluno<?= $name ?> com media:<?= $media ?></p>
        </div>
    <?php
    } else {
    ?>
        <div class="result">
            <p style="color: red;">Reprovado, Aluno "<?= $name ?>" com media:<?= $media ?></p>
        </div>

<?php
    }
}
?>