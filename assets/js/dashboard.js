
// function dateSet(){

//     $('#saidaModal').on('show.bs.modal', function(event) {       
//         var now  = new Date();
//         var date = now.getDate()  + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
//         modal.find('#dashDateSaida').val(date);
//     })
// }
function showOptionForm(){
    console.log("Teste de Função")
    var type = $("#inputType").val();
    console.log(type);

    $("#divObs").css("display", "block");

    if(type == "Ruas"){


        $("#divCadEndRuas").css("display", "block");
        $("#divCadEndRuas").find("input").removeAttr('disabled');

        $("#divCadEndArmarios").css("display", "none");
        $("#divCadEndArmarios").find("input").attr('disabled', 'disabled');

        $("#divCadEndGaveteiros").css("display", "none");
        $("#divCadEndGaveteiros").find("input").attr('disabled', 'disabled');


    }else if(type == "Armarios"){


        $("#divCadEndArmarios").css("display", "block");      
        $("#divCadEndArmarios").find("input").removeAttr('disabled');

        $("#divCadEndRuas").css("display", "none");
        $("#divCadEndRuas").find("input").attr('disabled', 'disabled');

        $("#divCadEndGaveteiros").css("display", "none");
        $("#divCadEndGaveteiros").find("input").attr('disabled', 'disabled');


    }else if(type == "Gaveteiros"){


        $("#divCadEndGaveteiros").css("display", "block");
        $("#divCadEndGaveteiros").find("input").removeAttr('disabled');

        $("#divCadEndRuas").css("display", "none");
        $("#divCadEndRuas").find("input").attr('disabled', 'disabled');
        
        $("#divCadEndArmarios").css("display", "none");
        $("#divCadEndArmarios").find("input").attr('disabled', 'disabled');


    }
}
function povoaSelectCodEnd() {
    // $('#cadItemModal').on('show.bs.modal', function(event) {
//     console.log("Sucesso 01")
    // $('#selectEnd').empty();
    // $('#selectEnd').append('<option selected></option>');
    
    $.ajax({
            type: 'post', //Definimos o método HTTP usado
            dataType: 'json', //Definimos o tipo de retorno
            url: '../assets/php/jsonCodEnderecos.php', //Definindo o arquivo onde serão buscados os dados
            success: function(dados) {
                // console.log("Sucesso 02")
                // console.log(dados);
                for (var i = 0; dados.length > i; i++) {
                    //Adicionando registros retornados na tabela
                    if(dados[i].identificador == "Ruas"){
                        $('#dlEnd').append('<option value="'+dados[i].id+'">'+dados[i].identificador+' - Rua: '+dados[i].rua+' - Lado: '+dados[i].lado+' - Prateleira: '+dados[i].prateleira+' - Andar: '+dados[i].andar+'</option>');
                    
                    }else if(dados[i].identificador == "Armarios"){
                        $('#dlEnd').append('<option value='+dados[i].id+'>'+dados[i].identificador+' - Armario: '+dados[i].armario+' - Lado: '+dados[i].lado+' - Andar: '+dados[i].andar+'</option>');
                    
                    }else if(dados[i].identificador == "Gaveteiros"){
                        $('#dlEnd').append('<option value='+dados[i].id+'>'+dados[i].identificador+' - Gaveteiro: '+dados[i].gaveteiro+' - Andar: '+dados[i].andar+' - Container: '+dados[i].container+'</option>');
                    }

                }
            }
    });
// })
}
function povoaSelectCodItens() {
    // $('#cadItemModal').on('show.bs.modal', function(event) {
//     console.log("Sucesso 01")
    // $('#dlCodItensSaida').empty();
    // $('#dlCodItensSaida').append('<option>');
    // $('#selectCodItensEntrada').append('<option selected></option>');
    $.ajax({
            type: 'post', //Definimos o método HTTP usado
            dataType: 'json', //Definimos o tipo de retorno
            url: '../assets/php/jsonCodItens.php', //Definindo o arquivo onde serão buscados os dados
            success: function(dados) {
                console.log("Sucesso 02")
                console.log(dados);
                for (var i = 0; dados.length > i; i++) {
                    //Adicionando registros retornados na tabela
                    $('#dlCodItensSaida').append('<option value="'+dados[i].id+'">' +dados[i].nome+' - Quantidade: '+dados[i].quantidade+' - Referencia: '+dados[i].referencia+'</option>');
                    $('#dlCodItensEntrada').append('<option value="'+dados[i].id+'">' +dados[i].nome+' - Referencia: '+dados[i].referencia+'</option>');

                }
            }
    });
// })
}
function setPreventFormDataItem(){
    caminhoFormDataItem = "../assets/php/fluxo.php?action=cadItem";
    const formCadItem =  document.querySelector("#formCadItem")
    formCadItem.onsubmit = function(e){

        e.preventDefault();
        setFormDataItem(formCadItem, caminhoFormDataItem);
        
    }
}

