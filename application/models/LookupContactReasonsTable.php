<?php

/**
 * LookupContactReasonsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LookupContactReasonsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object LookupContactReasonsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LookupContactReasons');
    }
    
    public static function getAllReasons() {
        return Doctrine_Query::create()
                ->select('r.*')
                ->from('LookupContactReasons r')
                ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->execute();
    }
}