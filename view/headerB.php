<?php
    session_start();
    if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
        $this->redirect("login","index");
        exit;
    }

    $now = time();

    if($now > $_SESSION['expire']) {
        session_destroy();
        $this->view("login",array(
            "error"=>"Su sesion a terminado, Necesita Hacer Login"));
        exit;
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administraci&oacute;n</title>
    <!-- Core CSS - Include with every page -->
    <link href="./assets/back/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="./assets/back/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="./assets/back/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="./assets/back/css/style.css" rel="stylesheet" />
    <link href="./assets/back/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->

    <link href="./assets/back/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   </head>
<body>
        <!-- Core Scripts - Include with every page -->
    <script src="./assets/back/plugins/jquery-1.10.2.js"></script>
    <script src="./assets/back/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/back/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="./assets/back/plugins/pace/pace.js"></script>
    <script src="./assets/back/scripts/siminta.js"></script>

    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="./assets/back/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo $helper->url("login","logout"); ?>"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="./assets/back/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">

                                <div><?php echo $_SESSION['nombre']." <strong>".$_SESSION['apellido']."</strong>"; ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <?php
                        $page = $_SERVER['REQUEST_URI'];
                        $pag=explode('=',$page);
                        $pag=explode('&',$pag[1]);
                        $pag = $pag[0];
                    ?>
                    <li <?php if($pag == "back") echo "class='selected'"; ?>>
                        <a href="<?php echo $helper->url("back","index"); ?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                    </li>
                    <li <?php if($pag == "usuarios") echo "class='selected'"; ?>>
                        <a href="<?php echo $helper->url("back","usuarios"); ?>"><i class="fa fa-user fa-fw"></i> Usuarios</a>
                    </li>
                    <li <?php if($pag == "trabajos") echo "class='selected'"; ?>>
                        <a href="<?php echo $helper->url("back","trabajos"); ?>"><i class="fa fa-cogs fa-fw"></i>Trabajos</a>
                    </li>
                    <li <?php if($pag == "categorias") echo "class='selected'"; ?>>
                        <a href="<?php echo $helper->url("back","categorias"); ?>"><i class="fa fa-code-fork fa-fw"></i>Categorias</a>
                    </li>


                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
