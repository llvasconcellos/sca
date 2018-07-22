<?php

/**
 * BaseScmRule
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $module_id
 * @property ScmModule $ScmModule
 * @property Doctrine_Collection $ScmGroupRule
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseScmRule extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('scm_rule');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => false,
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('module_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('ScmModule', array(
             'local' => 'module_id',
             'foreign' => 'id'));

        $this->hasMany('ScmGroupRule', array(
             'local' => 'id',
             'foreign' => 'rule_id'));
    }
}