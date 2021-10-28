<?php

/*
 * Generated from Formula.g4 by ANTLR 4.9.2
 */

namespace App\Library\Formula {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class FormulaParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, NUMBER = 3, OPERATION = 4, ARGUMENT_SEPERATOR = 5, 
               WHITESPACE = 6;

		public const RULE_operation = 0;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'operation'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'('", "')'", null, null, "','", "' '"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, "NUMBER", "OPERATION", "ARGUMENT_SEPERATOR", "WHITESPACE"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{8}\u{30}\u{4}\u{2}\u{9}\u{2}\u{3}\u{2}\u{7}\u{2}\u{6}\u{A}" .
		    "\u{2}\u{C}\u{2}\u{E}\u{2}\u{9}\u{B}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}" .
		    "\u{2}\u{D}\u{A}\u{2}\u{C}\u{2}\u{E}\u{2}\u{10}\u{B}\u{2}\u{3}\u{2}" .
		    "\u{3}\u{2}\u{7}\u{2}\u{14}\u{A}\u{2}\u{C}\u{2}\u{E}\u{2}\u{17}\u{B}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}\u{2}\u{1B}\u{A}\u{2}\u{C}\u{2}\u{E}" .
		    "\u{2}\u{1E}\u{B}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}\u{2}\u{22}\u{A}\u{2}" .
		    "\u{C}\u{2}\u{E}\u{2}\u{25}\u{B}\u{2}\u{3}\u{2}\u{3}\u{2}\u{7}\u{2}" .
		    "\u{29}\u{A}\u{2}\u{C}\u{2}\u{E}\u{2}\u{2C}\u{B}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{2}\u{2}\u{3}\u{2}\u{2}\u{2}\u{2}\u{34}\u{2}\u{7}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4}\u{6}\u{7}\u{8}\u{2}\u{2}\u{5}\u{4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{6}\u{9}\u{3}\u{2}\u{2}\u{2}\u{7}\u{5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{7}\u{8}\u{3}\u{2}\u{2}\u{2}\u{8}\u{A}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{9}\u{7}\u{3}\u{2}\u{2}\u{2}\u{A}\u{E}\u{7}\u{6}\u{2}\u{2}" .
		    "\u{B}\u{D}\u{7}\u{8}\u{2}\u{2}\u{C}\u{B}\u{3}\u{2}\u{2}\u{2}\u{D}" .
		    "\u{10}\u{3}\u{2}\u{2}\u{2}\u{E}\u{C}\u{3}\u{2}\u{2}\u{2}\u{E}\u{F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F}\u{11}\u{3}\u{2}\u{2}\u{2}\u{10}\u{E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11}\u{15}\u{7}\u{3}\u{2}\u{2}\u{12}\u{14}\u{7}\u{8}" .
		    "\u{2}\u{2}\u{13}\u{12}\u{3}\u{2}\u{2}\u{2}\u{14}\u{17}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{15}\u{13}\u{3}\u{2}\u{2}\u{2}\u{15}\u{16}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{16}\u{18}\u{3}\u{2}\u{2}\u{2}\u{17}\u{15}\u{3}\u{2}\u{2}\u{2}\u{18}" .
		    "\u{1C}\u{7}\u{5}\u{2}\u{2}\u{19}\u{1B}\u{7}\u{8}\u{2}\u{2}\u{1A}\u{19}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1B}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{1A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1C}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{1F}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1E}\u{1C}\u{3}\u{2}\u{2}\u{2}\u{1F}\u{23}\u{7}\u{7}\u{2}" .
		    "\u{2}\u{20}\u{22}\u{7}\u{8}\u{2}\u{2}\u{21}\u{20}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{22}\u{25}\u{3}\u{2}\u{2}\u{2}\u{23}\u{21}\u{3}\u{2}\u{2}\u{2}\u{23}" .
		    "\u{24}\u{3}\u{2}\u{2}\u{2}\u{24}\u{26}\u{3}\u{2}\u{2}\u{2}\u{25}\u{23}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{26}\u{2A}\u{7}\u{5}\u{2}\u{2}\u{27}\u{29}\u{7}" .
		    "\u{8}\u{2}\u{2}\u{28}\u{27}\u{3}\u{2}\u{2}\u{2}\u{29}\u{2C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2A}\u{28}\u{3}\u{2}\u{2}\u{2}\u{2A}\u{2B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2B}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{2A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2D}\u{2E}\u{7}\u{4}\u{2}\u{2}\u{2E}\u{3}\u{3}\u{2}\u{2}\u{2}\u{8}" .
		    "\u{7}\u{E}\u{15}\u{1C}\u{23}\u{2A}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "Formula.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function operation() : Context\OperationContext
		{
		    $localContext = new Context\OperationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_operation);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(5);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHITESPACE) {
		        	$this->setState(2);
		        	$this->match(self::WHITESPACE);
		        	$this->setState(7);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(8);
		        $this->match(self::OPERATION);
		        $this->setState(12);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHITESPACE) {
		        	$this->setState(9);
		        	$this->match(self::WHITESPACE);
		        	$this->setState(14);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(15);
		        $this->match(self::T__0);
		        $this->setState(19);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHITESPACE) {
		        	$this->setState(16);
		        	$this->match(self::WHITESPACE);
		        	$this->setState(21);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(22);
		        $this->match(self::NUMBER);
		        $this->setState(26);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHITESPACE) {
		        	$this->setState(23);
		        	$this->match(self::WHITESPACE);
		        	$this->setState(28);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(29);
		        $this->match(self::ARGUMENT_SEPERATOR);
		        $this->setState(33);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHITESPACE) {
		        	$this->setState(30);
		        	$this->match(self::WHITESPACE);
		        	$this->setState(35);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(36);
		        $this->match(self::NUMBER);
		        $this->setState(40);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHITESPACE) {
		        	$this->setState(37);
		        	$this->match(self::WHITESPACE);
		        	$this->setState(42);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(43);
		        $this->match(self::T__1);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace App\Library\Formula\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\Library\Formula\FormulaParser;
	use App\Library\Formula\FormulaListener;

	class OperationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return FormulaParser::RULE_operation;
	    }

	    public function OPERATION() : ?TerminalNode
	    {
	        return $this->getToken(FormulaParser::OPERATION, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function NUMBER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(FormulaParser::NUMBER);
	    	}

	        return $this->getToken(FormulaParser::NUMBER, $index);
	    }

	    public function ARGUMENT_SEPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(FormulaParser::ARGUMENT_SEPERATOR, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function WHITESPACE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(FormulaParser::WHITESPACE);
	    	}

	        return $this->getToken(FormulaParser::WHITESPACE, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof FormulaListener) {
			    $listener->enterOperation($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof FormulaListener) {
			    $listener->exitOperation($this);
		    }
		}
	} 
}