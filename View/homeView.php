<?php
session_start();
include_once '../Templates/header.php';
include_once '../Model/connection.php';
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/CSS/estiloHome.css">
    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <?php include '../Templates/side-bar.php' ?>
    
    <section class="home">
        <div class="menu_principal">MENU PRINCIPAL</div>
        <Br>
        <div class="Buttons">
            <a class="botao_home" href="cadServicoView.php">Manutenção</a>
            <a class="botao_home" href="cadCarroView.php">Cadastro Veiculo</a>
            <a class="botao_home" href="cadmotorView.php">Cadastro Motor</a>
            <br>
            <a class="botao_home" href="consServicoView.php">Consultar Manutenção</a>
            <a class="botao_home" href="consCarroView.php">Consultar Veiculos</a>
            <a class="botao_home" href="consMotorView.php">Consultar Motores</a>
        </div>

        <style>
            /*testes*/

            .Buttons {
                position: relative;
                top: 130px;
                border-right: 100px;
                border-top: 10px;
                border-width: 100px;

            }

            .botao_home {
                color: blue;
                border-color: black;
                border-radius: 10px;
                background-color: white;
                align-items: center;
                cursor: pointer;
                padding: 80px 80px;
                display: inline-block;
                margin: 30px 30px;
                width: 370px;
            }

            @media(min-width: 600px) and (max-width: 768px) {
                .botao_home {
                    width: 180px;
                }
            }


            @media(min-width: 768px) and (max-width: 992px) {
                .botao_home {
                    width: 200px;
                }
            }

            @media(min-width: 922px) and (max-width: 1200px) {
                .botao_home {
                    width: 200px;
                    height: 200px;
                }
            }

            .home {
                text-align: center;
            }
        </style>

    </section>

</body>

</html>
