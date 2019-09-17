function dataTablesEstoque(){
    $(document).ready(function() {
        $('#tabelaItens').DataTable();
    });
}
function carregarListaItens() {
    typeIndexDel = "delIndex";

    $('#listItens').empty(); //Limpando a tabela
    $.ajax({
        type: 'post', //Definimos o método HTTP usado
        dataType: 'json', //Definimos o tipo de retorno
        url: '../assets/php/jsonListItens.php', //Definindo o arquivo onde serão buscados os dados
        success: function(dados) {
            console.log(dados);
            for (var i = 0; dados.length > i; i++) {
                //Adicionando registros retornados na tabela
                $('#listItens').append('<tr>' + '<td class="text-center">' + dados[i].id + '</td>' +
                    '<td class="text-center">' + dados[i].cod_end + '</td>' +
                    '<td class="text-center">' + dados[i].nome + '</td>' +
                    '<td class="text-center">' + dados[i].referencia + '</td>' +

                    '<td class="text-center">' + dados[i].quantidade + '</td>' +
                    '<td class="text-center">' + dados[i].observacao + '</td>' +

                    '<td style="margin-left:-20px" class="td-actions text-center">' +

                    '<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal" data-whateverid =' + dados[i].id + ">" + 
                    '<i class="material-icons">add</i>' +
                    '</button>' +


                    '<button type="button" rel="tooltip" class="btn btn-danger" data-toggle="modal" data-target="#saidaModal" data-whateverid =' + dados[i].id + ">" +          
                    '<i class="material-icons">remove</i>' +
                    '</button>' +

                    '<button type="button" rel="tooltip" class="btn btn-primary" data-toggle="modal" data-target="#editModalItens" data-whateverid ="' + dados[i].id + '" ' +
                    'data-whatevercodend ="' + dados[i].cod_end + '" ' + " " +
                    'data-whatevernome =' + dados[i].nome + " " +                  
                    'data-whateverquantidade =' + dados[i].quantidade + " " +
                    'data-whateverobservacao =' + dados[i].observacao + ">" +
                    '<i class="material-icons">edit</i>' +
                    '</button>' +

                    // '<button type="button" rel="tooltip" class="btn btn-danger" onClick = "confirmDelIndex(' + dados[i].id + ','+dados[i].n_rua+')">' +
                    // '<i class="material-icons">delete</i>' +
                    // '</button>' +

                    '</td>' +

                    '</tr>');
                    console.log(dados[i].nome)
                    
            }
            dataTablesEstoque();

        }
    });
}

function povoaModalDeEdicao(){

    $('#editModalItens').on('show.bs.modal', function(event) {

        // alert("In Function" );

        var button = $(event.relatedTarget) // Button that triggered the modal         
        var id = button.data('whateverid') // Extract info from data-* attributes
        var cod_end = button.data('whatevercodend')
        var nome = button.data('whatevernome')
        var quantidade = button.data('whateverquantidade')
        var observacao = button.data('whateverobservacao')


        console.log(nome)

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
            // modal.find('.modal-title').text('ID ' + recipient)
        modal.find('#idPro').val(id)
        modal.find('#codEnd').val(cod_end)

        modal.find('#editNome').val(nome)
        modal.find('#editQuantidade').val(quantidade)
        modal.find('#editObservacao').val(observacao)

    })
}
function povoaModalDeSaida(){

    $('#saidaModal').on('show.bs.modal', function(event) {

        // alert("In Function" );

        var button = $(event.relatedTarget) // Button that triggered the modal         
        var id = button.data('whateverid') // Extract info from data-* attributes
       

        // console.log(button)

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
            // modal.find('.modal-title').text('ID ' + recipient)
        modal.find('#cod').val(id)
        

    })
}
function povoaModalDeEntrada(){

    $('#entradaModal').on('show.bs.modal', function(event) {

        // alert("In Function" );

        var button = $(event.relatedTarget) // Button that triggered the modal         
        var id = button.data('whateverid') // Extract info from data-* attributes
       

        // console.log(button)

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
            // modal.find('.modal-title').text('ID ' + recipient)
        modal.find('#cod').val(id)
        

    })
}

