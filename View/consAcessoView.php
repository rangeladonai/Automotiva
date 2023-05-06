<?php
session_start();
include_once '../Templates/header.php';
include_once '../Model/connection.php';
$MYSQLI = "SELECT - FROM ordem_servico";

if (isset($_GET['editado'])){
    echo '<script>alert("Dados de ACESSO alterados")</script>';
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
        <div class="menu_principal">ACESSO</div>
        <Br>
    </section>

    <body>
        <div class="container" style="margin-top:160px;margin-left:299px;padding:50px;">
            <table class="table">
                <button class="btn btn-success" onclick="cadPin();" style="float: right;">+</button>
                <br><br>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pin</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Acesso</th>                   
                </tr>

                <body>
                <?php
                require '../Model/connection.php';
                $sql = "SELECT * FROM usuariopin ORDER BY id_userpin";
                $query = $mysqli->query($sql);
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '<tr>'
                        . '<td scope="row">' . $row['id_userpin'] . '</td>'
                        . '<td scope="row">' . '<span id="pin-'.$row['id_userpin'].'" data-pin="'.$row['pin'].'">********</span> <a href="#" onclick="mostrarOcultar('.$row['id_userpin'].');"><i id="eye-'.$row['id_userpin'].'" class="fa-solid fa-eye"></i></a></td>'
                        . '<td scope="row">' . $row['nome'] . '</td>';
                        if ($row['is_dev'] != 0){
                            echo '<td scope="row"> Total </td>';
                        } else {
                            echo '<td scope="row"> Restrito </td>';
                        }
                        echo '<td> '
                        . '<a class="bx bx-trash-alt" style="padding: 12px;" onclick="deletarPin('.$row["id_userpin"].')"></a>'
                        .'</td>'
                        . '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</body>
<script>
    function mostrarOcultar(id){
        var campoPin = document.querySelector('#pin-'+id);
        var olho = document.querySelector('#eye-'+id+' i');
        if(campoPin.innerHTML == '********'){
            campoPin.innerHTML = campoPin.getAttribute('data-pin'); // mostrar o PIN
            olho.classList.remove('fa-eye-slash'); // alterar o ícone para mostrar
            olho.classList.add('fa-eye');
        } else {
            campoPin.innerHTML = '********'; // ocultar o PIN
            olho.classList.remove('fa-eye'); // alterar o ícone para ocultar
            olho.classList.add('fa-eye-slash');
        }
    }
</script>
</html>
