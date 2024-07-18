<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="itens.css">
    <title>Cadastro de novos itens </title>
</head>
<body>
<aside>
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
</aside>

<article>
    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data"> <!--Encaminhar o formulário em partes-->

            <h2>Cadastre novos itens</h2>


            <label for="nome">Nome do item:</label>
            <input type="text" id="nome" name="nome" required>

                <br><br>

            <label for="codigo">Codigo:</label>
            <input type="number" id="codigo" name="codigo" required>
            
                <br><br>

            <label for="tipo">Tipo:</label>
            <input type="tipo" id="tipo" name="tipo" required>

                <br><br>

            <button type="submit">Enviar item</button>
        </form>
    </div>
</article>
    <footer>
        <h6>© Site desenvolvido por InovaGest</h6>
    </footer>
    
</body>
</html>