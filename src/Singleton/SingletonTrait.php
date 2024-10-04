<?php
/**
 * Part of Omega CMS - Application Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @namespace
 */
namespace Omega\Support\Singleton;

/**
 * @use
 */
use function get_called_class;
use Omega\Support\Singleton\Exception\SingletonException;

/**
 * Singleton trait.
 *
 * The `SingletonTrait`  encapsulates a  design pattern  used to ensure  that  a class has only one
 * instance and provides a  global point of access to  that instance.  By incorporating  this trait
 * into  a class, it  enables the  creation of  a single  instance of  the class and  restricts any
 * subsequent  instantiations  to  return the  same  instance.
 *
 * @category    Omega
 * @package     Support
 * @subpackage  Singleton
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
trait SingletonTrait
{
    /**
     * Singleton instance.
     *
     * @var static[] $instances Holds the singleton instances.
     */
    private static array $instances;

    /**
     * Get the singleton instance.
     *
     * This method returns the singleton instance of the class. If an instance
     * doesn't exist, it creates one and returns it.
     *
     * @param  ?string $basePath Holds the Omega application base path or null.
     * @return static Return the singleton instance.
     */
    public static function getInstance( ?string $basePath = null ) : static
    {
        $getCalledClass = get_called_class();

        if ( ! isset( self::$instances[ $getCalledClass ] ) ) {
            self::$instances[ $getCalledClass ] = new $getCalledClass( $basePath );
        }

        return self::$instances[ $getCalledClass ];
    }

    /**
     * Clone method.
     *
     * This method is overridden to prevent cloning of the singleton instance.
     * Cloning would create a second instance, which violates the Singleton pattern.
     *
     * @return void
     * @throws SingletonException If an attempt to clone the singleton is made.
     */
    public function __clone() : void
    {
        throw new SingletonException(
            'You can not clone a singleton.'
        );
    }

    /**
     * Wakeup method.
     *
     * This method is overridden to prevent deserialization of the singleton instance.
     * Deserialization would create a second instance, which violates the Singleton pattern.
     *
     * @return void
     * @throws SingletonException If an attempt at deserialization is made.
     */
    public function __wakeup() : void
    {
        throw new SingletonException(
            'You can not deserialize a singleton.'
        );
    }

    /**
     * Sleep method.
     *
     * This method is overridden to prevent serialization of the singleton instance.
     * Serialization would create a second instance, which violates the Singleton pattern.
     *
     * @return array Return the names of private properties in parent classes.
     * @throws SingletonException If an attempt at serialization is made.
     */
    public function __sleep() : array
    {
        throw new SingletonException(
            'You can not serialize a singleton.'
        );
    }
}