<?php include("./view/headerB.php"); ?>


            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Inicio</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i>Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

<?php include("./view/footerB.php"); ?>
