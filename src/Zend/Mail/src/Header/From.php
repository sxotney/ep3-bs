<?php
/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Header;

class From extends AbstractAddressList
{
    protected $fieldName = 'From';
    protected static $type = 'from';
}
