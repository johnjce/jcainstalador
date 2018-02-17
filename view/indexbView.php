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

                <div class="col-lg-12">
                    <!-- Line chart -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Visitas vs clics
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!--End Line chart -->
                </div>
            </div>
    <!-- Page-Level Plugin Scripts-->
<script src="./assets/back/plugins/flot/jquery.flot.js"></script>
    <script src="./assets/back/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="./assets/back/plugins/flot/jquery.flot.resize.js"></script>
<script src="./assets/back/scripts/flot-demo.js"></script>

<?php include("./view/footerB.php"); ?>
