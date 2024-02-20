<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Laminas\Mvc\Controller;

use Laminas\Console\Adapter\AdapterInterface as ConsoleAdapter;
use Laminas\Console\Request as ConsoleRequest;
use Laminas\Mvc\Exception\InvalidArgumentException;
use Laminas\Stdlib\RequestInterface;
use Laminas\Stdlib\ResponseInterface;

class AbstractConsoleController extends AbstractActionController
{
    /**
     * @var ConsoleAdapter
     */
    protected $console;

    /**
     * @param ConsoleAdapter $console
     * @return self
     */
    public function setConsole(ConsoleAdapter $console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * @return ConsoleAdapter
     */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(RequestInterface $request, ResponseInterface $response = null)
    {
        if (! $request instanceof ConsoleRequest) {
            throw new InvalidArgumentException(sprintf(
                '%s can only dispatch requests in a console environment',
                get_called_class()
            ));
        }
        return parent::dispatch($request, $response);
    }
}
