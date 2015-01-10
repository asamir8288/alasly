<?php

/**
 * OpportunitesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OpportunitesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object OpportunitesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Opportunites');
    }
    
    public static function getOne($job_id) {
        return Doctrine_Query::create()
                ->select('o.*, c.*, cl.*, i.*, r.*')
                ->from('Opportunites o, o.LookupCountries c, o.LookupCareersLevel cl, o.LookupIndustries i, o.LookupJobRoles r')
                ->where('o.id =?', $job_id)
                ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->fetchOne();
    }
    
    public static function getOpportunities($active = FALSE) {
        $q = Doctrine_Query::create()
                ->select('o.*, c.*, r.*')
                ->from('Opportunites o, o.LookupCountries c, o.LookupJobRoles r')
                ->where('o.deleted=0');
        if($active){
                $q = $q->andWhere('o.is_active=?', TRUE);
        }
               $q = $q->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->execute();
               
        return $q;
    }
    
    public static function getJobTitle($job_id) {
        $q = Doctrine_Query::create()
                ->select('o.job_title')
                ->from('Opportunites o')
                ->where('o.id =?', $job_id)
                ->setHydrationMode(Doctrine::HYDRATE_SCALAR)
                ->fetchOne();
        
        return $q['o_job_title'];
    }
}