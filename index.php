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
            function seleccionarDepa(el) {

                el.style.fill = '#0079C0';
                var stringMeta =  el.getAttribute('metadatajson')
                var str_json = JSON.stringify(eval("(" + stringMeta + ")"));
                var json = JSON.parse(str_json);
                console.log('json',json);

                document.getElementById('nombre_depa').innerHTML = json.name;

                selectSector(json.sector)
            }


            function selectSector(dataArray) {
                console.log('dataArray', dataArray)
                var data = dataArray[0];
                if (data.name == 1) {
                    var im = document.getElementById('sector_1');
                    im.setAttribute('xlink:href', data.image);
                }
            }


        </script>
    </body>
</html>
