<?php
/**
 * Part of Omega CMS - Support Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2024 Adriano Giovanni. (https://omegacms.github.io)
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
use function is_array;
use function is_null;

/**
 * Arr class.
 * 
 * The 'Arr' class offers a comprehensive set of static methods for array 
 * manipulation and handling. This utility class provides functionalities 
 * for common array operations such as sorting, filtering, merging, mapping, 
 * and searching. By encapsulating these functionalities within a single class, 
 * 'Arr' simplifies array processing tasks and promotes code reusability. 
 * Developers can leverage the methods provided by 'Arr' to efficiently work 
 * with arrays in their applications, improving productivity, maintainability, 
 * and overall code organization.
 * 
 * @category    Omega
 * @package     Omega\Support
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovanni. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class Arr
{
    /**
     * If the given value is not an array and not null, wrap it 
     * in a single value.
     * 
     * @param  mixed $value Holds the value to check.
     * @return array<mixed> Return the wrapped array.
     */
    public static function wrap( mixed $value ) : array
    {
        if ( is_null( $value ) ) {
            return [];
        }

        return is_array( $value ) ? $value : [ $value ];
    }
}