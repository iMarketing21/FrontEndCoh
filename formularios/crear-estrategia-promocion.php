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
                            <div class="row">
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
                        <div class="sub-titulo"><h2>3. Promoción</h2></div>
                        <div class="caja-formulario">
                            <form>
                                
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h2 class="mb-0">Cupones de descuento</h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <h3>Crear un cupón</h3>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                        <label for="">Nombre del Cupón <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="xxx"></i></sup></label>
                                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                                </div>

                                                <div class="form-group">
                                                        <label for="">Código del Cupón <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Este es el que usará el usuario para recibir el beneficio a la hora de la compra."></i></sup></label>
                                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                                </div>

                                                <label for="">Valor del Cupón <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Este es el valor que descontara al valor de la compra."></i></sup></label>
                                                <div class="form-group row">
                                                    
                                                    <div class="col-sm-4">
                                                        <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                            <option selected>%</option>
                                                            <option>$</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-7">
                                                <div class="bg-gris">
                                                    <h5>Expiración</h5>
                                                    <p>Dale un limite a tu promoción</p>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="">
                                                            <label class="form-check-label" for="exampleCheck1">Por cantidad</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                <option selected>%</option>
                                                                <option>$</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12"><hr/><br/></div>
                                                        <div class="col-sm-4 form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="">
                                                            <label class="form-check-label" for="exampleCheck1">Por fecha</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-12">

                                            <div class="form-group">
                                                    
                                                    <center>
                                                    <label for="">Acumulable con otros cupones y ofertas?</label>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-tipo-canal">
                                                                <input type="radio" name="options" id="option2" autocomplete="off"> Sí
                                                            </label>
                                                            <label class="btn btn-tipo-canal">
                                                                <input type="radio" name="options" id="option3" autocomplete="off"> No
                                                            </label>
                                                        </div>
                                                    </center>
                                                </div>
                                            <center>
                                            <div class="form-group">
                                                <strong>El cupón aplica para:</strong> <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="xxxx"></i></sup>
                                                <br/>
                                                <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-tipo-canal">
                                                        <input type="radio" name="options" id="option2" autocomplete="off"> Todos los productos
                                                    </label>
                                                    <label class="btn btn-tipo-canal">
                                                        <input type="radio" name="options" id="option3" autocomplete="off">Categoría de producto
                                                    </label>
                                                    <label class="btn btn-tipo-canal">
                                                        <input type="radio" name="options" id="option3" autocomplete="off">Un producto
                                                    </label>
                                                </div>
                                            </div>
                                                <!--NOTA: ESTE SOLO APARECE CUANDO EL USUARIO SELECCIONES "UN PRODUCTO O CATEGORÍA DE PRODUCTO"-->
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Categoría de producto <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="De clic sobre el producto al cual desea aplicarle una escala."></i></sup></label>
                                                        
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                <option selected>Categoría 1</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Nombre de producto <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="De clic sobre el producto al cual desea aplicarle una escala."></i></sup></label>
                                                        
                                                            <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                                <option selected>Producto 1</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="tags">
                                                    Samsung A9+ <a href="#"><i class="fas fa-times-circle"></i></a>
                                                </div>
                                                <div class="tags">
                                                    iPhone X Apple <a href="#"><i class="fas fa-times-circle"></i></a>
                                                </div>
                                            </center>
                                            
                                        </div>
                                        <div class="col-lg-12">
                                            <center>
                                                <button type="submit" class="btn btn-cohett-naranja">Crear Cupón</button>
                                            </center>
                                        </div>
                                       
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col" class="align-middle">Nombre</th>
                                                    <th scope="col" class="align-middle">Código</th>
                                                    <th scope="col" class="align-middle">Valor</th>
                                                    <th scope="col" class="align-middle">Caducidad</th>
                                                    <th scope="col" class="align-middle">Acomulable</th>
                                                    <th scope="col" class="align-middle">Aplica</th>
                                                    <th scope="col" class="align-middle"><center>Editar</center></th>
                                                    <th scope="col" class="align-middle"><center>Eliminar</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td class="align-middle detalle">Telefonos gama alta</td>
                                                    <td class="align-middle detalle">concelularen2019</td>
                                                    <td class="align-middle detalle">$200.000</td>
                                                    <td class="align-middle detalle">200 Uni.</td>
                                                    <td class="align-middle detalle">No</td>    
                                                    <td class="align-middle detalle">Gama Alta</td>
                                                        <td class="btn-editar align-middle"><a href="#"><i class="fas fa-edit"></i></a></td>
                                                        <td class="btn-eliminar align-middle"><a href="#"><i class="fas fa-times-circle"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                            
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <!--NUEVA TARJETA-->
                                <div class="card">
                                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h2 class="mb-0">Ofertas</h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                
                                </div>

                                <hr/>
                                <h5>Si terminaste de crear tus promociones, da clic en FIDELIZACIÓN para continuar configurando tu estrategía</h5>
                                <div class="estrategiaPasos">
                                    <div class="row">
                                        <div class="col-lg-3"><a class="btn-paso-activo">1.<br/>Producto</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-activo">2.<br/>Precio</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-activo">3.<br/>Promoción</a></div>
                                        <div class="col-lg-3"><a class="btn-paso" href="#">4.<br/>Fidelización</a></div>  
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