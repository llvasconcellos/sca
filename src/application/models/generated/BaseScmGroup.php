<?php

/**
 * BaseScmGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $sca_account_id
 * @property ScaAccount $ScaAccount
 * @property Doctrine_Collection $ScmGroupRule
 * @property Doctrine_Collection $ScmUserGroup
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseScmGroup extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('scm_group');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('sca_account_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('ScaAccount', array(
             'local' => 'sca_account_id',
             'foreign' => 'id'));

        $this->hasMany('ScmGroupRule', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $this->hasMany('ScmUserGroup', array(
             'local' => 'id',
             'foreign' => 'group_id'));
    }
}