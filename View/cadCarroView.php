<?php
session_start();
require_once '../Templates/header.php';
require '../Model/connection.php';

if(isset($_GET['funcao']) && $_GET['funcao'] == 'editar'){
    $_SESSION['funcao'] = $_GET['funcao'];
} else {
    unset($_SESSION['funcao']);
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
    <link rel="stylesheet" href="../Public/CSS/estiloCarro.css">
	<link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include '../Templates/side-bar.php' ?>
    
    <section class="home">
        <div class="menu_principal">
        <?php 
            if (isset($_SESSION['funcao']) && $_SESSION['funcao'] == 'editar'){
                echo 'EDITAR VEÍCULO';
            } else {
                echo 'CADASTRO DE VEÍCULOS';
            }
        ?>
        </div>
        <Br>
    </section>
    <script>

        function editar(){
            var form = document.getElementById("main-container");
            var idVeiculo = form.idVeiculo.value;
            var modelo = form.modelo.value;
            var marca = form.marca.value;
            var cor = form.cor.value;
            var desc = form.desc.value;
            
            form.action = "../Controller/editar.php?action=editarVeiculo"
            + '&&idVeiculo=' +idVeiculo
            + '&&modelo='+modelo
            + '&&marca='+marca
            + '&&cor='+cor
            + '&&desc='+desc;

            form.submit();
        }

        function voltarConsCarro(){
            var end = '../View/consCarroView.php';
            window.location.href = end;
        }
    </script>
</body>
</html>
<!-- cadastro carro-->
<body>
    <div class="container-page">
        <div id="fundo_cad">
            <div class="cadCarroView">
                <form id="main-container" method="post" action="../Model/inclusao_Carro.php">
                    <div class="clearfix">
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Marca do veiculo</label>
                            <input type="text" class="input" name="marca_veiculo" id="marca" placeholder="Marca" value="<?php echo isset($_GET['marca']) ? $_GET['marca'] : '' ?>"/>
                        </div>
                        <div class="campo">
                            <input id="idVeiculo" type="hidden" value="<?php echo isset($_GET['idVeiculo']) ? $_GET['idVeiculo'] : '' ?>">
                            <label for="car" class="preenchimento">Modelo do veiculo</label>
                            <input type="text" class="input" name="modelo_veiculo" id="modelo" placeholder="Modelo" value="<?php echo isset($_GET['modelo']) ? $_GET['modelo'] : '' ?>"/>
                        </div>
                        <div class="campo">
                            <label for="codigo" class="preenchimento">Cor do veiculo</label>
                            <input type="text" class="input" name="cor_veiculo" id="cor" placeholder="Coloração" value="<?php echo isset($_GET['cor']) ? $_GET['cor'] : '' ?>"/>
                        </div>
                        <div class="campo">
                            <label for="codigo" class="campo1">Descrição do veiculo</label>
                            <input type="text" class="input" name="desc_veiculo" id="desc" maxlength="100" placeholder="Descrição curta..." value="<?php echo isset($_GET['descricao']) ? $_GET['descricao'] : '' ?>"/>
                        </div>
                        <div class="campo2">
                            <div class="botoes_save">
                                <button type="reset" class="btn btn-danger" onclick="voltarConsCarro()">Cancelar</button>
                                 <?php 
                                    if (isset($_SESSION['funcao']) && $_SESSION['funcao'] == "editar"){
                                       echo '<button type="submit" class="btn btn-success separacao_botao" onclick="editar()" name="save">Editar</button>';
                                    }else{
                                        echo '<button type="submit" class="btn btn-success separacao_botao" name="save">Salvar</button>';
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>