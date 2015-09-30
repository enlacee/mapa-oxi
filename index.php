<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/plugin/bootstrap-3.3.5-dist/css/bootstrap.css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="public/css/style.css" media="screen" charset="utf-8">
        <title>Proyectos 2009 - 2015</title>
        <style type="text/css">
        body {
            margin:0;
            padding:0;
        }
        .wrapper {

        }
        #shadow {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: transparent;
            top: 0;
        }
        #modalPadre{
            position: fixed;
            background-color: white;
            border:1px solid black;
            border-radius: 26px;
            top: 25%;
            width: 34%;
            height: 66%;
            left: 6.5%;
        }
        #modalPadre h2 {
            font-family: 'BreePeru-Light';
            font-weight: bold;
            color:white;
            margin: 15px 0 0 25px;
        }
        #modalPadre .franja-lila {
            background-color: #90278E;
            display: inline-block;
            margin: 25px 0 0 0;
            padding-right: 20px;
        }
        #modalHijo {
            position: fixed;
            background-color: white;
            border:1px solid black;
            border-radius: 26px;
            top: 30%;
            width: 28%;
            height: 66%;
            left: 6.5%;
        }
        #modalHijo h2 {
            font-family: 'BreePeru-Light';
            font-weight: bold;
            color:purple;
            margin: 15px 0 0 25px;
        }
        .btn-close {
            background-image: url('public/image/btn-close.png');
            width: 70px;
            height: 70px;
            right: -18px;
            position: absolute;
            top: -18px;
            cursor: pointer;
        }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="header container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="">
                                <h2 class="main-title-1">Mapa de proyectos</h2>
                            </div>
                            <div class="text-center">
                                <h1 class="main-title-2">Obras por Impuestos</h1>
                            </div>
                            <div class="title-h1 text-right">
                                Proyectos adjudicados, en ejecución y concluidos 2009 - 2015
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-right" style="margin-top:30px">
                        <img src="public/image/ico_proinversion.png" />
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="body container">
                <div class="row">
                    <div class="col-md-4 content-instruction">
                        <div class="title-instruction">INSTRUCCIONES DE NAVEGACIÓN</div>
                        <ul>
                            <li>Click sobre el departamento a consultar.</li>
                            <li>Seleccionar el sector del proyecto a consultar y hacer click.</li>
                            <li>Buscar el proyecto en la lista y hacer click para ver detalle.</li>
                        </ul>
                    </div>
                    <div class="col-md-8  _pull-right">
                        <div style="width: 100%">
                            <?php require_once 'svg.php' ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer container">
                <div class="button-download col-md-3 pull-right nopadding">
                    <div class="text-center imageDownload">
                        <img src="public/image/ico_descargue.png" alt="" />
                    </div>
                    <div class="row">
                        <div class="text-bold text-center">
                            Descargue aquí
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-bold text-center">
                            Todos los proyectos en Excel
                        </div>
                    </div>

                </div>
            </div>
            <div style="clear:both"></div>
        </div>

<!--modals-->
<div class="#shadow" style="display:none"> shadow</div>
<div id="modalPadre" style="display:none">
    <div class="btn-close"></div>
    <div>
        <span class="franja-lila">
            <h2 class="title">Transporte</h2>
        </span>

        <div class="content">
            <ol>
                <li>Mejoramiento Jr. Progreso Coischo – Santa</li>
                <li>Mejoramiento calles Huarmey</li>
                <li>Acceso vial Nuevo Chimbote – Santa</li>
                <li>Construcción y mejoramiento calles Huarmey</li>
                <li>Mejoramiento camino vecinal Huarmey -Ancash</li>
                <li>Mejoramiento vías Caserío de Chora, Lacabamba</li>
                <li>Mejoramiento pistas y veredas barrios de Huaraz</li>
                <li>Mejoramiento infraestructura vial y peatonal distritos de Huaraz</li>
                <li>Mejoramiento infraestructura vial barrio La Pradera, Huaraz</li>
                <li>Mejoramiento Jr. Ladislao Meza, Huaraz</li>
                <li>Mejoramiento infraestructura vial y peatonal Llamac, Pacllon</li>
                <li>Mejoramiento infraestructura vial y peatonal Pacllon</li>
                <li>Mejoramiento carretera vecinal Culebras, Huarmey</li>
                <li>Mejoramiento pistas y veredas San Cristóbal de Chupan, Huachis</li>
                <li>Pistas y veredas Chasquitambo - Colquioc</li>
                <li>Pistas y veredas Llamarumi - Colquioc</li>
                <li>Pistas y veredas Llampa - Colquioc</li>
                <li>Mejoramiento transitabilidad Ciudad del Pescador – Huarmey</li>
            </ol>
        </div>
    </div>
</div>

<div id="modalHijo" style="display:none;    padding: 0 0 0 10px;">
    <div class="btn-close"></div>
    <div>
        <span class="franja-lila">
            <h2 class="title">Mejoramiento infraestructura vial y peatonal distritos de Huaraz</h2>
        </span>

        <div class="content">
            <p><b>descripcion</b></p>
            <p>Mejoramiento de la Infraestructura vial y peatonal
en los barrios emprendedores de Vista Alegre, Piedras
Azules, 08 de diciembre del distrito de Huaraz,
provincia de Huaraz, departamento de Ancash.</p>
        </div>
    </div>
</div>

        <script type='text/javascript' src='public/plugin/jquery-1.11.3.min.js'></script>
        <script charset="utf-8">
/*            function depaIn(el) {
                el.style.fill = '#0079C0';
            }
            function depaOut(el) {
                el.style.fill = 'none';
            }

*/
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

            //LOAD
            $(function() {
                // Handler for .ready() called.
                $('.btn-close').click(function(){
                    $(this).parent().css('display', 'none')
                })
            });

        </script>
    </body>
</html>
