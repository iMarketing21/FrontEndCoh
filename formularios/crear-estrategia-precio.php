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
                        <div class="sub-titulo"><h2>2. Precio</h2></div>
                        <div class="caja-formulario">
                            <form>
                                <div class="bg-gris">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <center>
                                            <div class="form-group">
                                                <strong>La escala aplica para:</strong> <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="xxxx"></i></sup>
                                                <br/>
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-tipo-canal">
                                                        <input type="radio" name="options" id="option2" autocomplete="off"> Para todos los productos
                                                    </label>
                                                    <label class="btn btn-tipo-canal">
                                                        <input type="radio" name="options" id="option3" autocomplete="off">Para un producto
                                                    </label>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="">Seleccionar producto <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="De clic sobre el producto al cual desea aplicarle una escala."></i></sup></label>
                                                
                                                    <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                        <option selected>Producto 1</option>
                                                        <option>...</option>
                                                    </select>
                                                   
                                                 
                                                </div> 
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                        <h5>Por Unidades</h5>
                                        <div class="caja-borde">
                                            <center>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label">Entre</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                    <label for="" class="col-sm-2 col-form-label">y</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="" class="col-sm-4 col-form-label">Descuento</label>
                                                    <div class="col-sm-3">
                                                        <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                            <option selected>%</option>
                                                            <option>$</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <br/><br/>
                                                        <button type="submit" class="btn btn-cohett-naranja-small">Crear Escala</button>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                        <hr/>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">Escala por valor</th>
                                                    <th scope="col"><center>Editar</center></th>
                                                    <th scope="col"><center>Eliminar</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Entre 1 y 100 unidades con descuento de 20%</td>
                                                        
                                                        <td class="btn-editar"><a href="#"><i class="fas fa-edit"></i></a></td>
                                                        <td class="btn-eliminar"><a href="#"><i class="fas fa-times-circle"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <h5>Por Valor</h5>
                                        <div class="caja-borde">
                                            <center>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-2 col-form-label">Entre</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                    <label for="" class="col-sm-2 col-form-label">y</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="" class="col-sm-4 col-form-label">Descuento</label>
                                                    <div class="col-sm-3">
                                                        <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                            <option selected>%</option>
                                                            <option>$</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control" id="">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <br/><br/>
                                                        <button type="submit" class="btn btn-cohett-naranja-small">Crear Escala</button>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                        <hr/>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">Escala por valor</th>
                                                    <th scope="col"><center>Editar</center></th>
                                                    <th scope="col"><center>Eliminar</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Entre 1 y 100 pesos con descuento de 20%</td>
                                                        
                                                        <td class="btn-editar"><a href="#"><i class="fas fa-edit"></i></a></td>
                                                        <td class="btn-eliminar"><a href="#"><i class="fas fa-times-circle"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    
                                </div>

                            <hr/>
                                <h5>Si terminaste de crear las escalas, da clic en PROMOCIÓN para continuar configurando tu estrategía</h5>
                                <div class="estrategiaPasos">
                                    <div class="row">
                                        <div class="col-lg-3"><a class="btn-paso-activo">1.<br/>Producto</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-activo">2.<br/>Precio</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-off" href="#">3.<br/>Promoción</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-off">4.<br/>Fidelización</a></div>  
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
<!-- Modal Categorias-->
<div class="modal fade" id="categoriasProductos" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nombre Categoría <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Se entiende por categoría el grado de jerarquía dentro de un orden de productos."></i></sup></label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-cohett-naranja-small">Crear Categoría</button>
                <hr/>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Nombre Categoría</th>
                            <th scope="col"><center>Eliminar</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Celulares Gama Alta</td>
                                <td class="btn-eliminar"><a href="#"><i class="fas fa-times-circle"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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