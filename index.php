<?php 
        include_once('viacep.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="." method="post">
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $address->cep ?>">
        <input type="submit">
        <input type="text" placeholder="rua" name="rua" value="<?php echo $address->logradouro ?>">
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $address->bairro ?>">
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo $address->localidade ?>">
        <input type="text" placeholder="estado" name="estado" value="<?php echo $address->uf ?>">
    </form>


</body>
</html>