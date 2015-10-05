var sector = {};
var curItem = {};
var curIdSector = 0;
var colorBlue = '#0079C0';
var colorGray = '#BBBDBF';
var colorPurple = '#E61499';
var pathB = 'public/image/sectores/';
    sector = [
        {id: 1, name: 'Transporte', image: pathB+'ico_transporte.png', imageSelect: pathB+'ico_transporte_xx.png', imageOn: pathB+'ico_transporte_on.png'},
        {id: 2, name: 'Comercio y turismo', image: pathB+'ico_comercio.png', imageSelect: pathB+'ico_comercio_xx.png', imageOn: pathB+'ico_comercio_on.png'},
        {id: 3, name: 'Irrigación', image: pathB+'ico_irrigacion.png', imageSelect: pathB+'ico_irrigacion_xx.png', imageOn: pathB+'ico_irrigacion_on.png'},
        {id: 4, name: 'Energía', image: pathB+'ico_energia.png', imageSelect: pathB+'ico_energia_xx.png', imageOn: pathB+'ico_energia_on.png'},
        {id: 5, name: 'Seguridad', image: pathB+'ico_seguridad.png', imageSelect: pathB+'ico_seguridad_xx.png', imageOn: pathB+'ico_seguridad_on.png'},
        {id: 6, name: 'Eduación', image: pathB+'ico_educacion.png', imageSelect: pathB+'ico_educacion_xx.png', imageOn: pathB+'ico_educacion_on.png'},
        {id: 7, name: 'Saniamiento y Salud', image: pathB+'ico_salud.png', imageSelect: pathB+'ico_salud_xx.png', imageOn: pathB+'ico_salud_on.png'},
        {id: 8, name: 'Telecomunicaciones', image: pathB+'ico_telecomunicaciones.png', imageSelect: pathB+'ico_telecomunicaciones_xx.png', imageSelect: pathB+'ico_telecomunicaciones_on.png'},
        {id: 9, name: 'Cultura y Esparcimiento', image: pathB+'ico_cultura.png', imageSelect: pathB+'ico_cultura_xx.png', imageOn: pathB+'ico_cultura_on.png'},
        {id: 10, name: 'Otros', image: pathB+'ico_otros.png', imageSelect: pathB+'ico_otros_xx.png', imageOn: pathB+'ico_otros_on.png'}
    ];
var departamento = [];
    departamento[0] = {name : 'amazonas'};
    departamento[1] = {name : 'ancash'};
    departamento[2] = {name : 'apurimac'};
    departamento[3] = {name : 'arequipa'};
    departamento[4] = {name : 'ayacucho'};
    departamento[5] = {name : 'cajamarca'};
    departamento[6] = {name : 'cusco'};
    departamento[7] = {name : 'huancavelica'};
    departamento[8] = {name : 'huanuco'};
    departamento[9] = {name : 'ica'};
    departamento[10] = {name : 'junin'};
    departamento[11] = {name : 'la libertad'};
    departamento[12] = {name : 'lambayeque'};
    departamento[13] = {name : 'lima'};
    departamento[14] = {name : 'loreto'};
    departamento[15] = {name : 'madre de dios'};
    departamento[16] = {name : 'moquegua'};
    departamento[17] = {name : 'pasco'};
    departamento[18] = {name : 'piura'};
    departamento[19] = {name : 'puno'};
    departamento[20] = {name : 'san martin'};
    departamento[21] = {name : 'tacna'};
    departamento[22] = {name : 'tumbes'};
    departamento[23] = {name : 'ucayali'};

function seleccionarDepa(el, statusOver) {
    var json = readMetaData(el);
    setText(json, statusOver);
    selectSector(el, json.sectores, statusOver);
    //
    setSector();
}
function readMetaData(el) {
    var stringMeta =  el.getAttribute('metadatajson')
    var str_json = JSON.stringify(eval("(" + stringMeta + ")"));
    return JSON.parse(str_json);
}

