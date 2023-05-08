//VEICULO------------------------------------------------------------------------------

function deletarVeiculo(idVeiculo) {
    if (idVeiculo != null) {
        if (confirm("DESEJA DELETAR O VEICULO SELECIONADO?") == true) {
            var end = '../Controller/deletar.php?idVeiculo=' + idVeiculo;
            window.location.href = end;
        } else {
            var end = '../View/consCarroView.php';
            window.location.href = end;
        }
    }
}


function editarVeiculo(idVeiculo, marca, modelo, cor, descricao) {
    var end = '../View/cadCarroView.php?funcao=editar&&idVeiculo=' + idVeiculo
        + '&&marca=' + marca
        + '&&modelo=' + modelo
        + '&&cor=' + cor
        + '&&descricao=' + descricao;
    window.location.href = end;
}

function deletarMotor(idMotor){
    if (idMotor != null){
        if (confirm("DESEJA DELETAR O MOTOR SELECIONADO?") == true){
            var end = '../Controller/deletar.php?idMotor=' + idMotor;
            window.location.href = end;
        } else {
            var end = '../View/consMotorView.php';
            window.location.href = end;
        }
    }
}

function editarMotor(id_motor,numeracao_motor,descricao_motor,base){
    var end = '../View/cadMotorView.php?funcao=editar&&id_motor='+id_motor
    + '&&numeracao_motor='+numeracao_motor
    + '&&descricao_motor='+descricao_motor
    + '&&base='+base;
    
    window.location.href = end;
}

function cadPin(){
    var end = '../View/cadAcessoView.php';
    window.location.href = end;
}

function deletarPin(id_userpin){
    var box = confirm('DESEJA DELETAR O ACESSO: ' + id_userpin + '? ESTA AÇÃO NÃO PODERÁ SER DESFEITA');
    if (box){
        var end = '../Controller/deletar.php?action=deleteAcesso' + '&&id_userpin=' + id_userpin;
        window.location.href = end;
    }
}