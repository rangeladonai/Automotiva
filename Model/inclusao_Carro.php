<body>
  <?php

    require 'connection.php';
    require '../View/cadCarroView.php';

    //$usuario    = $_POST["campoID (se for em php: campoName)"];
    $modelo              = $_POST["modelo_veiculo"];
    $marca               = $_POST["marca_veiculo"];
    $cor                 = $_POST["cor_veiculo"];
    $desc_veiculo        = $_POST["desc_veiculo"];
        
    if (empty($modelo) || empty($marca) || empty($cor) ||  empty($desc_veiculo)){
            echo"<script>alert('preencher o campo vazio');</script>";
    }       
    else
    {
      if(mysqli_query($mysqli,"insert into veiculos(modelo, marca, cor, descricao)
      values('$modelo','$marca','$cor','$desc_veiculo')"));    
     {
    echo"<script>alert('Inclusão realizada com sucesso');</script>";
    //reencaminha o usuario
    echo"<script>window.location='../View/consCarroView.php'</script>";        
    }   
         echo "<script>alert('Houve um erro na inserção');</script>";
         echo "Erro: ".mysqli_error($mysqli);
    }    
    
?>
</body>
