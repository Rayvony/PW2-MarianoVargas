<?php

class Piedra
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro)
    {
        return $otro->teCompitePiedra($this);
    }

    public function teCompiteTijera($otro)
    {
        return $this;
    }

    public function teCompitePiedra($otro)
    {
        return new Empate();
    }

    public function teCompitePapel($otro)
    {
        return $otro;
    }

    public function ganador()
    {
        return $this->nombreJugador;
    }
}

class Papel
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro)
    {
        return $otro->teCompitePapel($this);
    }

    public function teCompiteTijera($otro)
    {
        return $otro;
    }

    public function teCompitePiedra($otro)
    {
        return $this;
    }

    public function teCompitePapel($otro)
    {
        return new Empate();
    }

    public function ganador()
    {
        return $this->nombreJugador;
    }
}

class Tijera
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro)
    {
        return $otro->teCompiteTijera($this);
    }

    public function teCompiteTijera($otro)
    {
        return new Empate();
    }

    public function teCompitePiedra($otro)
    {
        return $otro;
    }

    public function teCompitePapel($otro)
    {
        return $this;
    }

    public function ganador()
    {
        return $this->nombreJugador;
    }
}

class Empate
{
    public function ganador()
    {
        return "Empate";
    }
}
