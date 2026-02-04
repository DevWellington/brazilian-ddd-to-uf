<?php

use BrazilianDddToUF\Validate\Validate;

class ValidateTest extends PHPUnit_Framework_TestCase {

    public function testReturnsTrueForValidDdd() {
        $this->assertTrue(Validate::isValid(31));
        $this->assertTrue(Validate::isValid(11));
    }

    public function testThrowsExceptionForInvalidDdd() {
        $this->setExpectedException('InvalidArgumentException', 'DDD inexistente');
        Validate::isValid(9);
    }
}
