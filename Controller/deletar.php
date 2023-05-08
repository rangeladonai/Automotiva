<?php
include '../Controller/actionController.php';
            //Veiculo
if (isset($_GET['idVeiculo'])){
    deletarVeiculo($_GET['idVeiculo']);
}
if (isset($_GET['idMotor'])){
    deletarMotor($_GET['idMotor']);
}
///////
function deletarVeiculo($idVeiculo){
    require '../Model/connection.php';
    $sql = "DELETE FROM veiculos WHERE id_veiculo = '$idVeiculo'";
    try{
        $mysqli->query($sql);
        require '../View/consCarroView.php';
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

            //Motor

if (isset($_GET['idMotor'])){
    deletarMotor($_GET['idMotor']);
}
function deletarMotor($idMotor){
    require '../Model/connection.php';
    $sql = "DELETE FROM motor WHERE id_motor = '$idMotor'";
    try{
        $mysqli->query($sql);
        require '../View/consMotorView.php';
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

            //Servico

if (isset($_GET['idServico'])){
    deletarServico($_GET['idServico']);
}
function deletarServico($idServico){
    require '../Model/connection.php';
    $sql = "DELETE FROM ordem_servico WHERE id_os = '$idServico'";
    try{
        $mysqli->query($sql);
        require '../View/consServicoView.php';
    }catch(Exception $e){
        echo $e->getCode();
    }
}

function deleteAcesso(){
    require '../Model/connection.php';
    $id_userpin = $_GET['id_userpin'];
    $sql = "DELETE FROM usuariopin WHERE id_userpin = '$id_userpin'";
    try{
        $mysqli->query($sql);
        require '../View/consAcessoView.php';
    }catch(Exception $e){
        $e->getMessage();
    }
}