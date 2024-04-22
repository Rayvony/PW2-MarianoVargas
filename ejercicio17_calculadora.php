<?php

abstract class Expresion
{
    abstract public function resolverEcuacion();
}

class Operando extends Expresion
{
    private $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function resolverEcuacion()
    {
        return $this->valor;
    }
}

class Sumar extends Expresion
{
    private $expresion1;
    private $expresion2;

    public function __construct($expresion1, $expresion2)
    {
        $this->expresion1 = $expresion1;
        $this->expresion2 = $expresion2;
    }

    public function resolverEcuacion()
    {
        return $this->expresion1->resolverEcuacion() + $this->expresion2->resolverEcuacion();
    }
}

class Restar extends Expresion
{
    private $expresion1;
    private $expresion2;

    public function __construct($expresion1, $expresion2)
    {
        $this->expresion1 = $expresion1;
        $this->expresion2 = $expresion2;
    }

    public function resolverEcuacion()
    {
        return $this->expresion1->resolverEcuacion() - $this->expresion2->resolverEcuacion();
    }
}

class Multiplicar extends Expresion
{
    private $expresion1;
    private $expresion2;

    public function __construct($expresion1, $expresion2)
    {
        $this->expresion1 = $expresion1;
        $this->expresion2 = $expresion2;
    }

    public function resolverEcuacion()
    {
        return $this->expresion1->resolverEcuacion() * $this->expresion2->resolverEcuacion();
    }
}
