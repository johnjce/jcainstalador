<?php include("./view/headerB.php"); ?>


<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Categor&iacute;as</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> Crear Categor&iacute;a
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <h3>Añadir Categor&iacute;a</h3>
                <form action="<?php echo $helper->url("categorias","crear"); ?>" method="post" class="col-lg-12" >
                    <hr/>
                    <label>Nombre:</label>
                    <input type="text" name="categoria" placeholder="Nombre" class="form-control"/>
                    <label>Categor&iacute;a padre:</label>
                    <select class="form-control" name="idPadre">
                        <?php
                            foreach($allCategories as $row ){
                                if($row->idPadre!=0) continue;
                                echo "<option value='$row->id'>$row->categoria</option>\n";
                            }
                        ?>
                    </select><br/>
                    <input type="submit" value="Guardar" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> Categorias
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Categor&iacute;as Creadas
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="trabajos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>T&iacute;tulo</th>
                                        <th>Categor&iacute;a padre</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $padre = new categoria($this->adapter);
                                    $i=0;
                                        foreach($allCategories as $categoria ){
                                            if($categoria->id == 0) continue;
                                            $i++;
                                            echo "<tr>
                                                   <td>".$i."</td>
                                                   <td>".$categoria->categoria."</td>";
                                            echo " <td>".$padre->getIdPadre($categoria->idPadre)."</td>
                                                   <td>";
                                            echo '
                                                    <a href="'.$helper->url("categorias","borrar").'&id='.$categoria->id.'" class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </a>
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
