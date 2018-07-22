<?php

/**
 * BaseScaStatusMensagem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nome_status
 * @property Doctrine_Collection $ScaMensagens
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseScaStatusMensagem extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('sca_status_mensagem');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('nome_status', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasMany('ScaMensagens', array(
             'local' => 'id',
             'foreign' => 'sca_status_mensagem_id'));
    }
}