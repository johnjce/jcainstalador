<?php include("./view/headerB.php"); ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administraci&oacute;n de usuarios</h1>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Crear Usuarios
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Añadir usuario</h3>
                            <form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-12">
                                <hr/>
                                <label>Nombre:</label> <input type="text" name="nombre" class="form-control"/>
                                <label>Apellido:</label> <input type="text" name="apellido" class="form-control"/>
                                <label>Usuario:</label> <input type="text" name="user" class="form-control"/>
                                <label>Email:</label> <input type="text" name="email" class="form-control"/>
                                <input type="hidden" name="privilegio"  value="1" class="form-control"/>
                                <input type="hidden" name="sesion" class="form-control" value="1"/>
                                <label>Contraseña:</label> <input type="password" name="password" class="form-control"/><br/>
                                <input type="submit" value="enviar" class="btn btn-success"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Borrar Usuarios
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Usuario</th>
                                            <th>E-Mail</th>
                                            <th>Acci&oacute;n</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i=sizeof($allusers)+1;
                                        foreach($allusers as $user) {?>
                                            <tr>
                                                <td><?php $i--;echo $i; ?></td>
                                                <td><?php echo $user->nombre; ?></td>
                                                <td><?php echo $user->apellido; ?></td>
                                                <td><?php echo $user->user; ?></td>
                                                <td><?php echo $user->email; ?></td>
                                                <td><a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>

<?php include("./view/footerB.php"); ?>


