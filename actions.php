<?php

include("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); //puxando o input do add_action
$ticket = filter_input(INPUT_POST, 'ticket', FILTER_SANITIZE_NUMBER_INT); //puxando o input do add_action
$oldServer = filter_input(INPUT_POST, 'oldServer', FILTER_SANITIZE_STRING); //puxando o input do add_action
$newServer = filter_input(INPUT_POST, 'newServer', FILTER_SANITIZE_STRING); //puxando o input do add_action
$observation = filter_input(INPUT_POST, 'observation', FILTER_SANITIZE_STRING); //puxando o input do add_action
$reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_NUMBER_INT); //puxando o input do add_action
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT); //puxando o input do add_action

$result_agendamentos = "INSERT INTO agendamentos (id_agd, ticket_agd, oldserver_agd, newserver_agd, observation_agd, created_agd, modified_agd, agd_id_reason, agd_id_status) VALUES ('','$ticket','$oldServer','$newServer','$observation',NOW(),NOW(),'$reason','$status')";
                        //criando a query para ligação dos inputs no banco
$resultado_agendamentos = mysqli_query($conexao, $result_agendamentos);       //execultando a query dentro do banco + informando a conexão

?>