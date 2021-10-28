<?php

include_once 'vendor/autoload.php';
include_once 'application/Library/Formula/FormulaParser/FormulaLexer.php';
include_once 'application/Library/Formula/FormulaParser/FormulaParser.php';


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use App\Library\Formula\FormulaLexer;
use App\Library\Formula\FormulaParser;

$input = InputStream::fromString($_GET['argv']);
$lexer = new FormulaLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new FormulaParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);
$tree = $parser->operation();

$operation = $tree->OPERATION()->getText();


$args = array_reduce($tree->NUMBER() , function ($memo , $val){
    array_push($memo, $val->getText());
    return $memo;
},[]);

$calc = new \App\Library\Formula\Formula($operation, $args);
var_dump($calc->calculate());