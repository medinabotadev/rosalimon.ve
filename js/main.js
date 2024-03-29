$('.page').hide()
$(document).ready(function(){
    // MAPA
    if(document.getElementById('mapa')){
    var map = L.map('mapa').setView([9.435197, -64.465971], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([9.435197, -64.465971]).addTo(map)
      .bindPopup('ROSALIMON')
      .openPopup();
    }
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

        if(img == 'img/open-menu.svg'){
        $('.navegacion').slideDown(1000);
        $('.menu-movil img').attr('src', 'img/close.svg');
        img = $('.menu-movil img').attr('src');
        } else if (img = 'img/close.png'){
            $('.navegacion').slideUp(1000);
            $('.menu-movil img').attr('src', 'img/open-menu.svg');
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

    // TESTIMONIALES

    $('.testimonial blockquote img').hide()
    $('.testimonial blockquote img:nth-child(1)').show()
    var i = 1;
    setInterval(function(){
        if(i <= 5) {
        $('.testimonial blockquote img:nth-child(' + i +')').fadeIn(2000);
        $('.testimonial blockquote img:nth-child(' + (i - 1) +')').fadeOut(150);
        i++
        } else {
        // $('.testimonial blockquote img:nth-child(1)').show();
        $('.testimonial blockquote img:nth-child(5)').fadeOut(4000);
        i = 1
        }
    }, 4500);
})