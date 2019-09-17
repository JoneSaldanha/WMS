function dataTablesEnderecos(){
    $(document).ready(function() {
        $('#listEndRuas').DataTable();
        $('#listEndArmarios').DataTable();
        $('#listEndGaveteiros').DataTable();

    });
}
function carregarListaEnd() {
    console.log("Lista de Enderecos");

    $('#listEnderecos').empty(); //Limpando a tabela
    $.ajax({
        type: 'POST', //Definimos o método HTTP usado
        dataType: 'json', //Definimos o tipo de retorno
        url: '../assets/php/jsonListEnd.php', //Definindo o arquivo onde serão buscados os dados
        success: function(dados) {

            console.log(dados);            
            for (var i = 0; dados.length > i; i++) {
                
                // dataTarget = "";

                // if(dados[i].identificador == dataTarget ){

                // }

                //Adicionando registros retornados na tabela
                if(dados[i].identificador == "Ruas"){
                    $('#listEnderecosRuas').append('<tr>' + '<td class="text-center">' + dados[i].id + '</td>' +
                        '<td class="text-center">' + dados[i].identificador + '</td>' +
                        '<td class="text-center">' + dados[i].rua + '</td>' +
                        '<td class="text-center">' + dados[i].lado + '</td>' +
                        '<td class="text-center">' + dados[i].prateleira + '</td>' +
                        '<td class="text-center">' + dados[i].andar + '</td>' +
                        '<td class="text-center">' + dados[i].observacao + '</td>' +
                        // '<td>' + dados[i].limite_itens + '</td>' +

                        '<td class="td-actions text-center">' +

                        '<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal" data-whateverid =' + dados[i].id + ">" + 
                        '<i class="material-icons">edit</i>' +
                        '</button>' +                  


                        '</td>' +

                        '</tr>');
                        
                }else if(dados[i].identificador == "Armarios"){

                    $('#listEnderecosArmarios').append('<tr>' + '<td class="text-center">' + dados[i].id + '</td>' +
                    '<td class="text-center">' + dados[i].identificador + '</td>' +
                    
                    '<td class="text-center">' + dados[i].armario + '</td>' +
                    '<td class="text-center">' + dados[i].lado + '</td>' +
                    '<td class="text-center">' + dados[i].andar + '</td>' +
                    '<td class="text-center">' + dados[i].observacao + '</td>' +

                   
                    // '<td>' + dados[i].limite_itens + '</td>' +

                    


                    '<td class="td-actions text-center">' +

                    '<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal" data-whateverid =' + dados[i].id + ">" + 
                    '<i class="material-icons">edit</i>' +
                    '</button>' +                  


                    '</td>' +

                    '</tr>');


                }else if (dados[i].identificador == "Gaveteiros"){
                    $('#listEnderecosGaveteiros').append('<tr>' + '<td class="text-center">' + dados[i].id + '</td>' +
                        '<td class="text-center">' + dados[i].identificador + '</td>' +
                        '<td class="text-center">' + dados[i].gaveteiro + '</td>' +
                        '<td class="text-center">' + dados[i].andar + '</td>' +
                        '<td class="text-center">' + dados[i].container + '</td>' +
                        '<td class="text-center">' + dados[i].observacao + '</td>' +
                        // '<td>' + dados[i].limite_itens + '</td>' +

                        '<td class="td-actions text-center">' +

                        '<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal" data-whateverid =' + dados[i].id + ">" + 
                        '<i class="material-icons">edit</i>' +
                        '</button>' +                  


                        '</td>' +

                        '</tr>');
                        
                }
            }
            dataTablesEnderecos()
        }
    });
}