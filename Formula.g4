// Derived from http://json.org
grammar Formula;

/*
 * Parser Rules
 */
operation  : WHITESPACE* OPERATION WHITESPACE* '(' WHITESPACE* NUMBER WHITESPACE* ARGUMENT_SEPERATOR WHITESPACE* NUMBER WHITESPACE* ')' ;
/*
 * Lexer Rules
 */
NUMBER     : [0-9]+;
OPERATION : ('DIV') | ('MUL') | ('SUM') | ('SUB');
ARGUMENT_SEPERATOR : ',';
WHITESPACE : ' ' -> skip ;