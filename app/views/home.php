<?php
ob_start();
?>
    <h1>Esta es la pagina inicial.</h1>
<?php
$contenido=ob_get_contents();
ob_end_clean();
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/layout/index.php';