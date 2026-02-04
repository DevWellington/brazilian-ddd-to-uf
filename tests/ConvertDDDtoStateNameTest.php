<?php

use BrazilianDddToUF\Convert\ConvertDDDtoStateName;

class ConvertDDDtoStateNameTest extends PHPUnit_Framework_TestCase {

    public function testReturnsStateNameForValidDdd() {
        $this->assertSame('Minas Gerais', ConvertDDDtoStateName::getStateName(31));
        $this->assertSame('São Paulo', ConvertDDDtoStateName::getStateName(11));
    }

    public function testThrowsExceptionForInvalidDdd() {
        $this->setExpectedException('InvalidArgumentException', 'DDD inexistente');
        ConvertDDDtoStateName::getStateName(0);
    }
}
