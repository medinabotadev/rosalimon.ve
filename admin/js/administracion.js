// VARIABLES GLOBALES

// EVENT LISTENERS
eventListeners();
function eventListeners(){
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}

function validarRegistro(e){
    e.preventDefault();

    var cedula = document.querySelector('#cedula').value,
        password = document.querySelector('#password').value,
        tipo = document.querySelector('#tipo').value;
    
    if(cedula === '' || password === ''){
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Debe completar todos los campos'
          });
    } else {
        datos = new FormData();
        datos.append('cedula', cedula);
        datos.append('password', password);
        datos.append('tipo', tipo);

                
        var xhr = new XMLHttpRequest();

        xhr.open('POST', 'includes/functions/modelo-login.php');

        xhr.onload = function() {
            if(this.status === 200){
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);

                if(respuesta.respuesta === 'correcto'){
                    if(respuesta.accion === 'crear'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Registro exitoso',
                            text: 'Presione OK para ir al login'
                        })
                        .then(resultado => {
                            if(resultado.value){
                                window.location.href = 'login.php';
                            }
                        })
                    } else if (respuesta.accion === 'login'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Login correcto',
                            text: 'Presiona OK para abrir el administrador'
                        })
                        .then(resultado => {
                            if(resultado.value){
                                window.location.href = 'admin.php';
                            }
                        })
                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un error'
                      })
                }
            }
        }

        xhr.send(datos);
    }

}