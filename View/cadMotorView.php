<?php
session_start();
require_once '../Templates/header.php';
require '../Model/connection.php';

if (isset($_GET['funcao'])){
    $_SESSION['funcao'] = $_GET['funcao'];
}
if (isset($_GET['id_motor']) && !empty($_GET['id_motor'])){
    $_SESSION['id_motor'] = $_GET['id_motor'];
}
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilo que vem do index.css -->
    <link rel="stylesheet" href="../Public/CSS/estiloHome.css">
    <link rel="stylesheet" href="../Public/CSS/cadVeiculos.css">

    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <script src="../Controller/gerenteController.js"></script>
</head>

<body>
    <?php include '../Templates/side-bar.php' ?>
    
    <section class="home">
        <div class="menu_principal"> <?php 
            if (isset($_SESSION['funcao']) && $_SESSION['funcao'] == 'editar'){
                echo 'EDITAR MOTOR';
            } else {
                echo 'CADASTRO DE MOTOR';
            }
        ?>    </div>
       
        <Br>
    </section>
    <script>

        function editar(idMotor) {
            //debugger
            var form = document.querySelector('form');
            form.action = "../Controller/editar.php?action=editarMotor" +
            '&&id_motor=' + document.getElementById('id_motor').value;
        }

        function salvarMotor(){
            var end = '../Model/inclusao_motor.php';
            form = document.getElementById('main-container');
            form.action = end;
            form.submit;
        }
    </script>
</body>

</html>
    <!-- cadastro Motor-->

<body>
    <div class="container-page">
        <div id="fundo_cad">
            <div class="cadCarroView">
            <form id="formulario" method="POST" action="../Model/inclusao_motor.php">

                <form id="main-container" method="POST" action="">
                    
                    <div class="clearfix">
                    <input type="hidden" name="id_motor" id="id_motor" value="<?php echo (isset($_GET['id_motor'])) ? $_GET['id_motor'] : '';?>">
                        <div class="campo">

                            <label for="car" class="preenchimento">Numeracão do Motor</label>
                            <input type="text" class="input" name="numeracao_motor" id="numeracao_motor" placeholder="Modelo" value="<?php if(isset($_GET['numeracao_motor'])){echo $_GET['numeracao_motor'];}else{echo '';} ?>"/>
                        </div>
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Descrição do Motor</label>
                            <input type="text" class="input" name="descricao_motor" id="descricao_motor" placeholder="Descrição do Motor" value="<?php if(isset($_GET['descricao_motor'])){echo $_GET['descricao_motor'];}else{echo '';} ?>"/>
                        </div>
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Base</label>
                            <input type="text" class="input" name="base" id="base" placeholder="Base" value="<?php if(isset($_GET['base'])){echo $_GET['base'];}else{echo '';} ?>"/>
                        </div>
                        <div class="campo2">
                            <div class="botoes_save">
                                <input type="button" class="btn btn-danger" value="Cancelar" onclick="voltaConsMotor()"/>
                                <?php
                                if (isset($_GET['funcao']) && $_GET['funcao'] == "editar") {
                                    echo '<button type="" class="btn btn-success separacao_botao" onclick="editar(' . $_GET['id_motor'] .');">Editar</button>';
                                } else {
                                    echo '<button type="submit" class="btn btn-success separacao_botao" name="submit">Salvar</button>';
                                }
                                ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function voltaConsMotor(){
        window.location.href = 'consMotorView.php';
    }
</script>