<?php
session_start();
include_once '../Templates/header.php';
include_once '../Model/connection.php';
$MYSQLI = "SELECT - FROM ordem_servico";
if (isset($_GET['editado'])){
    echo '<script>alert("Dados de MOTOR alterados")</script>';
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
    <link rel="icon" href="../Public/Imagens/senai_logo.png" type="image/icon type">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="../Controller/gerenteController.js"></script>
</head>


<body>
    <?php include '../Templates/side-bar.php' ?>
    <section class="home">
        <div class="menu_principal">CONSULTAR MOTORES</div>
        <Br>
    </section>

    <body>
        <div class="container" style="margin-top:160px;margin-left:299px;padding:50px;">
            <table class="table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nº do Motor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Nº da Base</th>
                    <th></th>
                </tr>

                <body>
                    <?php
                    require '../Model/connection.php';
                    $sql = "SELECT * FROM motor ORDER BY id_motor";
                    $query = $mysqli->query($sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo '<tr>'
                            . '<td scope="row">' . $row['id_motor'] . '</td>'
                            . '<td scope="row">' . $row['numeracao_motor'] . '</td>'
                            . '<td scope="row">' . $row['descricao_motor'] . '</td>'
                            . '<td scope="row">' . $row['base'] . '</td>'
                            . '<td> '
                            . '<a class="bx bx-edit" onclick="editarMotor('.$row['id_motor'].',\''.$row["numeracao_motor"].'\',\''.$row["descricao_motor"].'\',\''.$row["base"].'\')"></a>'                            
                            . '<a class="bx bx-trash-alt" style="padding: 12px;" onclick="deletarMotor(' . $row["id_motor"] . ')"></a>'
                            . '</td>'

                            . '</tr>';
                    }
                    ?>
                </body>
            </table>
        </div>
    </body>
</body>

</html>