// function confirmDelIndex(id,typeDelIndex) {
//     console.log(id);
//     console.log(typeDelIndex);


//     // var resposta = confirm("Deseja remover esse registro?");

//     // if (resposta == true) {
//     //     window.location.href = "../assets/php/fluxo.php?action=delIndexRua&id="+id;
//     // }
//     if(typeDelIndex != undefined){

//         var locationDel = "../assets/php/fluxo.php?action=delIndexRua&id=" + id;
//         var update = "Ruas"
//     }else{
//         var locationDel = "../assets/php/fluxo.php?action=delIndexArmario&id=" + id;
//         var update = "Armarios"
//     }

//     Swal.fire({
//         title: 'Você tem certeza??',
//         text: 'Você não poderá recuperar este registro!',
//         type: 'warning',
//         showCancelButton: true,
//         confirmButtonText: 'Sim, tenho certeza!',
//         cancelButtonText: 'Não, mante-lo'
//     }).then((result) => {
//         if (result.value) {
//             Swal.fire(
//                 'Deletado!',
//                 'O registro foi deletado com sucesso.',
//                 'success'
//             )
//             // setTimeout(function() {
//             //     window.location.href = locationDel;
//             // }, 1000);

//             fetch(locationDel, {
//                 method: 'GET',
//                 body:null
        
//             })
//             if(update == "Ruas"){
//                 carregarListaItensRuas()

//             }else if(update == "Armarios"){
//                 carregarListaItensArmarios()

//             }

//             // For more information about handling dismissals please visit
//             // https://sweetalert2.github.io/#handling-dismissals
//         } else if (result.dismiss === Swal.DismissReason.cancel) {
//             Swal.fire(
//                 'Cancelado',
//                 'O registro foi mantido :)',
//                 'error'
//             )
//         }
//     })
// }
function sucessAltItem() {
    Swal.fire({
    position: 'center',
    type: 'success',
    title: 'Item Alterado com Sucesso!',
    showConfirmButton: false,
    timer: 1500
    })

}
function setPreventFormDataAltItem(){
    caminhoFormDataAltItem = "../assets/php/fluxo.php?action=altItem";
    const formAltItem =  document.querySelector("#formAltItem")
    formAltItem.onsubmit = function(e){

        e.preventDefault();
        setFormAltItem(formAltItem, caminhoFormDataAltItem);
           
    }
}
function setFormAltItem(formAltItem, caminhoFormDataAltItem){

    const formDataAltItem = new FormData(formAltItem);
    
    fetch(caminhoFormDataAltItem, {
        method: 'POST',
        body: formDataAltItem
    }).then(response => response.text())
    .then(text => {
        console.log(text)
        if( text === 'Sucesso') {
            sucessAltItem();
            carregarListaItens();

        }else if( text === 'Endereço Inexistente') {
            Swal.fire({
                type: 'error',
                title: 'Erro!',
                text: text,
                })

        }else{
            Swal.fire({
                type: 'error',
                title: 'Erro!',
                text: 'Ao alterar',
                })
        }
    })
}






        // console.log(formDataAltIndexRua.get("editNome"));


        // $.ajax({
        //     type: 'post', //Definimos o método HTTP usado
        //     dataType: 'json', //Definimos o tipo de retorno
        //     url: "../assets/php/jsonListRuas.php", //Definindo o arquivo onde serão buscados os dados
        //     success: function(dados) {
        //         console.log(dados);
        //         console.log(formDataAltIndexRua);
            // for (var i = 0; dados.length > i; i++) {

                // for(var i = 0; dados.length > i; i++){
                //     if(dados[i].nome == formDataAltIndexRua.get("editNome") ){
                //         dados.remove(dados[i]);
                //     }
                // }
                
                // dados = dados.filter(item => item.nome != formDataAltIndexRua.get("editNome"))
                // console.log(dados)

                // const nomeJaExiste = dados.some((item) => item.nome == formDataAltIndexRua.get("editNome"));
                // console.log(nomeJaExiste);
                // if(nomeJaExiste){

                //     Swal.fire({
                //         type: 'error',
                //         title: 'Erro!',
                //         text: 'Esse item ja existe',
                //         })
                //     // break;

                // }else{

 