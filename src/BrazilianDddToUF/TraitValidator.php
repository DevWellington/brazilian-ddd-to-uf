<?php

namespace BrazilianDddToUF;

trait TraitValidator {

    protected static function validate(array $arrayDDD, $ddd){
        if( !array_key_exists($ddd, $arrayDDD) ) {
            return false;
            throw new \InvalidArgumentException('DDD inexistente');
        }

        return true;
    }
} 