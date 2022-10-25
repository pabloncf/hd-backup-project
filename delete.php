<?php
session_start();
if(!empty($_GET['ticket_agd'])){
    include("conexao.php");

    $ticket_agd = $_GET['ticket_agd'];

    $sqlSelect = "SELECT * FROM agendamentos WHERE ticket_agd=$ticket_agd";
    
    $result_con = $conexao->query($sqlSelect);

    if($result_con->num_rows >= 0){
        $sqlDelete = "DELETE FROM agendamentos WHERE ticket_agd=$ticket_agd";
        $result_delete = $conexao->query($sqlDelete);
    }
    header('Location: index.php');
}
?>