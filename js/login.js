function login(){

    let user = document.getElementById('user').value
    let password = document.getElementById('password').value

    if(user=='admin' && password=='admin'){
        location.href= "http://181.13.244.170:5000/setcookie";
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