function setPreventFormDataEnd(){
    console.log("setPreventFormDataEnd")
    caminhoFormDataEnd = "../assets/php/fluxo.php?action=cadEnd";
    const formCadEnd =  document.querySelector("#formCadEnd")
    formCadEnd.onsubmit = function(e){

        e.preventDefault();
        setFormDataEnd(formCadEnd, caminhoFormDataEnd);
        
    }
}


function setPreventFormDataRegistroEntrada(){
    caminhoSaveRegEntrada = "../assets/php/fluxo.php?action=salvarRegistroEntrada";
    const formSaveRegEntrada =  document.querySelector("#ordEntrada")
    formSaveRegEntrada.onsubmit = function(e){

        e.preventDefault();
        setFormDataReg(formSaveRegEntrada, caminhoSaveRegEntrada);
        console.log(caminhoSaveRegEntrada)

        
    }
}

function setPreventFormDataRegistroSaida(){
    caminhoSaveRegSaida = "../assets/php/fluxo.php?action=salvarRegistroSaida";
    const formSaveRegSaida =  document.querySelector("#ordSaida")
    formSaveRegSaida.onsubmit = function(e){

        e.preventDefault();
        setFormDataReg(formSaveRegSaida, caminhoSaveRegSaida);
        console.log(caminhoSaveRegSaida)
           
    }
}

