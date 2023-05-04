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