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
namespace Omega\Support\Factory;

/**
/**
 * The `GenericFactoryInterface` is a contract for creating instances of objects based \
 * on a provided configuration array. This interface declares a method `create` that accepts 
 * an optional configuration array and returns a mixed type result, which can be any type of 
 * object or value.
 * 
 * @category    Omega
 * @package     Support
 * @subpackage  Factory
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovanni. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
interface GenericFactoryInterface
{
    /**
     * Creates and returns an instance of an object based on the provided configuration.
     * 
     * @param ?array $config Holds an optional configuration array that may be used to influence the creation of the object. If no configuration is provided, default settings may be applied.
     * @return mixed Return the created object or value. The return type is flexible, allowing for any type to be returned, depending on the implementation.
     */
    public function create( ?array $config = null ) : mixed;
}