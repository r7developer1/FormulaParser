<?php

namespace App\Library\Formula;

use App\Library\Formula\Abstracts\FormulaAbstracts;

class Formula extends FormulaAbstracts
{
    /**
     * @throws \Exception
     */
    public function calculate($operation , $arguments )
    {
        if (empty($operation) || empty($arguments)){
            throw new \Exception("Illegal operation or arguments provided. Please check your formula");
        }elseif ($operation == '<missing OPERATION>'){
            throw new \Exception("Invalid Formula");
        }elseif(array_filter($arguments, function($val) { return !is_numeric($val); })){
            throw new \Exception("Invalid Arguments provided");
        }
        $values = array_map( function( $arg ) {
            if ( is_array( $arg ) ) {
                return $this->calculate( $arg['operation'], $arg['arguments'] );
            }
            return $arg;
        }, $arguments);

        return $this->{strtolower($operation)}( $values );
    }
}