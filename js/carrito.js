// VARIABLES GLOBALES
    const itemCarrito = document.querySelector('.productosCarrito'),
          botonAgregar = document.querySelector('#agregarAlCarrito');
// EVENTLISTENERS
eventListeners();
function eventListeners(){
    // BOTON AGREGAR AL CARRITO
    if(botonAgregar){
    document.querySelector('#agregarAlCarrito').addEventListener('click', agregarAlCarrito);
    document.querySelector('#cantidad').value;
    }

    // BOTON ELIMINAR DEL CARRITO
    if (itemCarrito) {
        itemCarrito.addEventListener('click', eliminarDelCarrito);
    }

    numeroProductos();
    totalCompra();

}

// AGREGAR UN NUEVO PRODUCTO AL CARRITO
function agregarAlCarrito(e) {
    e.preventDefault();
    cantidad = document.querySelector('#cantidad').value;
    codigoProducto = document.querySelector('#codigo_producto').value;
    idProducto = document.querySelector('#id_producto').value;
    
    if(cantidad === ''){
        Swal.fire({
            position: 'center',
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
                numeroProductos();
                totalCompra();
            }
    }
        // ENVIAMOS LOS DATOS
        xhr.send(datos);
}
}

// ELIMINAR UN PRODUCTO DEL CARRITO
function eliminarDelCarrito(e){
    // SE APLICA DELEGATION
    if(e.target.classList.contains('eliminarProducto')){
        const idProducto = e.target.getAttribute('data-idproducto');
        
        Swal.fire({
            title: 'Estas segura/o de eliminar este producto?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#87907d',
            cancelButtonColor: '#cf4e4e',
            confirmButtonText: 'Si, eliminar del carrito!',
            cancelButtonText: 'Cancelar'
          })
          .then((result) => {
            if (result.isConfirmed) {
                // SI EL USUARIO HA ACEPTADO HACEMOS LLAMADO A AJAX
                
                // CREAMOS LA CONEXION
                const xhr = new XMLHttpRequest();

                // ABRIMOS LA CONEXION
                xhr.open('GET', `includes/functions/modelo-carrito.php?idProducto=${idProducto}&accion=eliminar`, true);

                // LEEMOS LA RESPUESTA
                xhr.onload = function(){
                    if(this.status === 200){
                        const respuesta = JSON.parse(xhr.responseText);
                        
                        // ELIMINAMOS EL ELEMENTO DEL DOM
                        e.target.parentElement.parentElement.remove();

                        // MOSTRAMOS LA NOTIFICACION
                        Swal.fire({
                            icon: 'success',
                            title: 'Se eliminó este producto del carrito',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        numeroProductos();
                        totalCompra();
                    }
                }

                // ENVIAMOS LA PETICION
                xhr.send();
            }
          })
          
    }
}

// FUNCION PARA LEER CANTIDAD DE PRODUCTOS EN EL CARRITO
function numeroProductos(){
    const totalProductos = document.querySelectorAll('.item-carrito'),
          contenedorNumero = document.querySelector('.totalProductos'),
          cantidadProductosHeader = document.querySelector('.botonCarrito span');

    if(totalProductos.length == 1){
        contenedorNumero.innerHTML = `(${totalProductos.length} producto)`
    } else {
        contenedorNumero.innerHTML = `(${totalProductos.length} productos)`
    };
}

// FUNCION PARA LEER EL MONTO TOTAL DE COSTOS EN EL CARRITO
function totalCompra(){
    const totalCompraProductos = document.querySelectorAll('.item-carrito .precio');

    total = 0;
    for(i = 0; i < totalCompraProductos.length; i++){
        var precios = parseFloat(totalCompraProductos[i].textContent.replace('$', ""));
        total += precios
    }
    document.querySelector('.totalCompra').innerHTML = `${total} $`;
    Swal.fire({
        icon: 'success',
        title: 'Se eliminó este producto del carrito',
        showConfirmButton: false,
        timer: 3000
    })
};