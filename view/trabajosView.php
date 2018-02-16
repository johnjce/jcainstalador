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
                    <select multiple class="form-control" name="categoria[]">
                        <?php
                            foreach($allCategories as $row ){
                                foreach($row as $clave => $valor) {
                                    if($clave == "id"){ $id=$valor; }
                                    if($clave == "categoria"){ $desc=$valor; }
                                    if($clave == "idPadre"){ $padre=$valor; }
                                }
                                if($padre!=0) $etiq="->"; else $etiq ="";
                                echo "<option value='$id'>$etiq $desc</option>\n";
                            }
                        ?>
                    </select>

                    <label>Fotos:</label>
                    <input id="file" type="file" class="file" multiple=true  name="files[]"><br/>

                    <input type="submit" value="enviar" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> Trabajos
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Advanced Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="trabajos">
                                <thead>
                                    <tr>
                                        <th>T&iacute;tulo</th>
                                        <th>Decripci&oacute;n</th>
                                        <th>Categor&iacute;as</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>

<?php include("./view/footerB.php"); ?>
