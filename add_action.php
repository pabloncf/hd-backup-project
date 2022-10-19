<?php

require 'actions.php';

?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador | Backups e Restaurações</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="top-bar">
        <!--Div para a central de ação/cabeçalho-->

        <a href="index.php">
            <h2 class="title">Gerenciador | Backups e Restaurações</h2>
        </a>
        <button class="add-btn">Add</button>
        <!--Botão para adicionar um agendamento-->

        <img src="logo_hdbr.png">

    </div>

    <div class="form-backup">
        <!--Div para selecionar o motivo, ticket, server, data de inicio e o status-->

        <h3>Cadastrar agendamento</h3>
        <br>
        <form action="actions.php" method="POST">
            <p>Ticket:</p>
            <input type="number" class="ticket" name="ticket" >

            <p>Servidor antigo:</p>
            <input type="text" class="old-server" name="oldServer">

            <p>Servidor novo:</p>
            <input type="text" class="new-server" name="newServer">

            <p>Motivo:</p>
            <select class="motivo" name="reason">
                
                <?php
                    $result_agd_reason = "SELECT * FROM agd_reason";  //pegando a tabela com os status
                    $resultado_agd_reason = mysqli_query($conexao, $result_agd_reason);
                    while($row_agd_reason = mysqli_fetch_assoc($resultado_agd_reason)){?>
                    <option value="<?php echo $row_agd_reason['id_reason']; ?>"><?php echo $row_agd_reason['name_reason'];?> </option><?php
                    }
                ?>

            </select>

            <p>Observações</p>
            <input type="textarea" class="observation" name="observations">

            <p>Status</p>
            <select class="AgdStatus" name="status">

                
                <?php
                    $result_agd_status = "SELECT * FROM agd_status";  //pegando a tabela com os status
                    $resultado_agd_status = mysqli_query($conexao, $result_agd_status);
                    while($row_agd_status = mysqli_fetch_assoc($resultado_agd_status)){?>
                    <option value="<?php echo $row_agd_status['id_status']; ?>"><?php echo $row_agd_status['nome_status'];?> </option><?php
                    }
                ?>

            </select>

            <br>
            <button class="confirm-btn" type="submit">Confirmar</button>
            
        </form>
        

    </div>



</body>

</html>