<?php include("./view/headerB.php"); ?>


            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Trabajos</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Crear trabajo
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Añadir trabajo</h3>
                            <form action="<?php echo $helper->url("trabajos","crear"); ?>" method="post" class="col-lg-12" enctype="multipart/form-data">
                                <hr/>
                                <label>Titulo:</label>
                                <input type="text" name="titulo" placeholder="Titulo" class="form-control"/>
                                <label>Descrici&oacute;n:</label>
                                <textarea class="form-control" rows="3" placeholder="Descripci&oacute;n" name="descripcion" ></textarea>
                                <label>Categoria</label>
                                <select multiple="" class="form-control" name="categoria">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <label>Fotos:</label>
                                <input id="file" type="file" class="file" multiple=true data-preview-file-type="any" name="files"><br/>

                                <input type="submit" value="enviar" class="btn btn-primary"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php include("./view/footerB.php"); ?>
