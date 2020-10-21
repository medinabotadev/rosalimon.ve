// VARIABLES GLOBALES

// EVENT LISTENERS
eventListeners();

function eventListeners() {

    const formulario = document.querySelector('#formulario'),
          listadoOrdenes = document.querySelector('.listadoOrdenes'),
          listadoContactos = document.querySelector('.listadoPersonasContactar');

    if (formulario) {
        formulario.addEventListener('submit', validarRegistro);
    }
    if (listadoOrdenes) {
        listadoOrdenes.addEventListener('click', verificar_click_ordenes);
    }
    if (listadoContactos) {
        listadoContactos.addEventListener('click', verificar_click_contactos);
    }
}

function validarRegistro(e) {
    e.preventDefault();

    var cedula = document.querySelector('#cedula').value,
        password = document.querySelector('#password').value,
        tipo = document.querySelector('#tipo').value;

    if (cedula === '' || password === '') {
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

        xhr.onload = function () {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                if (respuesta.respuesta === 'correcto') {
                    if (respuesta.accion === 'crear') {
                        Swal.fire({
                                icon: 'success',
                                title: 'Registro exitoso',
                                text: 'Presione OK para ir al login'
                            })
                            .then(resultado => {
                                if (resultado.value) {
                                    window.location.href = 'login.php';
                                }
                            })
                    } else if (respuesta.accion === 'login') {
                        Swal.fire({
                                icon: 'success',
                                title: 'Login correcto',
                                text: 'Presiona OK para abrir el administrador'
                            })
                            .then(resultado => {
                                if (resultado.value) {
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

// LISTA DE ORDENES
function verificar_click_ordenes(e){
    if (e.target.getAttribute('src') == 'img/delete.svg') {
        eliminarOrden(e);
    } else if (e.target.classList.contains('checkbox')){
        marcarStatus(e);
    }
}

function eliminarOrden(e){
        const orden_id = e.target.parentElement.getAttribute('data-ordenId');
        
        Swal.fire({
            title: 'Esta seguro/a que desea eliminar esta orden?',
            text: "No podra deshacer los cambios!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                const datos = new FormData;
                datos.append('orden_id', orden_id);
                datos.append('accion', 'borrar_orden')

                const xhr = new XMLHttpRequest();

                xhr.open('POST', 'includes/functions/modelo-admin.php', true);

                xhr.onload = function(){
                    if(this.status == 200){
                        const respuesta = JSON.parse(xhr.responseText);
                        if (respuesta.respuesta == 'correcto') {
                            e.target.parentElement.parentElement.parentElement.remove();
                            Swal.fire(
                                'Correcto',
                                'Se ha eliminado la orden',
                                'success'
                              )
                        }
                    }
                }
                xhr.send(datos)
            }
          })
    }

function marcarStatus(e){
    const orden_id = e.target.getAttribute('data-ordenId');
    if (e.target.checked) {
        // COMPLETADO
        const datos = new FormData;
        datos.append('orden_id', orden_id);
        datos.append('status', 1);
        datos.append('accion', 'actualizar_status_orden');

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'includes/functions/modelo-admin.php', true);

        xhr.onload = function(){
            if (this.status = 200) {
                const respuesta = JSON.parse(xhr.responseText);
                console.log(`Pedido ${orden_id} completado: ${respuesta.respuesta}`);
                cantidadCompletados();
            }
        }

        xhr.send(datos)
    } else {
        // DESCOMPLETADO
        const datos = new FormData;
        datos.append('orden_id', orden_id);
        datos.append('status', 0);
        datos.append('accion', 'actualizar_status_orden');

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'includes/functions/modelo-admin.php', true);

        xhr.onload = function(){
            if (this.status = 200) {
                const respuesta = JSON.parse(xhr.responseText);
                console.log(`Pedido ${orden_id} descompletado: ${respuesta.respuesta}`);
                cantidadCompletados();
            }
        }

        xhr.send(datos)
    }
}

function cantidadCompletados(){
    const ordenes = document.querySelectorAll('.ordenes'),
          total_ordenes = ordenes.length;
    let cantidad_completados = [],
        porcentaje;

    for (let i = 0; i < total_ordenes; i++) {
        if (ordenes[i].checked) {
            cantidad_completados.push(i);
        }
    }
    porcentaje = (cantidad_completados.length / total_ordenes) * 100;
    // console.log(porcentaje);
}
// FIN LISTA DE ORDENES


// LISTA DE PERSONAS CONTACTAR
function verificar_click_contactos(e) {
    if (e.target.getAttribute('src') == 'img/delete.svg') {
        eliminarContacto(e);
    } else if (e.target.classList.contains('checkbox')){
        marcarStatusContacto(e);
    }
}
function eliminarContacto(e) {
    const contacto_id = e.target.parentElement.getAttribute('data-contactoId');
    Swal.fire({
        title: 'Esta seguro/a que desea eliminar esta solicitud de contacto?',
        text: "No podra deshacer los cambios!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            const datos = new FormData;
            datos.append('contacto_id', contacto_id);
            datos.append('accion', 'borrar_contacto')

            const xhr = new XMLHttpRequest();

            xhr.open('POST', 'includes/functions/modelo-admin.php', true);

            xhr.onload = function(){
                if(this.status == 200){
                    const respuesta = JSON.parse(xhr.responseText);
                    if (respuesta.respuesta == 'correcto') {
                        e.target.parentElement.parentElement.parentElement.remove();
                        Swal.fire(
                            'Correcto',
                            'Se ha eliminado la solicitud',
                            'success'
                          )
                    }
                }
            }
            xhr.send(datos)
        }
      })
}
function marcarStatusContacto(e) {
    const contacto_id = e.target.getAttribute('data-contactoId');
    if (e.target.checked) {
        // COMPLETADO
        const datos = new FormData;
        datos.append('contacto_id', contacto_id);
        datos.append('status', 1);
        datos.append('accion', 'actualizar_status_contacto');

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'includes/functions/modelo-admin.php', true);

        xhr.onload = function(){
            if (this.status = 200) {
                const respuesta = JSON.parse(xhr.responseText);
                console.log(`Contacto ${contacto_id} completado: ${respuesta.respuesta}`);
            }
        }

        xhr.send(datos)
    } else {
        // DESCOMPLETADO
        const datos = new FormData;
        datos.append('contacto_id', contacto_id);
        datos.append('status', 0);
        datos.append('accion', 'actualizar_status_contacto');

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'includes/functions/modelo-admin.php', true);

        xhr.onload = function(){
            if (this.status = 200) {
                const respuesta = JSON.parse(xhr.responseText);
                console.log(`Contacto ${contacto_id} descompletado: ${respuesta.respuesta}`);
            }
        }

        xhr.send(datos)
    }
}
// FIN LISTA DE PERSONAS CONTACTAR