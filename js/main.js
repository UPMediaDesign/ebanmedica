$('ul.documentos-list-title li:last-child').addClass('active');
$('.documentos-list-content div:last-child').addClass('fade in active');
 
$('body').flowtype({
    minimum   : 320,
    maximum   : 1200,
    minFont   : 20,
    maxFont   : 22,
    fontRatio : 30
});

$('.bxslider').bxSlider({
    infiniteLoop: false,
    hideControlOnEnd: false,
    auto: false,
    touchEnabled: true,
    swipeThreshold: 50,
    mode: 'horizontal',
    pagerCustom: '.paginador',
    controls: false
});

$('.bxslider-interior').bxSlider({
    infiniteLoop: false,
    hideControlOnEnd: false,
    touchEnabled: true,
    swipeThreshold: 50,
    mode: 'horizontal',
    pager:false,
});


$('a[href="#politica"]').one('shown.bs.tab', function (e) {
    $('.bxslider-interior-dos').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: false,
        touchEnabled: true,
        swipeThreshold: 50,
        mode: 'horizontal',
        pager:false,
    });
});

$('a[href="#utilidades"]').one('shown.bs.tab', function (e) {
    $('.bxslider-interior-tres').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: false,
        touchEnabled: true,
        swipeThreshold: 50,
        mode: 'horizontal',
        pager:false,
    });
});

//  Responsive layout, resizing the items
$('.carrousel').carouFredSel({
    responsive: true,
    width: '100%',
    scroll: 1,
    prev: '#prev',
    next: '#next',
    pagination: "#pager",
    items: {
        width: 200,
        height: '50%',  //  optionally resize item-height
        visible: {
            min: 2,
            max: 5
        }
    }
});

//  Responsive layout, resizing the items
$('.carrousel-time').carouFredSel({
    responsive: true,
    circular: false,
    auto    : false,
    width: '100%',
    scroll: 1,
    prev: '#prev',
    next: '#next',
    pagination: "#pager",
    items: {
        width: 60,
        height: 40,  //  optionally resize item-height
        start:"carrousel-time li:first",
        visible: {
            min: 2,
            max: 9
        }
    }
});

function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
};

$(document).ready(function(){
    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
});

/////////////////// MAPA

google.maps.event.addDomListener(window, 'load', init);

function init() {
    
    var mapOptions = {
        zoom: 11,
        // DIRECCION DEL MAPA
        center: new google.maps.LatLng(40.6700, -73.9400), // New York
        //ESTILO DEL MAPA
        styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
    };

    // DEFINO EL DIV DONDE IMPRIMIRE EL MAPA EN EL HTML
    var mapElement = document.getElementById('map');
    //AKI SE CREA EL MAPA MAS LAS OPCIONES Y ELEMENTOS QUE DEFINIMOS ANTERIORMENTE
    var map = new google.maps.Map(mapElement, mapOptions);
}

function fixedPosition(){
  $('.bxslider article').each(function(){
    var alto = $(this).height() / 2;
    $(this).css({
      'top' : '50%',
      'position' : 'absolute',
      'margin-top' : -alto
    });
  });
};

fixedPosition();
$(window).resize(function(){
  fixedPosition();
});

jQuery(function(){
    jQuery('.navbar').data('size','big');
});

jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 350)
    {
        if(jQuery('.navbar').data('size') == 'big')
        {
            jQuery('.navbar').data('size','small');
			
            jQuery('.navbar').stop().css('box-shadow','0px 1px 5px rgba(0,0,0,.7)' );
        }
    }
    else
    {
        if(jQuery('.navbar').data('size') == 'small')
        {
            jQuery('.navbar').data('size','big');
			
            jQuery('.navbar').stop().css('box-shadow','none' );
        }  
    }
});

