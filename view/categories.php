<div id="sidebar" class="col-right">
    <section>
        <div class="heading"><h2>Ver por categor&iacute;as</h2></div>
        <div class="content">
            <ul>
                <?php
                if(is_array($allCategories)){
                    foreach($allCategories as $row ){
                        if($row->idPadre!=0) $etiq="->"; else $etiq ="";
                        echo "<li><a href='index.php?controller=index&action=trabajos&category=$row->id'>$etiq $row->categoria</a></li>\n";
                    }
                }
                ?>
            </ul>
        </div>
    </section>
</div>
