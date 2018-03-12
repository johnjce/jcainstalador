<?php include("./view/headerF.php"); ?>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
		<div class="row">
			<div id="main-content" class="col-left">
                <?php
                    $fotos= json_decode($job->fotos);
                    echo "
                    <article>
                        <div class='heading'>
                            <h2><a href=''>$job->titulo</a></h2>
                            <div class='info'><p>$job->descripcion</p></div>
                        </div>
                        <div class='content'>";

                            foreach ($fotos as $id => $foto) {
                                echo "<img src='$foto' class='col-left'/>";
                            }

                            echo "<p><b>Categor&iacute;as: </b>";
                            $cat = json_decode($valor->categoria);
                            foreach ($cat as $clave => $name) {
                                echo $name.". ";
                            }
                            echo "</p>
                        </div>
                    </article>
                    ";
                ?>
			</div>
			<?php include("./view/categories.php"); ?>
            <div style="position: fixed;right: 20px; bottom:20px;">
                <p class='more'>
                    <a class='button' href='<?php echo $helper->url('index','trabajos'); ?>'>Volver</a>
                </p>
            </div>
		</div>
	</div>
</section>
<?php include("./view/footerF.php"); ?>
