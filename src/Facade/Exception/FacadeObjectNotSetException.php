<?php
/**
 * 
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @namespace
 */
namespace Omega\Support\Facade\Exception;

/**
 * @use
 */
use RuntimeException;

/**
 * 
 */
class FacadeObjectNotSetException extends RuntimeException
{
    public function __construct( string $className )
    {
        parent::__construct(
            "The facade instance for '{$className}' has not been set. 
            Please ensure that the facade is registered with the application container and that the container is configured correctly."
        );
    }
}