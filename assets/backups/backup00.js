function carregarListaItensRuas() {
    $('#listItensRuas').empty(); //Limpando a tabela
    $.ajax({
        type: 'post', //Definimos o método HTTP usado
        dataType: 'json', //Definimos o tipo de retorno
        url: '../assets/php/jsonListRuas.php', //Definindo o arquivo onde serão buscados os dados
        success: function(dados) {
            // console.log(dados);
            for (var i = 0; dados.length > i; i++) {
                //Adicionando registros retornados na tabela
                $('#listItensRuas').append('<tr>' + '<td>' + dados[i].id + '</td>' +
                    '<td>' + dados[i].id + dados[i].n_rua + dados[i].lado + dados[i].n_armario + dados[i].n_andar + '</td>' +
                    '<td>' + dados[i].nome + '</td>' +
                    '<td>' + dados[i].n_rua + '</td>' +
                    '<td>' + dados[i].lado + '</td>' +
                    '<td>' + dados[i].n_armario + '</td>' +
                    '<td>' + dados[i].n_andar + '</td>' +
                    '<td>' + dados[i].quantidade + '</td>' +
                    '<td>' + dados[i].observacao + '</td>' +

                    '<td class="td-actions text-center">' +

                    '<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal">' +
                    '<i class="material-icons">add</i>' +
                    '</button>' +

                    '<button type="button" rel="tooltip" class="btn btn-warning" data-toggle="modal" data-target="#saidaModal">' +
                    '<i class="material-icons">remove</i>' +
                    '</button>' +

                    '<button type="button" rel="tooltip" class="btn btn-info" data-toggle="modal" data-target="#editModal" data-whateverid =' + dados[i].id + " " +
                    'data-whatevercod =' + dados[i].id + dados[i].n_rua + dados[i].lado + dados[i].n_armario + dados[i].n_andar + " " +
                    'data-whatevernome =' + dados[i].nome + " " +
                    'data-whateverrua =' + dados[i].n_rua + " " +
                    'data-whateverlado =' + dados[i].lado + " " +
                    'data-whateverarmario =' + dados[i].n_armario + " " +
                    'data-whateverandar =' + dados[i].n_andar + " " +
                    'data-whateverquantidade =' + dados[i].quantidade + " " +
                    'data-whateverobservacao =' + dados[i].observacao + ">" +
                    '<i class="material-icons">edit</i>' +
                    '</button>' +

                    '<button type="button" rel="tooltip" class="btn btn-danger" onClick = "confirmDelIndexRua(' + dados[i].id + ')">' +
                    '<i class="material-icons">delete</i>' +
                    '</button>' +

                    '</td>' +

                    '</tr>');
            }
        }
    });
}

function povoaModalDeEdicao(){

    $('#editModal').on('show.bs.modal', function(event) {

        // alert("In Function" );

        var button = $(event.relatedTarget) // Button that triggered the modal         
        var id = button.data('whateverid') // Extract info from data-* attributes
        var cod = button.data('whatevercod')
        var nome = button.data('whatevernome')
        var rua = button.data('whateverrua')
        var lado = button.data('whateverlado')
        var armario = button.data('whateverarmario')
        var andar = button.data('whateverandar')
        var quantidade = button.data('whateverquantidade')
        var observacao = button.data('whateverobservacao')

        // console.log(button)

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
            // modal.find('.modal-title').text('ID ' + recipient)
        modal.find('#idPro').val(id)
        modal.find('#codPro').val(cod)

        modal.find('#editNome').val(nome)
        modal.find('#editRua').val(rua)
        modal.find('#editLado').val(lado)
        modal.find('#editArmario').val(armario)
        modal.find('#editAndar').val(andar)
        modal.find('#editQuantidade').val(quantidade)
        modal.find('#editObservacao').val(observacao)

    })
}

function confirmDelIndexRua(id) {
    // var resposta = confirm("Deseja remover esse registro?");

    // if (resposta == true) {
    //     window.location.href = "../assets/php/fluxo.php?action=delIndexRua&id="+id;
    // }
    Swal.fire({
        title: 'Você tem certeza??',
        text: 'Você não poderá recuperar este registro!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, tenho certeza!',
        cancelButtonText: 'Não, mante-lo'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deletado!',
                'O registro foi deletado com sucesso.',
                'success'
            )
            setTimeout(function() {
                window.location.href = "../assets/php/fluxo.php?action=delIndexRua&id=" + id;
            }, 1000);

            // For more information about handling dismissals please visit
            // https://sweetalert2.github.io/#handling-dismissals
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Cancelado',
                'O registro foi mantido :)',
                'error'
            )
        }
    })
}
function sucessAltIndexRua() {
    Swal.fire({
    position: 'center',
    type: 'success',
    title: 'Registro Alterado com Sucesso!',
    showConfirmButton: false,
    timer: 1500
    })

}
function altIndexItemRua(){

    const formAltIndexRua = document.getElementById("formAltIndexRua")

    // console.log(formDataLogin.get("editNome"));

    // formDataLogin.append("name","Jonas");
    // console.log(formDataLogin.get("name"));

    formAltIndexRua.addEventListener("submit", function(e) {
        e.preventDefault();
        const formDataAltIndexRua = new FormData(formAltIndexRua);
        console.log(formDataAltIndexRua.get("editNome"));


        $.ajax({
            type: 'post', //Definimos o método HTTP usado
            dataType: 'json', //Definimos o tipo de retorno
            url: "../assets/php/jsonListRuas.php", //Definindo o arquivo onde serão buscados os dados
            success: function(dados) {
                console.log(dados);
                console.log(formDataAltIndexRua);
            // for (var i = 0; dados.length > i; i++) {

                // for(var i = 0; dados.length > i; i++){
                //     if(dados[i].nome == formDataAltIndexRua.get("editNome") ){
                //         dados.remove(dados[i]);
                //     }
                // }
                
                dados = dados.filter(item => item.nome != formDataAltIndexRua.get("editNome"))
                console.log(dados)

                const nomeJaExiste = dados.some((item) => item.nome == formDataAltIndexRua.get("editNome"));
                console.log(nomeJaExiste);
                if(nomeJaExiste){

                    Swal.fire({
                        type: 'error',
                        title: 'Erro!',
                        text: 'Esse item ja existe',
                        })
                    // break;

                }else{

                    fetch('../assets/php/fluxo.php?action=altIndexItemRua', {
                        method: 'POST',
                        body: formDataAltIndexRua
                    }).then(response => response.text())
                    .then(text => {
                        if( text === 'sucesso') {

                            carregarListaItensRuas();
                            sucessAltIndexRua();
                        }else{
                            Swal.fire({
                                type: 'error',
                                title: 'Erro!',
                                text: 'Esse item ja existe',
                                })


                        }
                    })

                }
        }
    
    
        })
    })
}