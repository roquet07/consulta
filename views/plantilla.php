<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="views/css/bootstrap.css">
    <link rel="stylesheet" href="views/css/app.css">
</head>
<body>
           
    <div class="container   iniciarEventos">

        <div class="d-flex justify-content-center   mt-3 mb-1">
            <img src="views/img/logo30.jpg" class="logo" alt="">
        </div>

       <div class="contenido mb-3">

          <!--Inicio de la seccion caja -->

            <div class="card caja">
                <h3 class="card-header">Documentos electronico</h3>
                <div class="card-body">

                         <!--Fin seccion del formulario -->
               <div class="row mt-4 mb-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cliente">Ruc cliente:</label>
                        <input type="text" class="form-control" id="cliente" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fecha">Fecha :</label>
                        <input type="date" class="form-control" id="fecha" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Tipo de documento:</label>
                        <select class="form-control" id="idDocumento">
                            <option selected value="01">Factura Electronica</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="serie">Serie :</label>
                        <input type="text" class="form-control" id="serie" placeholder="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numero">Numero :</label>
                        <input type="number" class="form-control" id="numero" placeholder="">
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="monto">Monto :</label>
                        <input type="number" class="form-control" id="monto" placeholder="">
                    </div>

                </div>
                <input type="hidden" name="datosCon"  id="datosCon">
                <div class="col-md-8 mt-4">
                    <button  class="btn btn-success eventoConsultar">Consultar Documento </button>

                </div>
           </div>
        <!--Fin seccion del formulario -->
          
                </div>
              </div>

        <!--Fin seccion caja -->

        <div class="row  d-flex justify-content-around  caja2">
                 <!--Inicio Seccion  Botones -->
            <div class="col-md-4 mt-1 d-flex justify-content-center">
                <button disabled="disabled" class="btn btn-success btnPDf btnDescarga">Descargar PDF </button>
            </div>
            <div class="col-md-4 mt-1 d-flex justify-content-center">
                <button disabled="disabled" class="btn btn-success btnXML btnDescarga2">Descargar XML </button>
            </div>
            <div class="col-md-4 mt-1 d-flex justify-content-center">
                <button disabled="disabled" class="btn btn-success btnCDR btnDescarga3">Descargar CDR </button>
            </div>
            <div class="col-md-6 mt-1 mt-3 d-flex justify-content-center">
                <button class="btn btn-success   btnNewReload">Realizar Nueva Busqueda </button>
            </div>
        </div>
        <!-- Inicio Seccion  Botones -->


       </div>

    </div>
    

    <script src="views/js/app.js"></script>
</body>
</html>