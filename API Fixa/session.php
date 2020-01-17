<?php 
    setcookie('fechado', 'Fechado', (time() + (7 * 24 * 3600)));
    echo 'API Fechada';
?>