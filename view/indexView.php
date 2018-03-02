<?php include("./view/headerF.php"); ?>
<!--------------Content--------------->
<section id="content">
	<div class="feature">
		<div class="camera_wrap camera_azure_skin" id="camera_wrap">
            <?php
                $fotos = new index($this->adapter);
                echo $fotos->listar_carpetas("fotos")."\n";
            ?>
        </div>
		<div style="clear:both; display:block; height:10px"></div>
	</div>
    <div class="welcome">
		<p>Actualmente y cubriendo las necesidades de instalaciones de pladur en la isla de Lanzarote, <a href="https://johnjce.github.io/inicio/" target="_blank" style="color: #DA251D;">JCA instaladores</a> nace como una nueva alternativa con muchos años de experiencia en el sector. <br/>Actualmente contamos con un equipo de profecionales altamente cualificados para realizar todos sus proyectos en el menor tiempo posible, con la mejor calidad y con la garatia que quedara satifecho con el resultado, estamos disponibles a travez de los telefonos.<br/>+34 616 236 722 <br/> +34 689 366 343.</p>
	</div>
    <div style="clear:both; display:block; height:10px"></div>
</section>
<?php include("./view/footerF.php"); ?>
