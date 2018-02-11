<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $this->redirect("back","index");
        exit;
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="./assets/back/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="./assets/back/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="./assets/back/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="./assets/back/css/style.css" rel="stylesheet" />
      <link href="./assets/back/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
        <?php if(isset($error) && $error[0] != null){ ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $error; ?>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="./assets/back/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingrese sus datos</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $helper->url("login","login"); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Recordar">Recordarme
                                    </label>
                                </div>
                                <input name="login-form" type="hidden" value="entrar">
                                <input type="submit" value="Entrar" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="./assets/back/plugins/jquery-1.10.2.js"></script>
    <script src="./assets/back/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/back/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
