<?php

/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 19/11/15
 * Time: 18:42
 */

namespace AppBundle\Service;

class CadenaService
{
    private $campo1;
    private $campo2;
    private $resultado;

    /**
     * @return mixed
     */
    public function getCampo1()
    {
        return $this->campo1;
    }

    /**
     * @param mixed $campo1
     */
    public function setCampo1($campo1)
    {
        $this->campo1 = $campo1;
    }

    /**
     * @return mixed
     */
    public function getCampo2()
    {
        return $this->campo2;
    }

    /**
     * @param mixed $campo2
     */
    public function setCampo2($campo2)
    {
        $this->campo2 = $campo2;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param mixed $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    public function mayuscula()
    {
        $this->setResultado('Cadena 1 en Mayúsculas: '.strtoupper($this->getCampo1()).', cadena 2 en mayusculas: '.strtoupper($this->getCampo2()));
    }

    public function minuscula()
    {
        $this->setResultado('Cadena 1 en minúsculas: '.strtolower($this->getCampo1()).', cadena 2 en minúsculas: '.strtolower($this->getCampo2()));
    }

    public function longitud()
    {
        $this->setResultado('Longitud de la cadena 1: '.strlen($this->getCampo1()).', longitud de la cadena 2: '.strlen($this->getCampo2()));
    }

    public  function concatena()
    {
        $this->setResultado('Cadenas concatenadas: '.$this->getCampo1().$this->getCampo2());
    }

    /*public function caracterUbicacion()
    {
        $this->setResultado('El caracter  de la cadena 1 se encuentra en la posicion: '.substr());
    }
    */
    public function fraseToarray()
    {
        $this->setResultado('Cadena 1 en arrays: '.str_split($this->getCampo1()).', cadena 2 en arrays: '.str_split($this->getCampo2()));
    }
}