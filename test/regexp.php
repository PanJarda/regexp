#!/usr/bin/php -q
<?php
require '../regexp.php';

$regexp = r::exp(
				r::match(
					r::space.
					r::digit.
					r::one_of(
						r::space . r::char('f') . r::char('s')
					) .
					r::times(3)
				) .
				r::maybe .
				r::match(
					r::char('/') .
					r::string('{(*$include*fiile ahoj') .
					r::comment('Toto je komentar k regularnimu vyrazu')
				)
			);

echo $regexp;
echo "\n";

$postal_address = r::exp(
							r::one_of(
								r::range('a', 'z') .
								r::range('A', 'Z') .
								r::digit .
								r::space .
								r::char('-') .
								r::char(',') .
								r::char('#') .
								r::char('.') .
								r::char('+')
							) .
							r::n_times
						);
$postal_address2 = r::exp(
							r::one_of(
								r::a_z .
								r::A_Z .
								r::digit .
								r::space .
								r::string('-,#.+')
							) .
							r::n_times
						);
$postal_address3 = '/[a-zA-Z\d\s\-\,\#\.\+]+/';
echo $postal_address;
echo "\n";

$zip_code = r::exp(
					r::start_line .
					r::digit . r::times(5, 6) .
					r::group(
						r::one_of(
							r::char('-') .
							r::space
						) .
						r::digit.r::times(4)
					) .
					r::maybe .
					r::end_line
				);
$zip_code2 = '/^\d{5,6}(?:[-\s]\d{4})?$/';
echo $zip_code;
echo "\n";

?>
