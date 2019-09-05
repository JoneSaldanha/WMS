
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

function setPreventFormDataRegistro(){
    caminhoSaveReg = "../assets/php/fluxo.php?action=salvarRegistro";
    const formSaveReg =  document.querySelector("#ordSaida")
    formSaveReg.onsubmit = function(e){

        e.preventDefault();
        setFormDataReg(formSaveReg, caminhoSaveReg);
           
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
            if( text == 'Sucesso') {
                console.log("Sucesso")
                Swal.fire({
                    
                    position: 'center',
                    type: 'success',
                    title: 'Autorização concluida',
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

            }else{
                console.log("Erro")

                Swal.fire({
                    type: 'error',
                    title: 'Erro!',
                    text: 'Não foi possivel realizar a autorização',
                    })

            } 
        })
}

function cloneNodeAddItem() {

    // $('#addCloneNode').click(function() {


    var $cloneNode = $('#cloneNode').clone();
    var _elm = $cloneNode.clone();
    _elm.find("input").val("");
    _elm.find('#butRemoveClone').show();
    _elm.find('#butRemoveClone').addClass("butRemoveClone");

    $('#cloneNodeTarget').append(_elm);

    // });

    $(document).on("click", ".butRemoveClone", function(e) {
        var $e = $(e.currentTarget);
        $e.closest('#cloneNode').remove();
    
    });
}

