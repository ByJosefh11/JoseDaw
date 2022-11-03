<?php

class Empleado{

    private $Nombre;
    private $Apellidos;
    private $Sueldo;


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

    /**
     * Get the value of Sueldo
     */ 
    public function getSueldo()
    {
        return $this->Sueldo;
    }

    /**
     * Set the value of Sueldo
     *
     * @return  self
     */ 
    public function setSueldo($Sueldo)
    {
        $this->Sueldo = $Sueldo;

        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->Nombre. " " . $this->Apellidos;
    }


    public function debePagarImpuestos() {

        
        return  $this->Sueldo > 3333;
    }
    
}

?>