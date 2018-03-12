<div class="clearfix"></div>
<section>
    <ul id="pagi">
        <?php
            if(is_array($numberRows)){
                $paginas = ceil((count($numberRows))/4);
                $fin = $paginas;
                $inicio = 1;

                if($fin > 5){
                    if(!isset($_GET['page'])){
                        $fin = 2;
                        $inicio = 1;
                    }else{
                        $fin = $_GET['page']+2;
                        $inicio =$_GET['page'];
                    }
                }

                if(isset($_GET['category'])) $category = "&category=". $_GET['category']; else $category="";
                if(isset($_GET['page']) && $_GET['page'] > 1){
                    echo "<li><a href='index.php?controller=index&action=trabajos&page=". ($_GET['page']-1) ."$category'>Anterior</a></li>";
                }
                for($i=$inicio; $i<=$fin;$i++){

                    echo "<li><a ";
                    if((!isset($_GET['page']) && $i ==1) || (isset($_GET['page']) && $_GET['page'] == $i ) ) echo 'class="current" ';
                    echo "href='index.php?controller=index&action=trabajos&page=$i$category'>$i</a></li>";
                }

                if(isset($_GET['page'])){
                    if($_GET['page'] < $paginas  && $paginas > 1){
                        echo "<li><a href='index.php?controller=index&action=trabajos&page=". ($_GET['page']+1) ."$category'>Siguiente</a></li>";
                    }
                }else{
                    if($paginas > 1)
                    echo "<li><a href='index.php?controller=index&action=trabajos&page=2$category'>Siguiente</a></li>";
                }
            }
        ?>
    </ul>
</section>

<div class="clearfix"></div>
