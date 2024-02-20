<?php
/**
 * @see       https://github.com/laminas/laminas-loader for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-loader/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Loader\Exception;

require_once __DIR__ . '/ExceptionInterface.php';

class DomainException extends \DomainException implements ExceptionInterface
{
}
