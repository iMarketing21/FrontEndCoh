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
                        <div class="sub-titulo"><h2>1. Crear Productos</h2></div>
                        <div class="caja-formulario">
                            <div class="bg-nota">
                                
                                <p>Luego podrás crear todos los productos y categorías que necesites, además de impuestos, relevancia, códigos y más..</p>
                            </div>
                            
                            <form>
                            <div class="row">
                                <div class="col-sm-6 col-lg-7">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="">Nombre Producto <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Escriba el nombre completo del producto"></i></sup></label>
                                                <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="">Crear Categoria <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="De clic sobre el signo + para crear las categorías de producto."></i></sup></label>
                                                <div class="input-group">
                                                    <select id="" class="form-control" aria-describedby="inputGroupPrepend">
                                                        <option selected>Categoria 1</option>
                                                        <option>...</option>
                                                    </select>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-group-btn" id="inputGroupPrepend">
                                                            <a href="#" data-toggle="modal" data-target="#categoriasProductos">
                                                                <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="">Precio Público <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Precio sin escala base que vera el usuario"></i></sup></label>
                                                <input type="number" class="form-control" id="" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="">Cantidad Inicial <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Escriba la cantidad con la que desea abrir su stock de este producto"></i></sup></label>
                                                <input type="number" class="form-control" id="" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="">Descripción Corta <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Describa de forma este producto"></i></sup></label>
                                                <textarea class="form-control" id="" rows="3"></textarea>
                                            </div>

                                           
                                            
                                            
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="col-sm-6 col-lg-5">
                                <div class="form-group">
                                                <label for="exampleFormControlFile1">Subir imagen de producto <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Procura por que la imagen sea de alta calidad y que sus medidas seas de 450px x 450px."></i></sup></label>
                                                <input type="file" class="form-control-file" id="">
                                                <small><i>Formtatos admitidos: PNG y JPEG</i></small>
                                            </div>

                                            <div class="bg-gris">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-12">
                                                        <center>
                                                            <strong>Tipo de producto</strong> <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Tus productos de distribución pueden ser tangibles o intangibles."></i></sup>
                                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                <label class="btn btn-tipo-canal">
                                                                    <input type="radio" name="options" id="option2" autocomplete="off"> Físico
                                                                </label>
                                                                <label class="btn btn-tipo-canal">
                                                                    <input type="radio" name="options" id="option3" autocomplete="off"> Virtual
                                                                </label>
                                                            </div>
                                                            <br/><br/>
                                                        </center>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <center>
                                                        <strong>¿Quiéres que el precio de éste producto sea visible?</strong> <sup class="pregunta"><i class="fas fa-question-circle" data-toggle="tooltip" title="Si marcas SI, el precio solo se visualizará cuando tus clientes se identifiquen"></i></sup>
                                                            <br/>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                <label class="btn btn-tipo-canal">
                                                                    <input type="radio" name="options" id="option2" autocomplete="off"> Si
                                                                </label>
                                                                <label class="btn btn-tipo-canal">
                                                                    <input type="radio" name="options" id="option3" autocomplete="off"> No
                                                                </label>
                                                            </div>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <center>
                                            <button type="submit" class="btn btn-cohett-naranja">Crear Producto</button>
                                        </center>
                                    </div>
                            </div>

                            <hr/>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col"><center>Editar</center></th>
                                        <th scope="col"><center>Eliminar</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Celulares Gama Alta</td>
                                            
                                            <td class="btn-editar"><a href="#"><i class="fas fa-edit"></i></a></td>
                                            <td class="btn-eliminar"><a href="#"><i class="fas fa-times-circle"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr/>
                                <h5>Si terminaste de crear tus productos, da clic en Precio para continuar configurando tu estrategía</h5>
                                <div class="estrategiaPasos">
                                    <div class="row">
                                        <div class="col-lg-3"><a class="btn-paso-activo">1.<br/>Producto</a></div>
                                        <div class="col-lg-3"><a class="btn-paso" href="#">2.<br/>Precio</a></div>
                                        <div class="col-lg-3"><a class="btn-paso-off">3.<br/>Promoción</a></div>
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