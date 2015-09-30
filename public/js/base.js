var sector = {};
var curItem = {};
var pathB = 'public/image/sectores/';
    sector = [
        {id: 1, name: 'Transporte', image: pathB+'ico_transporte.png'},
        {id: 2, name: 'Comercio', image: pathB+'ico_comercio.png'},
        {id: 3, name: 'Irrigación', image: pathB+'ico_irrigacion.png'},
        {id: 4, name: 'Energía', image: pathB+'ico_energia.png'},
        {id: 5, name: 'Seguridad', image: pathB+'ico_seguridad.png'},
        {id: 6, name: 'Eduación', image: pathB+'ico_educacion.png'},
        {id: 7, name: 'Saniamiento y Salud', image: pathB+'ico_salud.png'},
        {id: 8, name: 'Telecomunicaciones', image: pathB+'ico_telecomunicaciones.png'},
        {id: 9, name: 'Cultura y Esparcimiento', image: pathB+'ico_cultura.png'},
        {id: 10, name: 'Otros', image: pathB+'ico_otros.png'}
    ];


function seleccionarDepa(el, statusOver) {
    var json = readMetaData(el);
    setText(json, statusOver);
    selectSector(json.sectores, statusOver)
}
function readMetaData(el) {
    var stringMeta =  el.getAttribute('metadatajson')
    var str_json = JSON.stringify(eval("(" + stringMeta + ")"));
    return JSON.parse(str_json);
}

function setText(data, flag) {
    var text = document.getElementById('nombre_depa');
    text.setAttribute('x', data.x);
    text.setAttribute('y', data.y);
    text.innerHTML = data.name;
}

function selectSector(dataArray, flagOVER) {
    sector.forEach(function(item, i) {
        var img = document.getElementById('sector_'+item.id);
        var idlocal = item.id;

        if (flagOVER == true) {
            if (typeof(dataArray[item.id]) != 'undefined') {
                img.setAttribute('xlink:href', dataArray[idlocal].image);
            } else {
                img.setAttribute('xlink:href', item.image);
            }
        } else {
            //FUERA
            if (typeof(curItem.name) != 'undefined') { //click
                img.setAttribute('xlink:href', item.image);
                if (typeof(curItem.sectores[idlocal]) != 'undefined') {
                    img.setAttribute('xlink:href', curItem.sectores[idlocal].image);
                    img.setAttribute('onclick', 'abrirVentanaBase(this)');
                }
            } else {
                img.setAttribute('xlink:href', '');
            }
        }
    });
}
// click
function clickDepa(el) {
    el.style.fill = '#0079C0';
    el.style.fillOpacity = 1;
    var json = readMetaData(el);
    curItem = json;
}

//========================================
// buble
function abrirVentanaBase(el) {
    var $modal = $('#modalPadre');
    $modal.css('display', 'block');
    var strid = el.getAttribute('id');
    var key = strid.split('_')[1];

    $modal.find('.title').html(curItem.sectores[key].name);
    $modal.find('.content').html(curItem.sectores[key].content);
    el.setAttribute('xlink:href',curItem.sectores[key].imageSelect);
}

function abrirVentanaHijo(e) {
    e.preventDefault();
    var $modal = $('#modalHijo');
    $modal.css('display', 'block');
}


//Load init
$(function() {
    // Handler for .ready() called.
    $('.btn-close').click(function(){
        $(this).parent().css('display', 'none')
    })
});


/**
* =============================================================================
* SLIDE
* =============================================================================
*/
$(document).ready(function() {
    var autoplaySlider = $("#content-slider").lightSlider();
    $('#total').text(autoplaySlider.getTotalSlideCount());
/*    var autoplaySlider = $('#content-slider').lightSlider({
        auto:false,
        loop:false,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        }
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
*/

    // MODALS
    var $shadow =  $('#shadow');
    var $modalTop = $('#modalTop');
    var $shadow_modalTop = $('#shadow_modalTop');
    var $slide = $('#slide');

    $shadow_modalTop.click(function(){
        $(this).css('display', 'none');
        $modalTop.fadeOut();
    });
    //
    $shadow.click(function(){
        console.log('shadow');
        $(this).css('display', 'none');
        $slide.fadeOut();
    });
    //
    $('#ver-gallery').click(function(){
        $shadow.css('display', 'block');
        $slide.css('display', 'block');
        autoplaySlider.refresh()
    });

    // acion event
    $('#slide a img').click(function(){
        var link = $(this).attr('src');
        $modalTop.find('img').attr('src', link);
        $modalTop.find('a').attr('href', link);

        $shadow_modalTop.show();
        $modalTop.show();
    });


});
