<?php
/*
 * Class for better handling regular expressions
 * named r for easier usage
 */

class r {
	const delimiter  = '/';
	const space      = '\s';
	const non_space  = '\S';
	const digit      = '\d';
	const non_digit  = '\D';
	const new_line   = '\n';
	const start_line = '$';
	const end_line   = '^';
	const n_times    = '+';
	const any_char   = '.';
	const maybe      = '?';
	const _or        = '|';
	const a_z        = 'a-z';
	const A_Z        = 'A-Z';

	public static function match($pattern) {
		return '(' . $pattern . ')';
	}

	public static function exp($pattern) {
		return '/' . $pattern . '/';
	}

	public static function one_of($pattern) {
		return '[' . $pattern . ']';
	}

	public static function not_one_of($pattern) {
		return '[^' . $pattern . ']';
	}

	public static function times($n , $m = false) {
		if ($m) {
			return '{' . $n . ',' . $m . '}';
		}

		return '{' . $n . '}';
	}

	public static function char($c) {
		return preg_quote($c, self::delimiter);
	}

	public static function string($string) {
		return preg_quote($string, self::delimiter);
	}

	public function comment($pattern) {
		return '(?#' . $pattern . ')';
	}

	public function group($pattern) {
		return '(?:' . $pattern . ')';
	}

	public function range($b, $e) {
		return $b . '-' . $e;
	}
}

?>
