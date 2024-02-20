<?php
/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Transport;

use Laminas\Mail;

/**
 * Interface for mail transports
 */
interface TransportInterface
{
    /**
     * Send a mail message
     *
     * @param \Laminas\Mail\Message $message
     * @return
     */
    public function send(Mail\Message $message);
}
