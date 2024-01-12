<?php

namespace Alban\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Alban\ValidadorEc;

class TestCase extends BaseTestCase
{
    /**
     * Validador.
     *
     * Guarda Instancia de clase ValidarIdentificacion() disponible para todos los métodos
     *
     * @var string
     */
    protected $validador;

    /**
     * Inicio objecto Validador().
     */
    protected function setUp()
    {
        $this->validador = new ValidadorEc();
    }
}
