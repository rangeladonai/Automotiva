<?php
require 'connection.php';

include '../Controller/class_motor.php';


    //Cria objetos 'Motor'
    $motor = new motor();
        
        //Criar itens set

        $motor->setnumeracao_motor($_POST['numeracao_motor']);
        $motor->setdescricao_motor($_POST['descricao_motor']);
        $motor->setbase($_POST['base']);
    
        //Criar resto dos itens get
    
    
        $numeracao  = $motor->getnumeracao_motor();
        $descricao  = $motor->getdescricao_motor();
        $nr_base    = $motor->getbase();

        if(mysqli_query($mysqli, "Insert into motor(numeracao_motor, descricao_motor, base)
        values( '$numeracao','$descricao', '$nr_base')"))

        {
            echo"<script>alert('Cadastro realizado com sucesso');</script>";
            echo"<script>window.location='../View/consMotorView.php'</script>";

        }
        else{
            echo"<script>alert('Houve um erro no cadastro')<script>";
        }
?>