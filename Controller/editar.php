<?php
session_start();
include '../Controller/actionController.php';
//Veiculo

function editarVeiculo(){
    $idVeiculo = $_REQUEST['idVeiculo'];
    $modelo = $_REQUEST['modelo'];
    $marca = $_REQUEST['marca'];
    $cor = $_REQUEST['cor'];
    $desc = $_REQUEST['desc'];

    require '../Model/connection.php';
    $sql = "UPDATE veiculos SET modelo='$modelo', marca='$marca', cor='$cor', descricao='$desc' WHERE id_veiculo = '$idVeiculo'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consCarroView.php?editado');
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}

function editarMotor(){
    $id_motor = $_REQUEST['id_motor'];
    $numeracao_motor = $_REQUEST['numeracao_motor'];
    $descricao_motor = $_REQUEST['descricao_motor'];
    $base = $_REQUEST['base'];
    require '../Model/connection.php';
    $sql = "UPDATE motor SET numeracao_motor='$numeracao_motor', descricao_motor='$descricao_motor' ,base='$base' WHERE id_motor='$id_motor'";
    
    try{
        $mysqli->query($sql);
        header('Location:../View/consMotorView.php?editado');
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}


//Servico
if (isset($_GET['idServico'])){
    editarServico($_GET['idServico'],$_GET['descricao_atividade'],$_GET['data_os'],$_GET['periodo'],$_GET['turma'],$_GET['veiculo'],$_GET['responsavel']);
}

function editarServico($idServico,$descricao_atividade,$data_os,$periodo,$turma,$veiculo,$responsavel){
    require '../Model/connection.php';
    $sql = "UPDATE ordem_servico SET descricao_atividade='$descricao_atividade', data_os='$data_os', periodo='$periodo', turma='$turma' veiculo='$veiculo' responsavel='$responsavel' WHERE id_os='$idServico'";
    try{
        $mysqli->query($sql);
        header('Location:../View/consServicoView.php?editado'); 
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }
}
