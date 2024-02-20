<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Laminas\Db\Sql\Platform\Mysql;

use Laminas\Db\Sql\Platform\AbstractPlatform;

class Mysql extends AbstractPlatform
{
    public function __construct()
    {
        $this->setTypeDecorator('Laminas\Db\Sql\Select', new SelectDecorator());
        $this->setTypeDecorator('Laminas\Db\Sql\Ddl\CreateTable', new Ddl\CreateTableDecorator());
        $this->setTypeDecorator('Laminas\Db\Sql\Ddl\AlterTable', new Ddl\AlterTableDecorator());
    }
}
