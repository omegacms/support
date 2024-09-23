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
namespace Omega\Support\Singleton\Exceptions;

/**
 * @use
 */
use Exception;

/**
 * Singleton exception.
 *
 * The `SingletonException` is thrown when there is an issue related to the
 * Singleton pattern implementation. It typically represents situations where
 * multiple instances of a Singleton class are attempted to be created or other
 * violations of the Singleton pattern.
 *
 * @category    Omega
 * @package     Omega\Singleton
 * @subèackage  Omega\Singleton\Exceptions
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class SingletonException extends Exception
{
}