<?php
ob_start();
?>
    <h1>Esta es el login.</h1>
<?php
$contenido=ob_get_contents();
ob_end_clean();
include_once 'view/layout/index.php';