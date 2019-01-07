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
    <section class="caja-ambiente-cuatro">
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
                                    <h1>Crea una interfaz de venta</h1>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                        <img src="img/paso4/cohete-paso-4.png" class="img-fluid" />
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="caja-formulario">
                            <div class="bg-nota">
                                <h4>¿Qué es una interfaz de Ventas?</h4>
                                <p>Interfaz es lo que conocemos en inglés como interfaces. En informática, se utiliza para nombrar a la conexión funcional entre dos sistemas, programas, dispositivos o componentes de cualquier tipo, que proporciona una comunicación de distintos niveles permitiendo el intercambio de información.</p>
                                <p>Para cada interfaz, nosotros te asignamos un subdominio similar a: www.tuempresa.cohett.com. Si quieres usar un dominio propio podrás configurarlo luego de parametrizar tu estrategia</p>
                            </div>
                            <form>
                                
                                    <div class="bg-gris">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-6">
                                                <center>
                                                    <strong>Tu interfaz va ser:</strong> <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup>
                                                    <br/>
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-tipo-canal">
                                                            <input type="radio" name="options" id="option2" autocomplete="off"> Tienda en línea
                                                        </label>
                                                        <label class="btn btn-tipo-canal">
                                                            <input type="radio" name="options" id="option3" autocomplete="off"> POS
                                                        </label>
                                                    </div>
                                                </center>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nombre de interfaz <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="0000"></i></sup></label>
                                                    <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                            

                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>Selecciona un diseño para tu intefaz</p>
                                        </div>
                                    
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