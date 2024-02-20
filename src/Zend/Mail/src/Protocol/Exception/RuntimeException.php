<?php
/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Protocol\Exception;

use Laminas\Mail\Exception;

/**
 * Exception for Laminas\Mail component.
 */
class RuntimeException extends Exception\RuntimeException implements ExceptionInterface
{
}
