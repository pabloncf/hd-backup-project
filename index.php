<?php
require 'conexao.php';

$sql_agd = "SELECT * FROM agendamentos ORDER BY id_agd DESC"; //pegando as informações do banco de forma decrescente

$result_sql_agd = $conexao->query($sql_agd);

?>

<!DOCTYPE html>
<html lang="en">

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

        <a href="add_action.php"><button class="add-btn">Add</button></a>
        <!--Botão para adicionar um agendamento-->

        <img src="logo_hdbr.png">
    </div>

    <div class="monitor-center">

        <h4 class="title-monitor">Backups e Restaurações ativas:</h4>

        <table class="agd_table">
            <thead>
                <tr class="table-titles">
                    <th scope="col">Ticket</th>
                    <th scope="col">Servidor antigo</th>
                    <th scope="col">Servidor novo</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Observações</th>
                    <th scope="col">Status</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($agd_data = mysqli_fetch_assoc($result_sql_agd)){
                        echo "<tr>";
                        echo "<td>".$agd_data['ticket_agd']."</td>";
                        echo "<td>".$agd_data['oldserver_agd']."</td>";
                        echo "<td>".$agd_data['newserver_agd']."</td>";
                        echo "<td>".$agd_data['agd_id_reason']."</td>";
                        echo "<td>".$agd_data['observation_agd']."</td>";
                        echo "<td>".$agd_data['agd_name_status']."</td>";
                        echo "<td>
                            <a href='delete.php?ticket_agd=$agd_data[ticket_agd]' class='delete_btn'>
                                excluir
                            </a>    
                        </td>";
                        echo "</tr>";
                    }
                    
                    
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>