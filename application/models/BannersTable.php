<?php

/**
 * BannersTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BannersTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object BannersTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Banners');
    }
    
    public static function getActiveBanners($is_active = FALSE, $order = 'DESC', $lang_id = 1) {
        $q = Doctrine_Query::create()
                ->select('b.*')
                ->from('Banners b')
                ->where('b.lang_id =?', $lang_id);
        if ($is_active) {
            $q = $q->andWhere('b.is_active=?', $is_active);
        }        
        $q = $q->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->orderBy('b.id '. $order)
                ->execute();

        return $q;
    }
}