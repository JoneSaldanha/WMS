function setLogin(){
    caminhoFormDataLogin = "assets/php/login.php"; 
    const formLogin =  document.querySelector("#formLogin")

    formLogin.onsubmit = function (e){        
        e.preventDefault();   
        setFormDataLogin(formLogin, caminhoFormDataLogin);  
    }
}


function setFormDataLogin(formLogin, caminhoFormDataLogin){

    const formDataLogin = new FormData(formLogin);

    fetch(caminhoFormDataLogin, {
        method: 'POST',
        body: formDataLogin

    }).then(response => response.text())
    .then(text => {

        if( text === 'Erro 00') {
            console.log("Sucesso")
            Swal.fire({               
                type: 'error',
                title: 'Erro',
                text: 'Preencha os campos',

                })


        }else if( text === 'Erro 01') {

            Swal.fire({               
                type: 'error',
                title: 'Erro',
                text: 'Usuario ou senha incorretos',

            })
        }else{
            window.location.href = "/wms/examples/dashboard.php";
        }
    })   
}