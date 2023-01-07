<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/app/Models/database/Cn.php';
class Persona{
    private $cn;
    private $id;
    private $dni;
    private $nombres; 
    private $apePaterno;
    private $apeMaterno;
    private $correo;
    private $lenguaje;
    private $fase;
    private $edad;
    private $comprendido;

    public function __construct(){
        $this->cn= new Cn();
        $this->cn = $this->cn->conectar();
    }
    public function getAll(){
        $stm = $this->cn->prepare('SELECT * FROM personas');
        $stm->execute();
        $rs = $stm->get_result();
        $array = [];
        if($stm->error==""){
            while ($myrow = $rs->fetch_assoc()) {
                $array[] = $myrow;
            }
        }else{
            $array  = $stm->error;
        }
        $json = json_encode($array);
        return $json;
    }
    public function get(){
        $stm = $this->cn->prepare('SELECT * FROM personas WHERE id = ?');
        $stm->bind_param('s', $this->id);
        $stm->execute();
        if($stm->error==""){
            $res = $stm->get_result();
            if($res->num_rows>0){
                $array = $res->fetch_all(MYSQLI_ASSOC);
            }else{
                $array = [];
            }
        }else{
            $array  = $stm->error;
        }
        return $array;
    }
    public function insertUpdate(){
        $stm= $this->cn->prepare("call sp_insertUpdate(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stm->bind_param("iisssssiis", $this->id, $this->dni, $this->apePaterno, $this->apeMaterno, $this->nombres, $this->correo, $this->lenguaje, $this->fase, $this->edad, $this->comprendido);
        $stm->execute();
        if($stm->error==""){
            if($stm->affected_rows>0){
                $array = "ok";
            }else{
                $array = "no";
            }

        }else{
            $array  = $stm->error;
        }
        return $array;
    }
    public function delete(){
        $stm= $this->cn->prepare("DELETE FROM personas WHERE id = ?");
        $stm->bind_param("i", $this->id);
        $stm->execute();
        if($stm->error==""){
            if($stm->affected_rows>0){
                $array = "ok";
            }else{
                $array = "no";
            }
        }else{
            $array  = $stm->error;
        }
        return $array;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of nombres
     */ 
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     *
     * @return  self
     */ 
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get the value of apePaterno
     */ 
    public function getApePaterno()
    {
        return $this->apePaterno;
    }

    /**
     * Set the value of apePaterno
     *
     * @return  self
     */ 
    public function setApePaterno($apePaterno)
    {
        $this->apePaterno = $apePaterno;

        return $this;
    }

    /**
     * Get the value of apeMaterno
     */ 
    public function getApeMaterno()
    {
        return $this->apeMaterno;
    }

    /**
     * Set the value of apeMaterno
     *
     * @return  self
     */ 
    public function setApeMaterno($apeMaterno)
    {
        $this->apeMaterno = $apeMaterno;

        return $this;
    }

    /**
     * Get the value of correo
     */ 
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get the value of correo
     */ 
    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    /**
     * Set the value of lenguaje
     *
     * @return  self
     */ 
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;

        return $this;
    }

    /**
     * Get the value of fase
     */ 
    public function getFase()
    {
        return $this->fase;
    }

    /**
     * Set the value of fase
     *
     * @return  self
     */ 
    public function setFase($fase)
    {
        $this->fase = $fase;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of comprendido
     */ 
    public function getComprendido()
    {
        return $this->comprendido;
    }

    /**
     * Set the value of comprendido
     *
     * @return  self
     */ 
    public function setComprendido($comprendido)
    {
        $this->comprendido = $comprendido;

        return $this;
    }
}