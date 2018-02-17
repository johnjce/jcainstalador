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
                                if($row->idPadre!=0) $etiq="->"; else $etiq ="";
                                echo "<option value='$row->id:$row->categoria'>$etiq $row->categoria</option>\n";
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
                         Trabajos realizados
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="trabajos">
                                <thead>
                                    <tr>
                                        <th>T&iacute;tulo</th>
                                        <th>Descripci&oacute;n</th>
                                        <th>Categor&iacute;as</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($allJobs as $valor ){
                                           echo "<tr>
                                                  <td>".$valor->titulo."</td>
                                                  <td>".$valor->descripcion."</td>
                                                  <td>";
                                            $cat = json_decode($valor->categoria);
                                            foreach ($cat as $clave => $name) {
                                                echo $name.". ";
                                            }
                                            echo ' </td>
                                                   <td>
                                                    <a href="'.$helper->url("trabajos","borrar").'&id='.$valor->id.'" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </a>
                                                   </td>
                                                  </tr>';
                                        }
                                    ?>
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
