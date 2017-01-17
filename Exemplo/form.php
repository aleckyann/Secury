<?php require '../src/Secury.php'; ?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo - Secury results</title>
</head>
<body>
    <h3>REQUEST TEST</h3><hr>
    <form action="index.php" method="post">
        <input type="text" name="usuario_id" placeholder="int minLength=3"><hr>
        <input type="text" name="usuario_nome" placeholder="string"><hr>
        <input type="text" name="usuario_email" placeholder="email"><hr>
        <input type="text" name="usuario_money" placeholder="float"><hr>
        <input type="text" name="usuario_ativo" placeholder="boolean"><hr>
        <input type="text" name="bad_language" placeholder="bad language"><hr>
        <?= csrf::input(); ?>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
