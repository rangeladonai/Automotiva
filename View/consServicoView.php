<?php
session_start();
require '../Model/connection.php';
include '../Templates/header.php';
if (isset($_GET['cadastra'])) {
    echo '<script>alert("INCLUSÃO REALIZADA COM SUCESSO!")</script>';
}
?>
<!--CONSULTA SERVICO-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilo que vem do index.css -->
    <link rel="stylesheet" href="../Public/CSS/estiloHome.css">
    <link rel="stylesheet" href="../Public/CSS/cadVeiculos.css">
    <link rel="stylesheet" href="../Public/CSS/modal.css">
    <link rel="stylesheet" href="../Public/CSS/estiloCarro.css">
    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include '../Templates/side-bar.php' ?>
    <section class="home">
            <div class="menu_principal">CONSULTA DE ATIVIDADES</div>';
        <Br>
    </section>
    <script>
        //SERVICO------------------------------------------------------------------------------

        function deletarServico(idServico) {
            if (idServico != null) {
                if (confirm("DESEJA DELETAR O SERVICO SELECIONADO?") == true) {
                    var end = '../Controller/deletar.php?idServico=' + idServico;
                    window.location.href = end;
                } else {
                    var end = '../View/consMotorView.php';
                    window.location.href = end;
                }
            }
        }

        function editarServico(idServico, descricao_atividade, data_os, periodo, turma, veiculo, responsavel) {
            var end = '../View/cadServicoView.php?funcao=editar&&idServico=' + idServico +
                '&&descricao_atividade=' + descricao_atividade +
                '&&data_os=' + data_os +
                '&&periodo=' + periodo +
                '&&turma=' + turma +
                '&&veiculo=' + veiculo +
                '$$responsavel=' + responsavel;
            window.location.href = end;
        }
        window.onload = function(){
            $('#divModalDescricao').hide();
        }
        
        function openModalDescricao(descricao){
            var modalBody = document.querySelector('#conteudoModal');
            var td = document.createElement('td');
            td.textContent = descricao;
            modalBody.appendChild(td);
            $('.modal').show();
        }
        
        function closeModal(){
            var modalBody = document.querySelector('#conteudoModal');
            modalBody.textContent = '';
            $('.modal').hide();
        }

    </script>

    <body>
        <div class="container">
            <table class="table">
                <tr>
                    <th scope="">#</th>
                    <th scope="">DATA</th>
                    <th scope="">TURNO</th>
                    <th scope="">TURMA</th>
                    <th scope="">VEÍCULO</th>
                    <th scope="">DESCRIÇÃO</th>
                    <th scope="">RESPONSÁVEL</th>
                </tr>
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <div id="conteudoModal">
                        </div>
                    </div>
                </div>
                <body>
                    <tr>
                        <?php
                        require '../Model/connection.php';
                        $sql = "SELECT * FROM ordem_servico ORDER BY id_os";
                        $query = $mysqli->query($sql);
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo '<tr>'
                                . '<td scope="">' . $row['id_os'] . '</td>'
                                . '<td scope="">' . $row['data_os'] . '</td>'
                                . '<td scope="">' . $row['periodo'] . '</td>'
                                . '<td scope="">' . $row['turma'] . '</td>'
                                . '<td scope="">' . $row['veiculo'] . '</td>'
                                . '<td>' . '<button class="btn btn-secondary" onclick="openModalDescricao(\'' . $row['descricao_atividade'] . '\')">Abrir Descrição</button>' . '</td>'
                                . '<td scope="">' . $row['responsavel'] . '</td>'
                                . '<td> '
                                . '<a class="bx bx-trash-alt" style="padding: 5px;" onclick="deletarServico(' . $row["id_os"] . ')"></a>'
                                . '</td>'
                                . '</tr>';
                        }
                        ?>
                    </tr>
                </body>
            </table>
        </div>
    </body>
</body>

</html>