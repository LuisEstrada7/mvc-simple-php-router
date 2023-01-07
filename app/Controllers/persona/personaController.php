<?php
namespace app\Controllers\persona;
require_once $_SERVER['DOCUMENT_ROOT'].'/app/Models/persona/Persona.php';
use Persona;
class personaController{
    public function index(){

    }
    public function getAll(){
        $personas = new Persona();
        $personas = $personas->getAll();
        return $personas;
    }
    public function get($id){
        $id = isset($id) ? $id : null;
        $id = $id > 0 ? $id : null;
        $persona = new Persona();
        $persona->setId($id);
        $persona = $persona->get();
        return json_encode($persona);
    }
    public function insertUpdate(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $id = $id > 0 ? $id : null;
        $persona = new Persona();
        $persona->setId($id);
        $persona->setDni($_POST["dni"]);
        $persona->setNombres($_POST["nombres"]);
        $persona->setApePaterno($_POST["paterno"]);
        $persona->setApeMaterno($_POST["materno"]);
        $persona->setCorreo($_POST["celular"]);
        $message = $persona->insertUpdate();
        $personas = $persona->getAll();
        $resultado = [$message, $personas];
        return json_encode($resultado);
    }
    public function delete(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $id = $id > 0 ? $id : null;
        $persona = new Persona();
        $persona->setId($id);
        $message = $persona->delete();
        $personas = $persona->getAll();
        $resultado = [$message, $personas];
        return json_encode($resultado);
    }
}