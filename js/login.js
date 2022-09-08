function login(){
    let user = document.getElementById('user').value
    let password = document.getElementById('password').value
    
    if(user=='admin' && password=='admin'){
        location.href= "./pages/home.html";
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

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  }

