<?php

 abstract class Empleado extends Persona{

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


        return  $this->Sueldo > Empleado :: $sueldoTope & $this->edad > 21 ;
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

    public function __toString (): string{

        if ($this instanceof Empleado) {
         
            $texto = "<p>" . $this->Nombre . " ". $this->Apellidos ." , Sueldo: " . $this->sueldo . "€. <br>Teléfonos<ol>";

            for ($i=0; $i < count($this->telefono) ; $i++) { 
            
                $texto = $texto . "<li>" . $this->telefono[$i] . "</li>";
            }
    
            $texto = $texto . "</ol></p>";
    
    
            return $texto;
        }else {
            return parent:: __toString ();
        }
        }

}

class Persona{


    private $Nombre;
    private $Apellidos;

    private $edad; 
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
    public function __toString (): string{

        $texto = "<p>" . $this->Nombre . " ". $this->Apellidos . "</p>";


        return $texto;
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
}

?>