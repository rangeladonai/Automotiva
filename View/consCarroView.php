<?php
session_start();
include_once '../Templates/header.php';
include_once '../Model/connection.php';
$MYSQLI = "SELECT - FROM ordem_servico";

if (isset($_GET['editado'])){
    echo '<script>alert("Dados de veículo alterados")</script>';
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
        <div class="menu_principal">CONSULTAR VEÍCULOS</div>
        <Br>
    </section>

    <body>
        <div class="container" style="margin-top:160px;margin-left:299px;padding:50px;">
            <table class="table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Descrição</th>                    
                </tr>

                <body>
                    <?php
                    require '../Model/connection.php';
                    $sql = "SELECT * FROM veiculos ORDER BY id_veiculo";
                    $query = $mysqli->query($sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo '<tr>'
                            . '<td scope="row">' . $row['id_veiculo'] . '</td>'
                            . '<td scope="row">' . $row['marca'] . '</td>'
                            . '<td scope="row">' . $row['modelo'] . '</td>'
                            . '<td scope="row">' . $row['cor'] . '</td>'
                            . '<td scope="row">' . $row['descricao'] . '</td>'
                            . '<td> ';
                            
                            if ($_SESSION['is_dev'] != 0):
                            echo '<a class="bx bx-edit" onclick="editarVeiculo('.$row['id_veiculo'].',\''.$row["marca"].'\',\''.$row["modelo"].'\',\''.$row["cor"].'\',\''.$row["descricao"].'\')"></a>'
                            . '<a class="bx bx-trash-alt" style="padding: 12px;" onclick="deletarVeiculo('.$row["id_veiculo"].')"></a>';
                            endif;
                            
                            echo '</td>'
                            . '</tr>';
                    }
                    ?>
                </body>
            </table>
        </div>
    </body>
</body>

</html>