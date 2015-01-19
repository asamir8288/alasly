<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UsersOpportunities', 'default');

/**
 * BaseUsersOpportunities
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $profile_id
 * @property integer $opportunity_id
 * @property Opportunites $Opportunites
 * @property Profiles $Profiles
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsersOpportunities extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('users_opportunities');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('profile_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('opportunity_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Opportunites', array(
             'local' => 'opportunity_id',
             'foreign' => 'id'));

        $this->hasOne('Profiles', array(
             'local' => 'profile_id',
             'foreign' => 'id'));
    }
}