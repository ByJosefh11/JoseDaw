<?php

class Empleado extends Persona{

    private $Sueldo;

    private $telefono = [];

    static $sueldoTope = 3333;
    public function __construct(protected string $nombre, protected string $apellido, protected int $sueldo=1000){

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


    public static function toHtml(Empleado $emp): string{

        $texto = "<p>" . $emp->Nombre . " ". $emp->Apellidos ." , Sueldo: " . $emp->sueldo . "€. <br>Teléfonos<ol>";

        for ($i=0; $i < count($emp->telefono) ; $i++) { 
        
            $texto = $texto . "<li>" . $emp->telefono[$i] . "</li>";
        }

        $texto = $texto . "</ol></p>";


        return $texto;
    }

}

?>