<?php
session_start();
require_once '../Templates/header.php';
require '../Model/connection.php';
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
                echo 'EDITAR ACESSO DE USUARIO';
            } else {
                echo 'CADASTRO ACESSO DE USUARIO';
            }
        ?>    </div>
       
        <Br>
    </section>
</body>

</html>
<body>
    <div class="container-page">
        <div id="fundo_cad">
            <div class="cadCarroView">

            <form id="formulario" method="POST" action="../Controller/formController.php?action=cadAcesso">
                <div class="clearfix">
                    <input type="hidden" name="id_userpin" id="id_userpin" value="<?php echo (isset($_GET['id_userpin'])) ? $_GET['id_userpin'] : '';?>">
                    <div class="campo">

                        <label for="car" class="preenchimento">Nome</label>
                        <input type="text" class="input" name="nome" id="nome" required placeholder="Nome..." value="<?php if(isset($_GET['nome'])){echo $_GET['nome'];}else{echo '';} ?>"/>
                    </div>

                    <div class="campo">
                        <label for="codigo" class="preenchimento">PIN de acesso</label>
                        <input type="text" class="input" name="pinacesso" id="pinacesso" required placeholder="A9301kljdak" value="<?php if(isset($_GET['pinacesso'])){echo $_GET['pinacesso'];}else{echo '';} ?>"/>
                    </div>
                    <hr>
                    <div class="campo">
                        <label for="">Nível de Acesso</label>
                        <br>
                        <label for="acesso" style="color: red;">RESTRITO</label>
                        <input type="radio" name="acesso" value="0" required>
                        <label for="acesso" style="color: green;">TOTAL</label>
                        <input type="radio" name="acesso" value="1" required>
                    </div>
                    <div class="campo2">
                        <div class="botoes_save">
                            <input type="button" class="btn btn-danger" value="Cancelar" onclick="voltarConsAcesso();"/>
                            <?php
                            if (isset($_GET['funcao']) && $_GET['funcao'] == "editar") {
                                echo '<button type="" class="btn btn-success separacao_botao" onclick="editar(' . $_GET['id_motor'] .');">Editar</button>';
                            } else {
                                echo '<button type="submit" class="btn btn-success separacao_botao" name="submit">Salvar</button>';
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
<script>
    function voltarConsAcesso(){
        var end = '../View/consAcessoView.php';
        window.location.href = end;
    }
</script>
