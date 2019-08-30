

function setFormDataItemRua(idFormData, caminhoFormData){

    var jsonReq;
    console.log(idFormData);

    if(idFormData == "cadItemRua" ){
        jsonReq = '../assets/php/jsonListRuas.php';
    }else if(idFormData == "cadItemArmario"){
        jsonReq = '../assets/php/jsonListArmarios.php';
    }

    
  
    const formLogin = document.getElementById(idFormData);
    // console.log(formDataLogin.get("editNome"));
    formLogin.addEventListener("submit", function(e) {
        e.preventDefault();

        const formDataLogin = new FormData(this);
        // formDataLogin.append("name","Parafuso");
        // console.log(formDataLogin.get("name"));
        console.log(formDataLogin.get("nome"));

        $.ajax({
            type: 'post', //Definimos o método HTTP usado
            dataType: 'json', //Definimos o tipo de retorno
            url: jsonReq, //Definindo o arquivo onde serão buscados os dados
            success: function(dados) {
                console.log(dados);
                // for (var i = 0; dados.length > i; i++) {
                    const nomeJaExiste = dados.some((item) => item.nome == formDataLogin.get("nome"))
                    if(nomeJaExiste){

                        Swal.fire({
                            type: 'error',
                            title: 'Erro!',
                            text: 'Esse item ja existe',
                            })
                        // break;

                    }else{

                        fetch(caminhoFormData, {
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
                            // break;

                        
                        // }

                    }
                }
            });
        })
    }
