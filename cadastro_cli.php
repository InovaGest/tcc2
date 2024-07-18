<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro_cli.css">
    <title>Cadastro de novos clientes </title>
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
        <form action="cadastro_clientes.php" method="post" enctype="multipart/form-data"> <!--Encaminhar o formulário em partes-->

            <h2>Cadastro de clientes</h2>


            <label for="nome_c">Nome do cliente:</label>
            <input type="text" id="nome_c" name="nome_c" required>

                <br><br>

            <label for="email_c">Email</label>
            <input type="email" id="email_c" name="email_c" required>
            
                <br><br>

            <label for="tel_c">Telefone</label>
            <input type="tel" id="tel_c" name="tel_c" required>

                <br><br>

            <label for="endereco_c">Endereço:</label>
            <input type="text" id="endereco_c" name="endereco_c" required>

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