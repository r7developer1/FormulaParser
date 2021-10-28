<?php

namespace App\Library\Formula\Abstracts;

abstract class FormulaAbstracts
{
    protected $operation;

    protected $args;

    public function __construct(string $operation, array $args)
    {
        $this->operation = $operation;
        $this->args = $args;
    }

    protected function sum()
    {
        return array_sum($this->args);
    }

    protected function div()
    {
        $res = null;
        $reversed_args = array_reverse($this->args);
        for($i = 0; $i < count($reversed_args); $i++){
            if (array_key_exists(($i + 1) , $reversed_args)){
                if ($res != null){
                    $res /= $reversed_args[$i + 1];
                }else{
                    $res = $reversed_args[$i] / $reversed_args[$i + 1];
                }
            }
        }
        return $res;
    }

    protected function sub()
    {
        $res = null;
        for($i = 0; $i < count($this->args); $i++){
            if (array_key_exists(($i + 1) , $this->args)){
                if ($res != null){
                    $res -= $this->args[$i + 1];
                }else{
                    $res = $this->args[$i] - $this->args[$i + 1];
                }
            }
        }
        return $res;
    }

    protected function mul()
    {
        return array_product($this->args);
    }
}