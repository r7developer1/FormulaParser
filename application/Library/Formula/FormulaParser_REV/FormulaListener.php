<?php

/*
 * Generated from Formula.g4 by ANTLR 4.9.2
 */

namespace App\Library\Formula;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see FormulaParser}.
 */
interface FormulaListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see FormulaParser::operation()}.
	 * @param $context The parse tree.
	 */
	public function enterOperation(Context\OperationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see FormulaParser::operation()}.
	 * @param $context The parse tree.
	 */
	public function exitOperation(Context\OperationContext $context) : void;
}