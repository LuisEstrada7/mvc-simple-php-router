<?php
ob_start();
?>
    <h3>Crud - Persona</h3>
    <button class="btn btn-primary" id="btn-new">Nuevo</button>
    <div class="table-responsive mt-3">
        <table class="table table-hover table-striped" id="tabla-personas">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Correo</th>
                    <th>Lenguaje</th>
                    <th>Fase</th>
                    <th>Edad</th>
                    <th>Comprendido</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
<?php
$contenido = ob_get_contents();
ob_end_clean();

ob_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/persona/modal/insertUpdate.php';
$modals = ob_get_contents();
ob_end_clean();

ob_start();
?>
    <script src="/public/assets/persona/js/persona.js" type="module"></script>
<?php
$scripts = ob_get_contents();
ob_end_clean();
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/layout/index.php';