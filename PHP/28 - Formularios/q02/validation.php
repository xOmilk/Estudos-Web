<?php
$maior_idade = '';
if (isset($_GET['age'])) {
    if (is_numeric($_GET['age'])) {
        $idade = $_GET['age'];
        if ($idade >= 18) {
            $maior_idade = "É maior de idade";
        } else {
            $maior_idade = "Não é maior de idade";
        }
        $message = 'O campo que você digitou é numerico';
    } else {
        $message = 'O campo que você digitou não é numerico';
    }
}
if (isset($message) && $message !== ''): ?>
    <div class="result">
        <p><?= $message ?></p>
        <?php if ($maior_idade !== ''): ?><p><?= $maior_idade ?></p><?php endif; ?>
    </div>
<?php endif; ?>
<?php
