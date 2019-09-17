function dataTablesRegistros(){
    $(document).ready(function() {
        $('#listaRegistrosSaida').DataTable();
        $('#listaRegistrosEntrada').DataTable();
    });
}
function carregarListaRegistros() {
    $('#listRegistros').empty(); //Limpando a tabela
    $.ajax({
        type: 'post', //Definimos o método HTTP usado
        dataType: 'json', //Definimos o tipo de retorno
        url: '../assets/php/jsonListRegistros.php', //Definindo o arquivo onde serão buscados os dados
        success: function(dados) {
            console.log(dados);
            for (var i = 0; dados.length > i; i++) {
                console.log(dados[i].do_setor);
                //Adicionando registros retornados na tabela
                if(dados[i].tipo_reg == "Saida"){
                    $('#listRegistrosSaida').append('<tr>' + '<td>' + dados[i].id + '</td>' +
                        '<td>' + dados[i].tipo_reg + '</td>' +
                        '<td>' + dados[i].do_setor + '</td>' +
                        '<td>' + dados[i].ao_setor + '</td>' +
                        '<td>' + dados[i].func_solicitante + '</td>' +
                        '<td>' + dados[i].func_solicitado + '</td>' +
                        
                        '<td class="td-actions text-center">' +

                        '<button type="button" rel="tooltip" class="btn btn-info" data-toggle="modal" data-target="#showItensReg" data-idreg =' + dados[i].id + " " + '>' +      
                        '<i class="material-icons">remove_red_eye</i>' +
                        '</button>' +

                        '</td>' +

                        '<td>' + dados[i].data_reg + '</td>' +
                        '<td>' + dados[i].observacao + '</td>' +

                        // '<td class="td-actions text-center">' +

                        // '<button type="button" rel="tooltip" class="btn btn-primary" data-toggle="modal" data-target="#saidaModal">' +
                        // '<i class="material-icons">edit</i>' +
                        // '</button>' +

                        // '</td>' +

                        '</tr>');

                }else if(dados[i].tipo_reg == "Entrada"){
                    $('#listRegistrosEntrada').append('<tr>' + '<td>' + dados[i].id + '</td>' +
                    '<td>' + dados[i].tipo_reg + '</td>' +
                    
                    '<td class="td-actions text-center">' +

                    '<button type="button" rel="tooltip" class="btn btn-info" data-toggle="modal" data-target="#showItensReg" data-idreg =' + dados[i].id + " " + '>' +      
                    '<i class="material-icons">remove_red_eye</i>' +
                    '</button>' +

                    '</td>' +

                    '<td>' + dados[i].data_reg + '</td>' +
                    '<td>' + dados[i].observacao + '</td>' +

                    // '<td class="td-actions text-center">' +

                    // '<button type="button" rel="tooltip" class="btn btn-primary" data-toggle="modal" data-target="#saidaModal">' +
                    // '<i class="material-icons">edit</i>' +
                    // '</button>' +

                    // '</td>' +

                    '</tr>');

                }
           
            }

            dataTablesRegistros()
        }
    });
}
function showItensReg(){

    $('#showItensReg').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget) 
        var idReg = button.data('idreg')

        $('#listItensRegistros').empty(); //Limpando a tabela
        $.ajax({
            type: 'post', //Definimos o método HTTP usado
            dataType: 'json', //Definimos o tipo de retorno
            url: '../assets/php/fluxo.php?action=listItensReg&id='+idReg, //Definindo o arquivo onde serão buscados os dados
            success: function(dados) {
                console.log(dados);
                
                for (var i = 0; dados.length > i; i++) {

                    console.log(dados[i].tipo);

                    if(dados[i].tipo == "Saida"){

                        $("#thSaida").css("display", "");
                        $("#thEntrada").css("display", "none");

                        
                    }else if(dados[i].tipo =="Entrada"){

                        $("#thEntrada").css("display", "");
                        $("#thSaida").css("display", "none");



                        
                    }
                    $('#listItensRegistros').append('<tr>' + '<td>' + dados[i].produto + '</td>' +
                    '<td>' + dados[i].nome + '</td>' +
                    '<td>' + dados[i].quantidade + '</td>' +
                    
                    // '<td class="td-actions">' +

                    // '<button type="button" rel="tooltip" class="btn btn-primary" data-toggle="modal" data-target="#saidaModal">' +
                    // '<i class="material-icons">edit</i>' +
                    // '</button>' +

                    // '</td>' +
                    '</tr>'
                    
                    );
                }
            }
        })

    })
}