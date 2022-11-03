<?php


class Persona{


    private $Nombre;
    private $Apellidos;

    /**
     * Get the value of Nombre
     */ 
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @return  self
     */ 
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    /**
     * Get the value of Apellidos
     */ 
    public function getApellidos()
    {
        return $this->Apellidos;
    }

    /**
     * Set the value of Apellidos
     *
     * @return  self
     */ 
    public function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;

        return $this;
    }
}

?>