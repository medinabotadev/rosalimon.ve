// VARIABLES GLOBALES

// EVENTLISTENERS
eventListeners();
function eventListeners(){
    // BOTON AGREGAR AL CARRITO
    document.querySelector('#agregarAlCarrito').addEventListener('click', agregarAlCarrito);
    document.querySelector('#cantidad').value;

}

// AGREGAR UN NUEVO PRODUCTO AL CARRITO
function agregarAlCarrito(e) {
    e.preventDefault();
    cantidad = document.querySelector('#cantidad').value;
    codigoProducto = document.querySelector('#codigo_producto').value;
    idProducto = document.querySelector('#id_producto').value;
    
    if(cantidad === ''){
        Swal.fire({
            icon: 'error',
            title: 'Debe seleccionar una cantidad',
            showConfirmButton: false,
            timer: 3000
          })
    } else {
        // SI EL USUARIO ESCOGIO UNA CANTIDAD HACER LLAMADO A AJAX
        var xhr = new XMLHttpRequest();

        // CREAMOS EL FORMDATA
        var datos = new FormData();

        datos.append('cantidad', cantidad);
        datos.append('codigo_producto', codigoProducto);
        datos.append('id_producto', idProducto);
        datos.append('accion', 'agregaralcarrito');

        // ABRIMOS LA CONEXCION
        xhr.open('POST', 'includes/functions/modelo-carrito.php', true);

        // EJECUTAR LA RESPUESTA
        xhr.onload = function(){
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if(respuesta.respuesta === 'correcto'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Se agrego este producto al carrito',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
    }
        // ENVIAMOS LOS DATOS
        xhr.send(datos);
}
}