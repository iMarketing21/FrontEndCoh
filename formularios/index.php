<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSS Personalizado-->
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/styleMenu.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Cohett</title>

    
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
    <section class="caja-ambiente">
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
                                    <h1>Regístrate</h1>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                        <img src="img/paso1/cohete-paso-1.png" class="img-fluid" />
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="caja-formulario">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nit <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Este número lo encontrara en el RUT de su compañía"></i></sup></label>
                                            <input type="number" class="form-control" id="" aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                                <label for="">Razón Social <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Escriba el nombre de su compañía tal como aparece en su certificado de Camara de Comercio"></i></sup></label>
                                                <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                                <label for="">Representante Legal <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Escriba el nombre de la persona quien representa a la compañía"></i></sup></label>
                                                <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                                <label for="">Email <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Ejemplo: suempresa@dominio.com"></i></sup></label>
                                                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                                <label for="">Teléfono <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Ejemplo:+572 123 4567"></i></sup></label>
                                                <input type="phone" class="form-control" id="" aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                                <label for="">Móvil <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Ejemplo:+57 307 123 4567"></i></sup></label>
                                                <input type="phone" class="form-control" id="" aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Contraseña <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Por seguridad su contraseña debe tener mayúsculas, minúsculas, números y/o signos"></i></sup></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="pass-2" aria-describedby="inputGroupPrepend" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i id="show-pass" class="fas fa-eye"></i></span>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="">Confirme su contraseña</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="pass-2-ok" aria-describedby="inputGroupPrepend" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i id="show-pass-ok" class="fas fa-eye"></i></span>
                                                </div>
                                            
                                            </div>  
                                        </div>

                                        
                                        <script>
                                                $('#show-pass').click(function(){
                                                    if ($(this).hasClass('fas fa-eye')){
                                                        $(this).attr('class','fas fa-eye-slash');
                                                    }else{
                                                        $(this).attr('class','fas fa-eye');
                                                    }       
                                                });

                                                $('#show-pass-ok').click(function(){
                                                    if ($(this).hasClass('fas fa-eye')){
                                                        $(this).attr('class','fas fa-eye-slash');
                                                    }else{
                                                        $(this).attr('class','fas fa-eye');
                                                    }       
                                                });
                                        </script>
                                        
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <small>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="">
                                                <label class="form-check-label" for="">Al registrarme, declaro que soy mayor de edad y acepto los Términos, condiciones y las Políticas de privacidad de Cohett.</label>
                                            </div>
                                        </small>
                                    </div>
                                    <div class="col-lg-12">
                                        <center>
                                            <button type="submit" class="btn btn-cohett-naranja">Crear Cuenta</button>
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

<!--**********Ayuda**********-->
<div class="ayuda">
    <img src="img/necesitas-ayuda.png" class="img-fluid" data-toggle="modal" data-target="#exampleModalCenter"/>
</div>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Ayuda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
          </div>
        </div>
      </div>
<!--**********Fin Ayuda**********-->




<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

  </body>
</html>