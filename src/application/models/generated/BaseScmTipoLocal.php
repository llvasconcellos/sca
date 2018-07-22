<?php

/**
 * BaseScmTipoLocal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nm_tipo_local
 * @property boolean $fl_sistema
 * @property Doctrine_Collection $ScmLocal
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseScmTipoLocal extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('scm_tipo_local');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('nm_tipo_local', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('fl_sistema', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasMany('ScmLocal', array(
             'local' => 'id',
             'foreign' => 'tp_local'));
    }
}