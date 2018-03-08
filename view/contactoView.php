<?php include("./view/headerF.php"); ?>

<!--------------Content--------------->
<section id="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Si desea contactar con nosotros lo puedes hacer mendiante el siguiente formulario de contacto, o bien llamando a
                    <br/>+34 616 236 722  - +34 696 236 722
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label> Nombre *</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                    <p class="help-block">Su nombre.</p>
                                </div>
                                <div class="form-group">
                                    <label> Email *</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                    <p class="help-block">Su e-mail.</p>
                                </div>
                                <div class="form-group">
                                    <label> Website</label>
                                    <input type="url" name="website" id="website" class="form-control">
                                    <p class="help-block">Su pag&iacute;na web (en caso de tener).</p>
                                </div>
                                <div class="form-group">
                                    <label>Pregunta</label>
                                    <textarea rows="10" name="comment" id="comment" class="form-control"></textarea>
                                    <p class="help-block">¿Que nos desea consultar?</p>
                                </div>
                                <input type="submit" name="submit" value="Enviar" class="btn btn-default">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("./view/footerF.php"); ?>
