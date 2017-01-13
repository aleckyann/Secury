<?php require '../src/Secury.php'; ?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo - Secury results</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="usuario_id" placeholder="id">
        <input type="text" name="usuario_nome" placeholder="nome">
        <input type="text" name="usuario_email" placeholder="email">
        <input type="text" name="usuario_money" placeholder="money">
        <input type="text" name="usuario_ativo" placeholder="ativo">
        <input type="text" name="bad_language" placeholder="bad language">
        <?= Secury::csrfStart(); ?>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
