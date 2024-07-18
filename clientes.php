<?php
    require_once 'config.php';

    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($conn, $sql);

    if (!$result){
        die("Erro ao executar a consulta: ". mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <link rel="stylesheet" type="text/css" href="clientes.css">
</head>
<body>

    <div class="menu">
            <ul>
                <li><a href="home.php">Inicio</a></li>
                <li><a href="pedidos_pendentes.php">Pedidos</a></li>
                <li><a href="estoque.php">Estoque</a></li>
                <li><a href="#">Financias</a></li>
                <li><a href="#">Relatorios</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="admin.php">Administradores</a></li>
            </ul>
        </div>

    <div class="container">
        <h1>Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <tr>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td>".$row['endereco']."</td>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
        </table>
    </div>
    
    <footer>
        <h6>© Site desenvolvido por InovaGest</h6>
    </footer>
</body>
</html>