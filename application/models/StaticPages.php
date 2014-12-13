<?php

/**
 * StaticPages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class StaticPages extends BaseStaticPages
{
    public function updatePage(array $data, $lang_id = 1) {
        Doctrine_Query::create()
                ->update('StaticPages p')
                ->set('p.description', '?', $data['description'])
                ->where('p.page_id =?', $data['page_id'])
                ->andWhere('p.lang_id=?', $lang_id)
                ->execute();
    }
}