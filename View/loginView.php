<?php
session_start();
require_once '../Templates/header.php';
unset($_SESSION['nome']);
unset($_SESSION['is_dev']);
?>
<link rel="stylesheet" href="../Public/CSS/loginView.css">
<body>
        <div class="container">
                <div class="hero is-fullheight">
                
                <div class="hero-body is-justify-content-center is-align-items-center">
                        <form action="../Controller/formController.php?action=validaLogin" method="post" name="formLogin" id="formLogin">
                                <div class="columns is-flex is-flex-direction-column box">
                                <div id="logo">
                                        <img src="../Public/Imagens/senai_logo.png" alt="">
                                </div>
                                <div class="column">
                                        <label for="pin">PIN PARA ACESSO</label>
                                        <br>
                                        <input class="input is-info" id="pin" type="password" id="pin" name="pinLogin" placeholder="Q1W2E3R4..." required>
                                </div>
                                <div class="column">
                                        <button class="button is-info is-fullwidth" type="submit" name="entrar">ENTRAR</button>
                                </div>
                                <span class="tag is-info is-light">contato@estudante.sesisenai.org.br</span>
                                <div id="erroDiv">
                                <?php 
                                if(isset($_GET['erro']) && $_GET['erro'] == 1){
                                        echo '<p style="color:red; font-weigth:bold;" id="erro-1"> ERRO: PIN INCORRETO!</p>';
                                }
                                ?>
                                </div>
                                </div>
                        </form>
                </div>
        </div>
        </div>

</body>
</html>