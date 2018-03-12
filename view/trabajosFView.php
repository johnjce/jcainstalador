<?php include("./view/headerF.php"); ?>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
		<div class="row">
			<div id="main-content" class="col-left">
                    <?php
                    foreach($allJobs as $valor ){
                        $fotos= json_decode($valor->fotos);
                        echo "
                        <article>
                            <div class='heading'>
                                <h2><a href='single.html'>$valor->titulo</a></h2>
                                <div class='info'>$valor->descripcion</div>
                            </div>
                            <div class='content'>
                                <img src='$fotos->n0' class='col-left'/>";
                                echo "<p><b>Categor&iacute;as:</b>";
                                $cat = json_decode($valor->categoria);
                                foreach ($cat as $clave => $name) {
                                    echo $name.". ";
                                }
                                echo "</p>
                                <p class='more'><a class='button' href='";
                                echo $helper->url('index','trabajo')."&trabajo=$valor->id'>Ver Trabajo</a></p>
                            </div>
                        </article>
                        ";
                    }
                    ?>
				<section>
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</section>
			</div>
			<?php include("./view/categories.php"); ?>
		</div>
	</div>
</section>
<?php include("./view/footerF.php"); ?>
