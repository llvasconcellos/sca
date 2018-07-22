<?php

/**
 * BaseScmFilial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_empresa
 * @property string $nm_filial
 * @property ScmEmpresa $ScmEmpresa
 * @property Doctrine_Collection $ScmMaquina
 * @property Doctrine_Collection $ScmMovimentacaoDoc
 * @property Doctrine_Collection $ScmTransformacaoDoc
 * @property Doctrine_Collection $ScmHistoricoStatus
 * @property Doctrine_Collection $ScmFaturaDoc
 * @property Doctrine_Collection $ScmRegularizacaoDoc
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseScmFilial extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('scm_filial');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('id_empresa', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => 0,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('nm_filial', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('ScmEmpresa', array(
             'local' => 'id_empresa',
             'foreign' => 'id'));

        $this->hasMany('ScmMaquina', array(
             'local' => 'id',
             'foreign' => 'id_filial'));

        $this->hasMany('ScmMovimentacaoDoc', array(
             'local' => 'id',
             'foreign' => 'id_filial'));

        $this->hasMany('ScmTransformacaoDoc', array(
             'local' => 'id',
             'foreign' => 'id_filial'));

        $this->hasMany('ScmHistoricoStatus', array(
             'local' => 'id',
             'foreign' => 'id_filial'));

        $this->hasMany('ScmFaturaDoc', array(
             'local' => 'id',
             'foreign' => 'id_filial'));

        $this->hasMany('ScmRegularizacaoDoc', array(
             'local' => 'id',
             'foreign' => 'id_filial'));
    }
}