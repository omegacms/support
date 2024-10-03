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
namespace Omega\Support\Facade;

/**
 * @use
 */
use Omega\Application\Application;
use Omega\Support\Facade\Exception\FacadeObjectNotFoundException;

/**
 * Facade class.
 *
 * The `Facade` class serves as a base for creating facades in the Omega CMS framework.
 * It provides a static interface to underlying classes, allowing developers to access
 * functionalities without directly instantiating those classes. This pattern promotes
 * cleaner code and adheres to the principles of dependency injection and inversion of control.
 *
 * Each facade must implement the `getFacadeAccessor` method to specify the service
 * it represents in the application.
 *
 * @category    Omega
 * @package     Support
 * @subpackage  Facades
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */
abstract class AbstractFacade implements FacadeInterface
{
    /**
     * Resolve the facade instance.
     *
     * This method retrieves the underlying instance for the facade from the application
     * container. It calls the `resolve` method on the application instance, using the
     * value returned by `getFacadeAccessor`.
     *
     * @return mixed Return the resolved instance of the underlying class.
     */
    protected static function resolveFacadeInstance() : mixed
    {
        return Application::getInstance()->resolve( static::getFacadeAccessor() );
    }

    /**
     * Handle dynamic static calls to the facade.
     *
     * This magic method intercepts static method calls on the facade and delegates
     * the call to the underlying instance retrieved from the application container.
     * If the instance is not set, it throws a RuntimeException.
     *
     * @param  string $method    Holds the name of the method being called.
     * @param  array  $arguments Holds the arguments passed to the method.
     * @return mixed Return the result of the method call on the underlying instance.
     * @throws RuntimeException If a facade root has not been set.
     */
    public static function __callStatic( $method, $arguments )
    {
        $instance = static::resolveFacadeInstance();

        if ( ! $instance ) {
            throw new FacadeObjectNotSetException(
                static::class
            );
        }

        return $instance->$method(...$arguments);
    }
}
