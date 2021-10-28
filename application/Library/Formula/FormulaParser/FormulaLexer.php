<?php

/*
 * Generated from Formula.g4 by ANTLR 4.9.2
 */

namespace App\Library\Formula {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class FormulaLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, NUMBER = 3, OPERATION = 4, ARGUMENT_SEPERATOR = 5, 
               WHITESPACE = 6;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'T__0', 'T__1', 'NUMBER', 'OPERATION', 'ARGUMENT_SEPERATOR', 'WHITESPACE'
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
		    "\u{2}\u{8}\u{2C}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}" .
		    "\u{7}\u{9}\u{7}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}" .
		    "\u{6}\u{4}\u{15}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}\u{16}\u{3}\u{5}\u{3}" .
		    "\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{5}\u{5}\u{25}\u{A}\u{5}" .
		    "\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{2}" .
		    "\u{2}\u{8}\u{3}\u{3}\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}\u{B}\u{7}\u{D}" .
		    "\u{8}\u{3}\u{2}\u{3}\u{3}\u{2}\u{32}\u{3B}\u{2}\u{2F}\u{2}\u{3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{5}\u{3}\u{2}\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{9}\u{3}\u{2}\u{2}\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{D}\u{3}\u{2}\u{2}\u{2}\u{3}\u{F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{5}\u{11}\u{3}\u{2}\u{2}\u{2}\u{7}\u{14}\u{3}\u{2}\u{2}\u{2}\u{9}" .
		    "\u{24}\u{3}\u{2}\u{2}\u{2}\u{B}\u{26}\u{3}\u{2}\u{2}\u{2}\u{D}\u{28}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F}\u{10}\u{7}\u{2A}\u{2}\u{2}\u{10}\u{4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11}\u{12}\u{7}\u{2B}\u{2}\u{2}\u{12}\u{6}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{13}\u{15}\u{9}\u{2}\u{2}\u{2}\u{14}\u{13}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{15}\u{16}\u{3}\u{2}\u{2}\u{2}\u{16}\u{14}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{16}\u{17}\u{3}\u{2}\u{2}\u{2}\u{17}\u{8}\u{3}\u{2}\u{2}\u{2}\u{18}" .
		    "\u{19}\u{7}\u{46}\u{2}\u{2}\u{19}\u{1A}\u{7}\u{4B}\u{2}\u{2}\u{1A}" .
		    "\u{25}\u{7}\u{58}\u{2}\u{2}\u{1B}\u{1C}\u{7}\u{4F}\u{2}\u{2}\u{1C}" .
		    "\u{1D}\u{7}\u{57}\u{2}\u{2}\u{1D}\u{25}\u{7}\u{4E}\u{2}\u{2}\u{1E}" .
		    "\u{1F}\u{7}\u{55}\u{2}\u{2}\u{1F}\u{20}\u{7}\u{57}\u{2}\u{2}\u{20}" .
		    "\u{25}\u{7}\u{4F}\u{2}\u{2}\u{21}\u{22}\u{7}\u{55}\u{2}\u{2}\u{22}" .
		    "\u{23}\u{7}\u{57}\u{2}\u{2}\u{23}\u{25}\u{7}\u{44}\u{2}\u{2}\u{24}" .
		    "\u{18}\u{3}\u{2}\u{2}\u{2}\u{24}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{24}\u{1E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{24}\u{21}\u{3}\u{2}\u{2}\u{2}\u{25}\u{A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{26}\u{27}\u{7}\u{2E}\u{2}\u{2}\u{27}\u{C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{28}\u{29}\u{7}\u{22}\u{2}\u{2}\u{29}\u{2A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2A}\u{2B}\u{8}\u{7}\u{2}\u{2}\u{2B}\u{E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{5}\u{2}\u{16}\u{24}\u{3}\u{8}\u{2}\u{2}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary() : Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName() : string
		{
			return 'Formula.g4';
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames() : array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames() : array
		{
			return self::MODE_NAMES;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
		{
			return self::vocabulary();
		}
	}
}