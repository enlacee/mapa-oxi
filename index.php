<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/plugin/bootstrap-3.3.5-dist/css/bootstrap.css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="public/css/style.css" media="screen" charset="utf-8">
        <title>Proyectos 2009 - 2015</title>
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
            </div>
            <div class="body container">
                <div class="row">
                    <div class="col-md-6 content-instruction">
                        <div class="title-instruction">INSTRUCCIONES DE NAVEGACIÓN</div>
                        <ul>
                            <li>Click sobre el departamento a consultar.</li>
                            <li>Seleccionar el sector del proyecto a consultar y hacer click.</li>
                            <li>Buscar el proyecto en la lista y hacer click para ver detalle.</li>
                        </ul>
                    </div>
                    <div class="col-md-6  pull-right">
<!--
                        <img src="public/image/peru-mapa.png" />

                        <hr>
-->
                    </div>
                </div>

                <div class="row" style="max-width:800px">
                    <div style="width: 100%">
                        <?php require_once 'svg.php' ?>
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


            function seleccionarDepa(el, statusClear) {

                //el.style.fill = '#0079C0';
                var json = readMetaData(el);
                setText(json);
                selectSector(json.sectores, statusClear)
            }
            function readMetaData(el) {
                var stringMeta =  el.getAttribute('metadatajson')
                var str_json = JSON.stringify(eval("(" + stringMeta + ")"));
                return JSON.parse(str_json);
            }

            function setText(data) {
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
                        if (typeof(curItem.name) != 'undefined') {
                            img.setAttribute('xlink:href', curItem[idlocal].image);
                        } else {
                            img.setAttribute('xlink:href', '');
                        }
                        //
                        
                    }
                });
            }

            // click
            function clickDepa(el) {
                var json = readMetaData(el);
                curItem = json;
            }
        </script>
    </body>
</html>
