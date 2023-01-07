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
        return json_encode($personas);
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
        $values = input()->all();
        $id = isset($values['id']) ? $values['id'] : null;
        $id = $id > 0 ? $id : null;
        $persona = new Persona();
        $persona->setId($id);
        $persona->setDni($values["dni"]);
        $persona->setApePaterno($values["paterno"]);
        $persona->setApeMaterno($values["materno"]);
        $persona->setNombres($values["nombres"]);
        $persona->setCorreo($values["email"]);
        $persona->setLenguaje($values["lenguaje"]);
        $persona->setFase($values["fase"]);
        $persona->setEdad($values["edad"]);
        $persona->setComprendido($values["comprendido"]);
        $message = $persona->insertUpdate();
        $personas = $persona->getAll();
        $resultado = [$message, $personas];
        return json_encode($resultado);
    }
    public function delete($id){
        $id = isset($id) ? $id : null;
        $id = $id > 0 ? $id : null;
        $persona = new Persona();
        $persona->setId($id);
        $message = $persona->delete();
        $personas = $persona->getAll();
        $resultado = [$message, $personas];
        return json_encode($resultado);
    }
}