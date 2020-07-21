$(document).ready(function(){
    

    // MOSTRAR Y OCULTAR PRODUCTOS
    $('.items').hide()
    $('.categorias a').on('click', function(event){

        var enlace = $(this).attr('href')
        $(enlace).addClass('mostrar-items')
        $(enlace).slideToggle(1500)
    })
    $('.banner a').on('click', function(event){
        var enlace = $(this).attr('href')
        $(enlace).addClass('mostrar-items')
        $(enlace).slideToggle(1500)
    })
})