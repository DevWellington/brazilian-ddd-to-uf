<?php

use BrazilianDddToUF\Convert\ConvertDDD;

class ConvertDDDTest extends PHPUnit_Framework_TestCase {

    public function testReturnsUfAndStateNameForValidDdd() {
        $this->assertSame(
            ['UF' => 'MG', 'StateName' => 'Minas Gerais'],
            ConvertDDD::getArrayDDDandStateName(31)
        );
    }

    public function testThrowsExceptionForInvalidDdd() {
        $this->setExpectedException('InvalidArgumentException', 'DDD inexistente');
        ConvertDDD::getArrayDDDandStateName(100);
    }
}
