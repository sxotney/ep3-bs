<?php
/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Address;

interface AddressInterface
{
    /**
     * Retrieve email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Retrieve name
     *
     * @return string
     */
    public function getName();

    /**
     * String representation of address
     *
     * @return string
     */
    public function toString();
}
