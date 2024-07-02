<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && ($_GET['query'])){
            $abc = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $abc = '';
            $query = '';
        }
        if(($abc == 'quanlydanhmucsanpham' && $query == 'them')){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }elseif(($abc == 'quanlydanhmucsanpham' && $query == 'sua')){
            include("modules/quanlydanhmucsp/suaw.php");
        }elseif(($abc == 'quanlylp' && $query == 'them')){
            include("modules/quanlylp/them.php");
            include("modules/quanlylp/lietke.php");
        }elseif($abc == 'quanlylp' && $query == 'sua'){
            include("modules/quanlylp/suaw.php");
        }

        elseif(($abc == 'quanlypc' && $query == 'them')){
            include("modules/quanlypc/them.php");
            include("modules/quanlypc/lietke.php");
        }elseif($abc == 'quanlypc' && $query == 'sua'){
            include("modules/quanlypc/suaw.php");
        }

        elseif(($abc == 'quanlylk' && $query == 'them')){
            include("modules/quanlylk/them.php");
            include("modules/quanlylk/lietke.php");
        }elseif($abc == 'quanlylk' && $query == 'sua'){
            include("modules/quanlylk/suaw.php");
        }

        elseif(($abc == 'quanlygpu' && $query == 'them')){
            include("modules/quanlygpu/them.php");
            include("modules/quanlygpu/lietke.php");
        }elseif($abc == 'quanlygpu' && $query == 'sua'){
            include("modules/quanlygpu/suaw.php");
        }

        elseif(($abc == 'quanlymh' && $query == 'them')){
            include("modules/quanlymh/them.php");
            include("modules/quanlymh/lietke.php");
        }elseif($abc == 'quanlymh' && $query == 'sua'){
            include("modules/quanlymh/suaw.php");
        }

        elseif(($abc == 'quanlynews' && $query == 'them')){
            include("modules/quanlynews/them.php");
            include("modules/quanlynews/lietke.php");
        }elseif($abc == 'quanlynews' && $query == 'sua'){
            include("modules/quanlynews/suaw.php");
        }

        else{
            include("modules/dashboard.php");
        }
    ?>
</div>