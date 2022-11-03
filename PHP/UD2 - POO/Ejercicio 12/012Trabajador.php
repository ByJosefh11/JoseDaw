<?php

class Gerente extends trabajador{

    private $salario;
    public function calcularSueldo(): int{

        return $this->salario + ($this->salario * $this->edad/100) ;

    }
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

}


class Empleado extends trabajador{

    private $horasTrabajadas;

    private $precioPorHora;
    
    public function calcularSueldo(): int{

        return $this->horasTrabajadas * $this->precioPorHora;

    }
    

    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    /**
     * Set the value of horasTrabajadas
     *
     * @return  self
     */ 
    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
    }

    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    /**
     * Set the value of precioPorHora
     *
     * @return  self
     */ 
    public function setPrecioPorHora($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;

        return $this;
    }

}
abstract class trabajador extends Persona{

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

    abstract public function calcularSueldo();

    public static function toHtml(Persona $pers): string{

        if ($pers instanceof Empleado) {
         
            $texto = "<p>" . $pers->Nombre . " ". $pers->Apellidos ." , Sueldo: " . $pers->sueldo . "€. <br>Teléfonos<ol>";

            for ($i=0; $i < count($pers->telefono) ; $i++) { 
            
                $texto = $texto . "<li>" . $pers->telefono[$i] . "</li>";
            }
    
            $texto = $texto . "</ol></p>";
    
    
            return $texto;
        }else {
            return parent:: toHtml ($pers);
        }
        }

}

    abstract class Persona{


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

    public abstract function toHtml(Persona $pers);

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
     * Get the value of horasTrabajadas
     */ 


    /**
     * Get the value of precioPorHora
     */ 


    /**
     * Get the value of salario
     */ 

}


?>