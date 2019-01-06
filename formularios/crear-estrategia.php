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
    <section class="caja-ambiente-tres">
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
                                    <h1>Crea una Estrategía para <br/>tu canal de ventas <span style="color:#e65221">Mayoristas</span></h1>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                        <img src="img/paso3/cohete-paso-3.png" class="img-fluid" />
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="caja-formulario">
                            <div class="bg-nota">
                                
                                <p>La estrategia la componen los productos, precios, formas de promoción, plazas y herramientas de fidelización que usarás para tu canal.</p>
                                <p>Luego podrás crear estrategias para otros canales, para un grupo de clientes o para un cliente en particular</p>
                            </div>
                            <h4>Carguemos nuestro primeros productos<br/>para crear nuestra estrategía</h4>
                            <form>
                                <div class="estrategiaPasos">
                                    <div class="row">
                                        <div class="col-lg-3"><a class="btn-paso" href="#">Producto</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-off">Precio</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-off">Promoción</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-off">Fidelización</a></div>  
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