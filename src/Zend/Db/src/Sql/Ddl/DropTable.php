<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Laminas\Db\Sql\Ddl;

use Laminas\Db\Adapter\Platform\PlatformInterface;
use Laminas\Db\Sql\AbstractSql;
use Laminas\Db\Sql\TableIdentifier;

class DropTable extends AbstractSql implements SqlInterface
{
    const TABLE = 'table';

    /**
     * @var array
     */
    protected $specifications = [
        self::TABLE => 'DROP TABLE %1$s'
    ];

    /**
     * @var string
     */
    protected $table = '';

    /**
     * @param string|TableIdentifier $table
     */
    public function __construct($table = '')
    {
        $this->table = $table;
    }

    protected function processTable(PlatformInterface $adapterPlatform = null)
    {
        return [$this->resolveTable($this->table, $adapterPlatform)];
    }
}
