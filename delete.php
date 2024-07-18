<?php
if(!empty($_GET['id_do_pedido']))
    {
        include_once('config.php');

        $id_do_pedido = $_GET['id'];

        $sqlSelect = "SELECT *  FROM pedidos WHERE id_do_pedido=$id_do_pedido";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM pedidos WHERE id_do_pedido=$id_do_pedido";
            $resultDelete = $conexao->query($sqlDelete);
        }
        
    }
    header('Location: pedidos_pendentes.php');
   
?>