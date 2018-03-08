<?php include("./view/headerF.php"); ?>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid">
		<div class="row">
            <div class="form">
                <p>Si desea contactar con nosotros lo puedes hacer mendiante el siguiente formulario de contacto, o bien llamando a
                <br/>+34 616 236 722  - +34 696 236 722</p>
                <form>
                    <label> Name *</label>
                    <input type="text" name="name" id="name">
                    <label> Email *</label>
                    <input type="email" name="email" id="email">
                    <label> Website</label>
                    <input type="url" name="website" id="website">
                    <label>Comment</label>
                    <textarea rows="10" name="comment" id="comment"></textarea>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
		</div>
	</div>
</section>
<?php include("./view/footerF.php"); ?>
