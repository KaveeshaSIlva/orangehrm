<?php

/**
 * BaseDataPoint
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $datapointTypeId
 * @property clob $definition
 * @property DataPointType $DataPointType
 * 
 * @method integer       getId()              Returns the current record's "id" value
 * @method string        getName()            Returns the current record's "name" value
 * @method integer       getDatapointTypeId() Returns the current record's "datapointTypeId" value
 * @method clob          getDefinition()      Returns the current record's "definition" value
 * @method DataPointType getDataPointType()   Returns the current record's "DataPointType" value
 * @method DataPoint     setId()              Sets the current record's "id" value
 * @method DataPoint     setName()            Sets the current record's "name" value
 * @method DataPoint     setDatapointTypeId() Sets the current record's "datapointTypeId" value
 * @method DataPoint     setDefinition()      Sets the current record's "definition" value
 * @method DataPoint     setDataPointType()   Sets the current record's "DataPointType" value
 * 
 * @package    orangehrm
 * @subpackage model\beacon\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDataPoint extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_datapoint');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('datapoint_type_id as datapointTypeId', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('definition', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DataPointType', array(
             'local' => 'datapoint_type_id',
             'foreign' => 'id'));
    }
}