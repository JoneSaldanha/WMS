const formRua = document.querySelector("#cadItemRua");
formRua.addEventListener('submit', function(e){
    e.preventDefault();
    setFormDataItemRua(formRua);

})


function setFormDataItemRua(formLogin){


    // console.log(formDataLogin.get("editNome"));
    

    const formDataLogin = new FormData(formLogin);
    // formDataLogin.append("name","Parafuso");
    // console.log(formDataLogin.get("name"));
    console.log(formDataLogin.get("nome"));

    $.ajax({
        type: 'post', //Definimos o método HTTP usado
        dataType: 'json', //Definimos o tipo de retorno
        url: '../assets/php/jsonListRuas.php', //Definindo o arquivo onde serão buscados os dados
        success: function(dados) {
            console.log(dados[0].nome);
            for (var i = 0; dados.length > i; i++) {

                if(dados[i].nome == formDataLogin.get("nome")){

                    Swal.fire({
                        type: 'error',
                        title: 'Erro!',
                        text: 'Esse item ja existe',
                        })
                    break;

                }else{

                    fetch(formLogin.action, {
                        method: 'POST',
                        body: formDataLogin
                    })
                    Swal.fire({
                        position: 'center',
                        type: 'success',
                        title: 'Item cadastrado com sucesso',
                        showConfirmButton: false,
                        timer: 2000
                        })
                        formLogin.reset();
                        break;

                    
                    }

                }
            }
        });
    }
