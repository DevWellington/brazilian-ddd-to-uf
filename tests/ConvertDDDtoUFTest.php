<?php

use BrazilianDddToUF\Convert\ConvertDDDtoUF;

class ConvertDDDtoUFTest extends PHPUnit_Framework_TestCase {

    public function testReturnsUfForValidDdd() {
        $this->assertSame('MG', ConvertDDDtoUF::getUF(31));
        $this->assertSame('SP', ConvertDDDtoUF::getUF(11));
    }

    public function testThrowsExceptionForInvalidDdd() {
        $this->setExpectedException('InvalidArgumentException', 'DDD inexistente');
        ConvertDDDtoUF::getUF(10);
    }
}
