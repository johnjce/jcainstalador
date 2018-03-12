<?php include("./view/headerF.php"); ?>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
		<div class="row">
			<div id="main-content" class="col-left">
                <?php
                if(is_array($allJobs)){
                    foreach($allJobs as $valor ){
                        if($valor->directorio != "no"){
                            $fotos= json_decode($valor->fotos);
                            $fotos = $fotos->n0;
                        }else
                            $fotos = "./fotos/sinfoto.jpg";
                        echo "
                        <article>
                            <div class='heading'>
                                <h2><a href='";
                                echo $helper->url('index','trabajo')."&trabajo=$valor->id'>$valor->titulo</a></h2>
                                <div class='info'><p>$valor->descripcion</p></div>
                            </div>
                            <div class='content'>
                                <img src='$fotos' class='col-left'/>";
                                echo "<p><b>Categor&iacute;as: </b>";
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
                }else{
                    echo "<article>
                            <div class='heading'>
                                <h2><a href='";
                                echo $helper->url('index','trabajos')."'>Sin Trabajo</a></h2>
                                <div class='info'><p>No existen trabajos que mostrar</p></div>
                            </div>
                        </article>";
                }
                include("./view/paginationJobs.php");
                ?>
			</div>
			<?php include("./view/categories.php"); ?>
		</div>
	</div>
</section>
<?php include("./view/footerF.php"); ?>
