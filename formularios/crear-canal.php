<!doctype html>
<html lang="en">
  <head>
    <?php include 'head.php';?>
  </head>
  <body>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({ boundary: 'window' })
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#show-pass').click(function () {
                if ($('#pass-2').attr('type') === 'text') {
                $('#pass-2').attr('type', 'password');
                } else {
                    $('#pass-2').attr('type', 'text');
                }
             });

        }); 

        $(document).ready(function () {
            $('#show-pass-ok').click(function () {
                if ($('#pass-2-ok').attr('type') === 'text') {
                $('#pass-2-ok').attr('type', 'password');
                } else {
                    $('#pass-2-ok').attr('type', 'text');
                }
             });

        });
    </script>
    <div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'menu-lateral.php';?>

    <!--CONTENEDOR FORMULARIO-->
    <div id="content">
    <section class="caja-ambiente-dos">
        <!--Header-->
        <header>
            <a id="sidebarCollapse" class="botonMenu">
                    <i class="fas fa-bars"></i>
            </a>
                    

            <center>
                <div class="logo-formulario">
                    <img src="img/cohett-logo.png" class="img-fluid" />
                </div>
            </center>
        </header>
            <div class="nube1"></div> 
            <div class="nube2"></div>     
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="titulo-formulario">
                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <h1>Crea un<br/>Canal de Venta</h1>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                        <img src="img/paso2/cohete-paso-2.png" class="img-fluid" />
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="caja-formulario">
                            <div class="bg-nota">
                                <h4>¿Qué son los Canales de Ventas?</h4>
                                <p>No importa el tamaño del negocio, ni su naturaleza, el principal objetivo de todo emprendedor es hacer su producto encontrar su consumidor. Existen innúmeros canales por los cuales es posible vender un producto, que son llamados canales de distribución o venta. Definir estratégicamente cuál es el mejor canal para el tipo de producto, mercado que actúa y público objetivo son elementos clave para el éxito de su negocio.</p>
                                <p>A contunuación crearemos el nuestro:</p>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="">Nombra tu canal de ventas <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Ejemplo: Canal mayorista, minoristas, tiendas, consumidores finales..."></i></sup></label>
                                            <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                            <small>Si tienes varios canales no te preocupes, luego podrás crear los que quieras.
    Si tienes un canal hibrido (vendes directamente al consumidor final y vendes a distribuidores) crea primero uno de los dos.</small>
                                        </div>
                                    </div>
                                </div>
                                    <div class="bg-gris">
                                        <div class="row align-items-center">
                                            <div class="col-md-5 col-lg-7">
                                                <center>
                                                    <strong>¿Tu canal es directo o indirecto?</strong> <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Ten en cuenta... Un canal es directo cuando tú mismo le vendes al consumidor final. En un canal indirecto, usas distribuidores intermediarios a los que les das un margen por comercializar tu producto."></i></sup>
                                                </center>
                                            </div>
                                            <div class="col-md-7 col-lg-5">
                                                <center>
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-tipo-canal">
                                                            <input type="radio" name="options" id="option2" autocomplete="off"> Directo
                                                        </label>
                                                        <label class="btn btn-tipo-canal">
                                                            <input type="radio" name="options" id="option3" autocomplete="off"> Indirecto
                                                        </label>
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center>
                                                <button type="submit" class="btn btn-cohett-naranja">Crear Canal</button>
                                            </center>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
    </section>
</div>
</div>

<?php include 'ayuda.php';?>




<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

  </body>
</html>