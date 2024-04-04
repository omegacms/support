<?php
/**
 * Part of Omega CMS - Support Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2022 Adriano Giovanni. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @namespace
 */
namespace Omega\Support;

/**
 * @use
 */
use function preg_match;
use function preg_quote;
use function str_replace;
use function strlen;

/**
 * Str class.
 *
 * The 'Str' class provides a collection of static methods for string manipulation 
 * and handling. This utility class offers various functions for common string 
 * operations such as concatenation, substring extraction, trimming, case conversion, 
 * and pattern matching. By encapsulating these functionalities within a single class, 
 * 'Str' simplifies string processing tasks and promotes code reusability. Developers 
 * can utilize the methods provided by 'Str' to efficiently work with strings in their 
 * applications, enhancing readability, maintainability, and overall code quality.
 *
 * @category    Omega
 * @package     Omega\Support
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovanni. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class Str
{
    /**
     * Determine if a given string matches the given patterns.
     * 
     * @param  string|array $pattern Holds the pattern to match.
     * @param  string       $value   Holds the value to check.
     * @return bool Return true if the given string match, false if not.
     */
    public static function is( string|array $pattern, string $value ) : bool
    {
        $patterns = Arr::wrap( $pattern );

        if ( empty( $patterns ) ) {
            return false;
        }

        foreach ( $patterns as $pattern ) {
            if ( $pattern == $value ) {
                return true;
            }

            $pattern = preg_quote( $pattern, '#' );
            $pattern = str_replace( '\*', '.*', $pattern );

            if ( preg_match( '#^' . $pattern . '\z#u', $value ) === 1 ) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string starts with a given substring.
     * 
     * @param  string       $haystack Holds the main string to search within.
     * @param  string|array $needles  Holds the substring to search for within the main string.
     * @return bool Return true if a string starts with a given substring, false if not.
     */
    public static function startsWith( string $haystack, string|array $needles ) : bool
    {
        foreach ( (array) $needles as $needle ) {
            if ( $needle !== '' && substr( $haystack, 0, strlen( $needle ) ) === (string) $needle ) {
                return true;
            }
        }

        return false;
    }
}
