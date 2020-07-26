$('.page').hide()
$(document).ready(function(){
    $('.loading').remove();
    $('.page').fadeIn(500);


    // BARRA FIJA - MENU ON TOP
    var alturaLogotipo = $('.logotipo').innerHeight();
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > alturaLogotipo){
            $('.barra-fija').addClass('fixed');
        } else {
            $('.barra-fija').removeClass('fixed');
        }
    })
    // MENU MOVIL
    var img = $('.menu-movil img').attr('src');
    $('.menu-movil').on('click', function(event){

        if(img == 'img/open-menu.png'){
        $('.navegacion').slideDown(1000);
        $('.menu-movil img').attr('src', 'img/close.png');
        img = $('.menu-movil img').attr('src');
        } else if (img = 'img/close.png'){
            $('.navegacion').slideUp(1000);
            $('.menu-movil img').attr('src', 'img/open-menu.png');
            img = $('.menu-movil img').attr('src');
        }
    })

    // MOSTRAR Y OCULTAR PRODUCTOS
    $('.items').hide();

    $('.categorias a').on('click', function(event){
        var enlace = $(this).attr('href');
        $(enlace).addClass('mostrar-items');
        $(enlace).slideToggle(1000);
    })

    $('.banner a').on('click', function(event){
        event.preventDefault();
        var enlace = $(this).attr('href');
        $(enlace).addClass('mostrar-items');
        $(enlace).slideToggle(1000);

    })
})