function setFormDataItem(formCadItem, caminhoFormData){

    const formDataCadItem = new FormData(formCadItem);

    fetch(caminhoFormData, {
        method: 'POST',
        body: formDataCadItem

    }).then(response => response.text())
    .then(text => {
        console.log(text);

        if( text == 'Sucesso') {
            console.log("Sucesso")
            Swal.fire({
                
                position: 'center',
                type: 'success',
                title: 'Item cadastrado com sucesso',
                showConfirmButton: false,
                timer: 2000
                })

                formCadItem.reset()
                povoaSelectCodItens()


        }else if(text == "Error End"){

            Swal.fire({
                position: 'center',
                type: 'error',
                title: 'Erro!',
                text: 'Esse endereço não esta cadastrado',
                })

        }else if(text == "Quantidade Excedida"){
            console.log("Quantidade Excedida")

            Swal.fire({
                position: 'center',
                type: 'error',
                title: 'Erro!',
                text: 'A quantidade excede os limites do endereço',
                })

        }else if (text == "Item Ja Cadastrado"){
            console.log("Erro")

            Swal.fire({
                type: 'error',
                title: 'Erro!',
                text: 'Esse item ja existe',
                })

        }else{

            Swal.fire({
                type: 'error',
                title: 'Erro!',
                text: 'Erro desconhecido',
                })
        }
    })
}
function setFormDataEnd(formCadEnd, caminhoFormData){

    const formDataCadEnd = new FormData(formCadEnd);

    fetch(caminhoFormData, {
        method: 'POST',
        body: formDataCadEnd

    }).then(response => response.text())
    .then(text => {
        console.log(text);

        if( text === 'Sucesso') {
            console.log("Sucesso")
            Swal.fire({
                
                position: 'center',
                type: 'success',
                title: 'Endereço cadastrado com sucesso',
                showConfirmButton: false,
                timer: 2000
                })

                formCadEnd.reset()
                povoaSelectCodEnd()


        }else if( text === 'Erro'){
            console.log("Erro")

            Swal.fire({
                type: 'error',
                title: 'Erro!',
                text: 'Esse endereço ja esta cadastrado',
                })

        } 
    })
}
function setFormDataReg(formSaveReg, caminhoSaveReg){

    const formDataSaveReg = new FormData(formSaveReg);

    fetch(caminhoSaveReg, {
        method: 'POST',
        body: formDataSaveReg

    }).then(response => response.text())
        .then(text => {
            console.log(text);
            if( text == 'Sucesso Saida') {
                console.log("Sucesso Saida")
                Swal.fire({
                    
                    position: 'center',
                    type: 'success',
                    title: 'Autorização concluida',
                    showConfirmButton: false,
                    timer: 2000
                    })

                    formSaveReg.reset()
                    povoaSelectCodItens()




            }else if(text == 'Sucesso Entrada'){

                console.log("Sucesso Entrada")
                Swal.fire({
                    
                    position: 'center',
                    type: 'success',
                    title: 'Entrada de Itens Conluida',
                    showConfirmButton: false,
                    timer: 2000
                    })

                    formSaveReg.reset()

            }else if(text == 'Item não encontrado'){

                console.log("Erro")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Item não cadastrado',
                    })

            }else if(text == 'Valores Duplicados'){

                console.log("Erro")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Existem itens duplicados',
                    })

            }else if(text == 'Item Inexistente'){

                console.log("Erro")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Algum dos itens não esta cadastrado',
                    })

            }else if(text == 'Erro Saida'){
                console.log("Erro Saida")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Não foi possivel realizar a autorização',
                    })

            }else if(text == 'Quantidade Insuficiente'){
                console.log("Erro Entrada")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Quantidade insuficiente em algum item',
                    })

            }else if(text == ''){
                console.log("Erro Entrada")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Não foi possivel realizar a entrada dos itens',
                    })

            } 
        })
}

function cloneNodeAddItemSaida() {

    // $('#addCloneNode').click(function() {


    var $cloneNode = $('#cloneNodeSaida').clone();
    var _elm = $cloneNode.clone();
    _elm.find("input").val("");
    _elm.find('#butRemoveCloneSaida').show();
    _elm.find('#butRemoveCloneSaida').addClass("butRemoveCloneSaida");

    $('#cloneNodeTargetSaida').append(_elm);

    // });

    $(document).on("click", ".butRemoveCloneSaida", function(e) {
        var $e = $(e.currentTarget);
        $e.closest('#cloneNodeSaida').remove();
    
    });
}
function cloneNodeAddItemEntrada() {

    // $('#addCloneNode').click(function() {


    var $cloneNode = $('#cloneNodeEntrada').clone();
    var _elm = $cloneNode.clone();
    _elm.find("input").val("");
    _elm.find('#butRemoveCloneEntrada').show();
    _elm.find('#butRemoveCloneEntrada').addClass("butRemoveCloneEntrada");

    $('#cloneNodeTargetEntrada').append(_elm);

    // });

    $(document).on("click", ".butRemoveCloneEntrada", function(e) {
        var $e = $(e.currentTarget);
        $e.closest('#cloneNodeEntrada').remove();
    
    });
}

// function showFormCadRua(){

//     var display = document.getElementById("collapseRuas").style.display;
    
//     if(display == "none"){
//         document.getElementById("collapseRuas").style.display = 'block';
//     }else{
//         document.getElementById("collapseRuas").style.display = 'none';
//     }


// }


