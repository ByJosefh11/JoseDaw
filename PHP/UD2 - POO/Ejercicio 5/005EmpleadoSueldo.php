<?php

class Empleado{

    private $Nombre;
    private $Apellidos;
    private $Sueldo;

    private $telefono = [];

    static $sueldoTope = 3333;
    public function __construct(protected string $nombre, protected string $apellido, protected int $sueldo=1000){

    }


    public function getNombre()
    {
        return $this->Nombre;
    }

  
    /**
     * Get the value of Apellidos
     */ 
    public function getApellidos()
    {
        return $this->Apellidos;
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


        return  $this->Sueldo > Empleado :: $sueldoTope;
    }
    

    public function anyadirTelefono(int $numtelefono) {

        $telefono[] = $numtelefono;
    }
    public function listarTelefonos(): string {
        
        $listado = "";
        for ($i=0; $i < count($this->telefono) ; $i++) { 
            
            $listado = $listado.$this->telefono[$i];

            if ($i<count($this->telefono)-1) {
                $listado=$listado.",";
             
            }
        }

        return "";
    }
    public function vaciarTelefonos(): void {
        $telefono = [];

    }

    /**
     * Get the value of sueldoTope
     */ 
    public function getSueldoTope()
    {
        return $this->sueldoTope;
    }

    /**
     * Set the value of sueldoTope
     *
     * @return  self
     */ 
    public function setSueldoTope($sueldoTope)
    {
        $this->sueldoTope = $sueldoTope;

        return $this;
    }
}

?>