function setText(data, flag) {
    var text = document.getElementById('nombre_depa');
    if (flag) {
        text.setAttribute('x', data.x);
        text.setAttribute('y', data.y);
        text.innerHTML = data.name;
    } else {
        text.innerHTML = '';
    }
}

function selectSector(el, sectores, flagOVER) {
    var json = readMetaData(el);
    if (curItem.id_departamento == json.id_departamento) {
        //
    } else {
        if (flagOVER == true) {
            el.style.fill = '#0079C0';
            el.style.fillOpacity = 1;
        } else {
            el.style.fillOpacity = 0;
        }
    }

    sector.forEach(function(item, i) {
        var img = document.getElementById('sector_'+item.id);
        var imgText = document.getElementById('sector_text_'+item.id);
        var idlocal = item.id;

        if (flagOVER == true) {
            if (typeof(sectores[item.id]) != 'undefined') {
                img.setAttribute('xlink:href', sector[i].imageOn);
                imgText.innerHTML = sector[i].name.toUpperCase();
                imgText.setAttribute('fill', colorBlue);
            } else {
                img.setAttribute('xlink:href', item.image);
                imgText.innerHTML = sector[i].name.toUpperCase();
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
                imgText.innerHTML = '';
            }
        }
    });
    // set sector
    setSector();
}
// click
function clickDepa(el) {
    el.style.fill = '#0079C0';
    el.style.fillOpacity = 1;
    var json = readMetaData(el);
    curItem = json;
}

function setSector() {
    if (Object.keys(curItem).length > 0) {
        if (Object.keys(curItem.sectores).length > 0) {
            var data = Object.keys(curItem.sectores);
            data.forEach(function(i){
                var img = document.getElementById('sector_'+i);
                var imgText = document.getElementById('sector_text_'+i);
                var indice = i-1;
                if (curIdSector == i) {
                    img.setAttribute('xlink:href', sector[indice].imageSelect);
                    imgText.setAttribute('fill', colorPurple);
                } else {
                    img.setAttribute('xlink:href', sector[indice].imageOn);
                    imgText.setAttribute('fill', colorBlue);
                }
            });
        }
    }
}

//========================================
// buble
function abrirVentanaBase(el) {
    modalPadre(true);

    var $modal = $('#modalPadre');
    var strid = el.getAttribute('id');
    var key = strid.split('_')[1];
    //console.log('el', key);
    curIdSector = key;

    $modal.find('.title').html(curItem.sectores[key].name);
    $modal.find('.content').html(curItem.sectores[key].content);
    el.setAttribute('xlink:href',curItem.sectores[key].imageSelect);
    setSector();
}

function modalPadre(show) {
    var $modal = $('#modalPadre');
    var $shadow = $('#modalPadreShadow');
    if (show == true) {
        $modal.css('display', 'block');
        $shadow.show();
    } else {
        $modal.css('display', 'none');
        $shadow.hide();
    }
}
function modalHijo(event, show) {
    event.preventDefault();
    var $modal = $('#modalHijo');
    var $shadow = $('#modalHijoShadow');
    if (show == true) {
        $modal.css('display', 'block');
        $shadow.show();
    } else {
        $modal.css('display', 'none');
        $shadow.hide();
    }
    modalPadre(false);
}


//Load init
$(function() {
    $('.btn-close').click(function(event){
        modalPadre(false);
        modalHijo(event, false);
        //$(this).parent().css('display', 'none')
    })
});


/**
* =============================================================================
* SLIDE
* =============================================================================
*/
$(document).ready(function() {
    var autoplaySlider = $("#content-slider").lightSlider({
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        }
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());

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

    // acion eventsector
    $('#slide a img').click(function(){
        var link = $(this).attr('src');
        $modalTop.find('img').attr('src', link);
        $modalTop.find('a').attr('href', link);

        $shadow_modalTop.show();
        $modalTop.show();
    });


});
