// VARIABLES GLOBALES
const itemCarrito = document.querySelector('.productosCarrito'),
    botonAgregar = document.querySelector('#agregarAlCarrito');
// EVENTLISTENERS
eventListeners();

function eventListeners() {
    // BOTON AGREGAR AL CARRITO
    if (botonAgregar) {
        document.querySelector('#agregarAlCarrito').addEventListener('click', agregarAlCarrito);
        document.querySelector('#cantidad').value;
    }

    // BOTON ELIMINAR DEL CARRITO
    if (itemCarrito) {
        itemCarrito.addEventListener('click', eliminarDelCarrito);
    }

    cantidadProductos();
    totalCompra();

}

// AGREGAR UN NUEVO PRODUCTO AL CARRITO
function agregarAlCarrito(e) {
    e.preventDefault();
    cantidad = document.querySelector('#cantidad').value;
    codigoProducto = document.querySelector('#codigo_producto').value;
    idProducto = document.querySelector('#id_producto').value;

    if (cantidad === '') {
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
        xhr.onload = function () {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === 'correcto') {
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

// ELIMINAR UN PRODUCTO DEL CARRITO
function eliminarDelCarrito(e) {
    // SE APLICA DELEGATION
    if (e.target.classList.contains('eliminarProducto')) {
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

                    // CREAMOS LOS DATOS
                    var datos = new FormData();
                    datos.append('id_producto', idProducto);
                    datos.append('accion', 'eliminar');

                    // ABRIMOS LA CONEXION
                    xhr.open('POST', `includes/functions/modelo-carrito.php`, true);

                    // LEEMOS LA RESPUESTA
                    xhr.onload = function () {
                        if (this.status === 200) {
                            const respuesta = JSON.parse(xhr.responseText);
                            console.log(respuesta);
                            // ELIMINAMOS EL ELEMENTO DEL DOM
                            e.target.parentElement.parentElement.remove();

                            // MOSTRAMOS LA NOTIFICACION
                            Swal.fire({
                                icon: 'success',
                                title: 'Se eliminó este producto del carrito',
                                showConfirmButton: false,
                                timer: 3000
                            })
                            cantidadProductos();
                            totalCompra();
                        }
                    }

                    // ENVIAMOS LA PETICION
                    xhr.send(datos);
                }
            })

    }
}
// FUNCION PARA LEER CANTIDAD DE PRODUCTOS EN EL CARRITO
function cantidadProductos() {
    const contenedorNumero = document.querySelector('.totalProductos'),
        items_por_productos = document.querySelectorAll('.items_por_productos');
    let totalProductos = 0;
    items_por_productos.forEach(items_por_productos => {
        totalProductos += parseFloat(items_por_productos.innerHTML.slice(10))
    });
    if (totalProductos == 1) {
        contenedorNumero.innerHTML = `(${totalProductos} producto)`;
    } else {
        contenedorNumero.innerHTML = `(${totalProductos} productos)`;
    };
}

// FUNCION PARA LEER EL MONTO TOTAL DE COSTOS EN EL CARRITO
function totalCompra() {
    const item = document.querySelectorAll('.item'),
        items_por_productos = document.querySelectorAll('.items_por_productos'),
        precio_producto = document.querySelectorAll('.item-carrito .precio');
    let total = 0
    for (i = 0; i < item.length; i++) {
        total += items_por_productos[i].textContent.slice(10) * (precio_producto[i].textContent.replace('$', ""))
    }
    document.querySelector('.totalCompra').innerHTML = `${parseFloat(total)} $`;
};