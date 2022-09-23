function login(){

    let user = document.getElementById('user').value
    let password = document.getElementById('password').value

    if(user=='admin' && password=='admin'){
        $("#emailCandidatoSt").focusout(function() {
            $.ajax({
                    type: "POST",
                    url: "",
                    data: {
                      emailCandidatoSt: 
                      idSt: 
                    },
                    success:function(){
                    },
                    error:function() {
                    }
                  })
      })
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Datos incorrectos',
            timer:1500,
            showConfirmButton: false,
          })
    }
}

let send = document.getElementById('send')
send.onclick =(e)=>{
    e.preventDefault()
    login()
}





