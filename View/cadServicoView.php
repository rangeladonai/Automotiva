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
</head>

<body>
    <?php include '../Templates/side-bar.php' ?>
    
    <section class="home">
        <div class="menu_principal">CADASTRO DE MANUTENÇÃO</div>
        <Br>
    </section>
    <script>
        function voltarConsServico(){
            var end = '../View/consServicoView.php';
            window.location.href = end;
        }
    </script>
</body>

</html>

<body>
    <div class="container-page">
        <div id="fundo_cad">
            <div class="cadCarroView">
                <form action="../Controller/formController.php?action=cadServico" method="post">
                    <div class="clearfix">
                        <div class="campo">
                            <label for="data">DATA</label>
                            <input type="date" id="data" name="data" class="input" required>
                        </div>
                        <div class='campo'>
                            <label for="turno">Turno</label>
                            <select class="input" name="turno" id="turno" required> <!--TURNO É PERIODO NO DATABASE-->
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Noturno">Noturno</option>
                            </select>
                        </div>
                        <div class='campo'>
                        <label type='text' for="veiculo">Turma</label>
                            <input type="text" name="turma" class='input' placeholder="Turma..." required>
                        </div>
                        <div class="campo">
                            <label type='text' for="veiculo">Veículo </label>
                            <br>
                            <select class="input "  name="veiculo" id="veiculo" style="max-width:336px;" required>
                                <option value="Nenhum*">Nenhum</option>
                                <?php
                                $sql = "SELECT * FROM veiculos";
                                $query = $mysqli->query($sql);
                                while ($row = mysqli_fetch_assoc($query)) {
                                    echo '<option value="' . $row['id_veiculo'] . '">' . $row['marca'] . ' ' . $row['modelo'] . " - " . $row['cor'] . " (" . $row['descricao'] . ")" . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="campo">
                              <label for="">Motor</label>
                              <select name="motor" id="motor" class="input " style="max-width:336px;" required>
                              <option value="Nenhum*">Nenhum</option>
                              <?php
                                $sql = "SELECT * FROM motor";
                                $query = $mysqli->query($sql);
                                while ($row = mysqli_fetch_assoc($query)){
                                    echo '<option value="' . $row['numeracao_motor'] . ' - ' . $row['descricao_motor']  . ' (' . $row['base'] . ')'.'">'. $row['numeracao_motor'] . ' - ' . $row['descricao_motor']  . ' (' . $row['base'] . ')'.'</option>';
                                }
                              ?>
                              </select>
                        </div>
                        <div class="campo">
                            <label for="">Atividades</label>
                            <textarea class='input' placeholder="Atividades realizadas..." name="descricao" id="descricao" maxlength="600" cols="600" rows="600" required ></textarea>
                        </div>

                        <div class="campo">
                            <label for="">Responsável</label>
                            <input class='input' type="text" name="responsavel" placeholder="Responsável pela aula"  value="<?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>" readonly>
                        </div>

                        <div class="campo2">
                            <div class="botoes_save">
                                <button type="reset" class="btn btn-danger" onclick="voltarConsServico()">Cancelar</button>
                                <button type="submit" class="btn btn-success separacao_botao">Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
