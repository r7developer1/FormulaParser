<?php

include_once 'vendor/autoload.php';
include_once 'application/Library/Formula/FormulaParser/FormulaLexer.php';
include_once 'application/Library/Formula/FormulaParser/FormulaParser.php';


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use App\Library\Formula\Formula;
use App\Library\Formula\FormulaLexer;
use App\Library\Formula\FormulaParser;

$input = InputStream::fromString($_GET['argv']);
$lexer = new FormulaLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new FormulaParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);
$expression = $parser->expression();

$calc = new Formula($expression);

try {
    $res = $calc->calculate($calc->getOperation() , $calc->getArguments());

    var_dump($res);
}catch (Exception $e){
    echo $e->getMessage();
}

