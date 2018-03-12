<?php include("./view/headerF.php"); ?>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
		<div class="row">
			<div id="main-content" class="col-left">
                <div class='content'>
                    <p class='more'><a class='button' href='<?php echo $helper->url('index','trabajos'); ?>'>Volver</a></p>
                </div>
                <?php
                    $fotos= json_decode($job->fotos);
                    echo "
                    <article>
                        <div class='heading'>
                            <h2><a href='single.html'>$job->titulo</a></h2>
                            <div class='info'>$job->descripcion</div>
                        </div>
                        <div class='content'>";

                            foreach ($fotos as $id => $foto) {
                                echo "<img src='$foto' class='col-left'/>";
                            }

                            echo "<p><b>Categor&iacute;as:</b> </p>";
                            $cat = json_decode($valor->categoria);
                            foreach ($cat as $clave => $name) {
                                echo $name.". ";
                            }
                            echo "
                        </div>
                    </article>
                    ";
                ?>
			</div>
			<?php include("./view/categories.php"); ?>
		</div>
	</div>
</section>
<?php include("./view/footerF.php"); ?>
