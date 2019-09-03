
function dateSet(){

    $('#saidaModal').on('show.bs.modal', function(event) {       
        var now  = new Date();
        var date = now.getDate()  + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
        modal.find('#dashDateSaida').val(date);
    })
}
function setPreventFormDataItemRua(){
    caminhoFormData = "../assets/php/fluxo.php?action=cadItemRua";
    const formCadItem =  document.querySelector("#cadItemRua")
    formCadItem.onsubmit = function(e){
        e.preventDefault()
        setFormDataItem(formCadItem, caminhoFormData)
           
    }
}
function setPreventFormDataItemArmario(){
    caminhoFormData = "../assets/php/fluxo.php?action=cadItemArmario";
    const formCadItem =  document.querySelector("#cadItemArmario")
    formCadItem.onsubmit = function(e){
        e.preventDefault()
        setFormDataItem(formCadItem, caminhoFormData)
           
    }
}


function setFormDataItem(formCadItem, caminhoFormData){

    const formDataCadItem = new FormData(formCadItem);

    fetch(caminhoFormData, {
        method: 'POST',
        body: formDataCadItem

    }).then(response => response.text())
    .then(text => {

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

function cloneNodeAddItem() {
    var $cloneCod = $('#cloneNodeCod').clone();
    var $cloneQuant = $('#cloneNodeQuantidade').clone();

    $('#cloneNodeTarget').append($cloneCod);
    $('#cloneNodeTarget').append($cloneQuant);

}
