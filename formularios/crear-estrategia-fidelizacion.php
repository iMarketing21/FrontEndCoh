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
                    <div class="col-md-10 col-lg-9">
                        <div class="titulo-formulario">
                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <h1>Crea una Estrategía para tu canal de ventas <span style="color:#e65221">Mayoristas</span></h1>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                        <img src="img/paso3/cohete-paso-3.png" class="img-fluid" />
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="sub-titulo"><h2>4. Fidelización</h2></div>
                        <div class="caja-formulario">
                            <form>
                                
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h2 class="mb-0">Sistema de puntos</h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="bg-nota">
                                                <h3>Qué es un sistema de puntos?</h3>
                                                <p>Un sistema de puntos le permitirá a tus clientes, ganar puntos por cada compra que realicen. Estos puntos se acumulan y se podrán redimir en futuras compras.</p>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-8 col-form-label">¿Deseas activar un sistema de puntos para este canal?  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-4">
                                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                    <label class="btn btn-tipo-canal">
                                                                        <input type="radio" name="options" id="option2" autocomplete="off"> Si
                                                                    </label>
                                                                    <label class="btn btn-tipo-canal">
                                                                        <input type="radio" name="options" id="option3" autocomplete="off">No
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-8 col-form-label">¿Cuánto debe comprar un cliente para ganar un (1) punto?  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-4">
                                                                <input type="number" class="form-control" id="">
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-8 col-form-label">¿A cuánto equivale un (1) punto a la hora de redimirlo?  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-4">
                                                                <input type="number" class="form-control" id="">
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-8 col-form-label">¿Después de cuántos días vencen los puntos?  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-4">
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                <option selected>45 Días</option>
                                                                <option selected>60 Días</option>
                                                                <option selected>182 Días</option>
                                                                <option selected>365 Días</option>
                                                                <option selected>No vencen</option>
                                                            </select>
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                            <button type="submit" class="btn btn-cohett-naranja">Guardar</button>
                                                    </center>
                                                </div>
                                            
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>

                                <!--NUEVA TARJETA-->
                                <div class="card">
                                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h2 class="mb-0">Sistema de Referidos</h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <div class="bg-nota">
                                                <h3>Qué es un sistema de Referidos?</h3>
                                                <p>Un referido  es la persona que se registra en una determinada página a través de la recomendación de otra persona. Esa persona pasa automáticamente a formar parte de tu red de invitados y se convierte en tu afiliado o referido. Y tú serás su sponsor o patrocinador.</p>
                                            </div>

                                            
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-8 col-form-label">¿Deseas activar un sistema de referidos para este canal?   <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-4">
                                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                    <label class="btn btn-tipo-canal">
                                                                        <input type="radio" name="options" id="option2" autocomplete="off"> Si
                                                                    </label>
                                                                    <label class="btn btn-tipo-canal">
                                                                        <input type="radio" name="options" id="option3" autocomplete="off">No
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>

                                                

                                                <div class="col-lg-12">
                                                    <center>
                                                        <hr/>
                                                        <h2>Crear nivel de referidos</h2>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-7 col-form-label">¿La compensación se efectua por?  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-5">
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                    <option selected>A</option>
                                                                    <option selected>B</option>
                                                                    <option selected>C</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>

                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-7 col-form-label">¿Cuántas veces?  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-5">
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                    <option selected>A</option>
                                                                    <option selected>B</option>
                                                                    <option selected>C</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>

                                                <div class="col-lg-12">
                                                    <center>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-7 col-form-label">Tipo de compensación  <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="00000"></i></sup></label>
                                                            <div class="col-sm-5">
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                    <option selected>Cupón de Descuento</option>
                                                                    <option selected>Dinero</option>
                                                                    <option selected>Puntos</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </center>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <center>
                                                            <button type="submit" class="btn btn-cohett-naranja">Guardar</button>
                                                    </center>
                                                </div>

                                    </div>
                                    </div>
                                </div>

                                <!--NUEVA TARJETA-->
                                <div class="card">
                                    <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h2 class="mb-0">Incentivos</h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                
                                </div>

                                <hr/>
                                <h5>Ya terminaste de crear tu estrategía para tu canal de ventas!</h5>
                                <center>
                                    <p>En cualquier momento puedes editar cada uno de los parametros que creaste.</p>
                                </center>
                                <div class="estrategiaPasos">
                                    <div class="row">
                                        <div class="col-lg-3"><a class="btn-paso-activo">1.<br/>Producto</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-activo">2.<br/>Precio</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-activo">3.<br/>Promoción</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-activo">4.<br/>Fidelización</a></div>  
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="bg-gris">
                                        <center>
                                            <p>Solo nos falta que creer una interfaz para poner en marcha tu estrategía en el canal que seleccionaste.</p>
                                            <button type="submit" class="btn btn-cohett-naranja">Continuar</button>
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