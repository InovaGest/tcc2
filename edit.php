<?php

include_once 'config.php';

$id = $_GET['id'];

// Consulta para recuperar o produto
$query = "SELECT * FROM pedidos WHERE id = $id";
$result = $conn->query($query);

// Verificar se houve erro na consulta
if (!$result) {
  die("Erro ao recuperar o registro: ". $conn->error);
}

// Recuperar o produto
$resultado = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ed.css">
  <title>Editar</title>
</head>
<body>
  
</body>
</html>
<?php
// Criar o formulário de edição
echo '<form action="editar_produto.php" class="block" method="post">';

echo '<input type="hidden" name="id" value="'.$resultado['id'].'">';

echo '<label for="item">Item:</label><br>';
echo '<input type="text" id="item" name="item"><br>'. $resultado['item']. '<br><br>';

echo '<label for="quantidade">Quantidade:</label><br>';
echo '<input type="number" id="quantidade" name="quantidade"><br>'. $resultado['quantidade']. '<br><br>';

echo '<label for="id_do_cliente">Id do cliente:</label><br>';
echo '<input type="number" id="iid_do_cliente" name="id_do_cliente"><br>'. $resultado['id_do_cliente']. '<br><br>';

echo '<label for="nome_do_cliente">Nome do Cliente:</label><br>';
echo '<input type="text" id="inome_do_cliente" name="nome_do_cliente"><br>'. $resultado['nome_do_cliente']. '<br><br>';

echo '<label for="id_do_admin">Id do Admin:</label><br>';
echo '<input type="number" id="id_do_admin" name="id_do_admin"><br>'. $resultado['id_do_admin']. '<br><br>';

echo '<label for="detalhes">Detalhes:</label><br>';
echo '<input type="text" id="detalhes" name="detalhes"><br>'. $resultado['detalhes']. '<br><br>';

echo '<input type="submit" name="update" id="submit">';
echo '</form>';

?>
