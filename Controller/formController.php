<?php
session_start();
require_once '../Controller/actionController.php';  
function validaLogin(){
    $pin = $_POST['pinLogin'];
    require '../Model/connection.php';
    if(!empty($pin)){
        $sql = "SELECT * FROM usuariopin WHERE pin = '$pin'";
        $query = $mysqli->query($sql);
        $num_rows = mysqli_num_rows($query); 
        if($num_rows){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['nome'] = $row['nome'];
            if($row['is_dev'] != 0){
                $_SESSION['is_dev'] = $row['is_dev'];
            }
            if ($row['pin'] == $pin){
                header('Location:../View/homeView.php');
            }
        }else{
            header('Location:../View/loginView.php?erro=1');
        }
    }else{
        unset($_SESSION['nome']);
        unset($_POST['pinLogin']);
        header('Location:./View/loginView.php');
    }
}

function procuraVeiculo($value) {
    require '../Model/connection.php';
    $sql = "SELECT * FROM veiculos WHERE id_veiculo = '$value'";
    $exec = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($exec);
    $resultado = $row['marca'] . ' ' . $row['modelo'];
    return $resultado;
}

function cadServico() {
    $data = $_POST['data'];
    $turno = $_POST['turno'];
    $turma = $_POST['turma'];
    $veiculo = $_POST['veiculo'];
    $descricao = $_POST['descricao'];
    $resp = $_POST['responsavel'];

    require '../Model/connection.php';
    $veiculoDado = procuraVeiculo($veiculo);
    $sql = "INSERT INTO ordem_servico(data_os, periodo, turma, veiculo, descricao_atividade, responsavel, status_os) VALUES('$data', '$turno', '$turma', '$veiculoDado','$descricao' ,'$resp', 0)";
    $mysqli->query($sql);
    header('Location:../View/consServicoView.php');
}
