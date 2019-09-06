
// function dateSet(){

//     $('#saidaModal').on('show.bs.modal', function(event) {       
//         var now  = new Date();
//         var date = now.getDate()  + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
//         modal.find('#dashDateSaida').val(date);
//     })
// }

function setPreventFormDataItemRua(){
    caminhoFormDataRua = "../assets/php/fluxo.php?action=cadItemRua";
    const formCadItemRua =  document.querySelector("#cadItemRua")
    formCadItemRua.onsubmit = function(e){

        e.preventDefault();
        setFormDataItem(formCadItemRua, caminhoFormDataRua);
           
    }
}
function setPreventFormDataItemArmario(){
    caminhoFormData = "../assets/php/fluxo.php?action=cadItemArmario";
    const formCadItem =  document.querySelector("#cadItemArmario")
    formCadItem.onsubmit = function(e){

        e.preventDefault();
        setFormDataItem(formCadItem, caminhoFormData);
           
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


        }else{
            console.log("Erro")

            Swal.fire({
                type: 'error',
                title: 'Erro!',
                text: 'Esse item ja existe',
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

            }else if(text == 'Valores Duplicados'){

                console.log("Erro")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Existem itens duplicados',
                    })

            }else if(text == 'Erro Saida'){
                console.log("Erro Saida")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Não foi possivel realizar a autorização',
                    })

            }else if(text == 'Erro Entrada'){
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

