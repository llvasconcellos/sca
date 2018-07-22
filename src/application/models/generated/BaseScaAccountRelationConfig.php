<?php

/**
 * BaseScaAccountRelationConfig
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int $id
 * @property int $sca_account_id
 * @property int $sca_account_config_id
 * @property string $valor_parametro
 * @property ScaAccount $ScaAccount
 * @property ScaAccountConfig $ScaAccountConfig
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseScaAccountRelationConfig extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('sca_account_relation_config');
        $this->hasColumn('id', 'int', 4, array(
             'type' => 'int',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('sca_account_id', 'int', 4, array(
             'type' => 'int',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('sca_account_config_id', 'int', 4, array(
             'type' => 'int',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('valor_parametro', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'notnull' => true,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('ScaAccount', array(
             'local' => 'sca_account_id',
             'foreign' => 'id'));

        $this->hasOne('ScaAccountConfig', array(
             'local' => 'sca_account_config_id',
             'foreign' => 'id'));
    }
}