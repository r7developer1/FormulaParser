<?php

namespace App\Library\Formula\Abstracts;

use App\Library\Formula\Context\ExpressionContext;

abstract class FormulaAbstracts
{
    protected $operation;

    protected $args;

    public function __construct(ExpressionContext $context)
    {
        $this->setOperationAndArgs($context);
    }

    /**
     * @throws \Exception
     */
    protected function setOperationAndArgs(ExpressionContext $context) : void
    {
        try {
            $tree = $this->createOperationTree($context);
            $this->operation = $tree['operation'];
            $this->args = $tree['arguments'];
        }catch (\Exception $e){
            echo "<pre>{$e->getTraceAsString()}</pre>";
        }
    }

    /**
     * @throws \Exception
     */
    protected function createOperationTree(ExpressionContext $tree ) : array
    {
        if ($tree->exception){
            throw new \Exception($tree->exception);
        };
        $operation = $tree->OPERATION()->getText();
        $arguments = array_reduce( $tree->argument(), function( $memo, $val ) {
            $expression = $val->expression();

            if ( $expression ) array_push( $memo, $this->createOperationTree( $expression ) );
            else array_push( $memo, $val->getText() );

            return $memo;
        }, []);

        return [
            'operation' => $operation,
            'arguments' => $arguments
        ];
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function getArguments()
    {
        return $this->args;
    }


    protected function sum($args)
    {
        return array_sum($args);
    }

    protected function div($args)
    {
        $res = null;
        $reversed_args = array_reverse($args);
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

    protected function sub($args)
    {
        $res = null;
        for($i = 0; $i < count($args); $i++){
            if (array_key_exists(($i + 1) , $args)){
                if ($res != null){
                    $res -= $this->args[$i + 1];
                }else{
                    $res = $args[$i] - $args[$i + 1];
                }
            }
        }
        return $res;
    }

    protected function mul($args)
    {
        return array_product($args);
    }
}