<?php

/**
 * Products
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Products extends BaseProducts {

    public function addProduct(array $data) {
        $errors = $this->__validateProduct($data);

        if ($errors['error_flag']) {
            return $errors;
        } else {
            $is_active = FALSE;
            if (isset($data['is_active'])) {
                $is_active = TRUE;
            }

            $pc = new Products();
            $pc->cat_id = $data['cat_id'];
            $pc->name = $data['name'];
            $pc->description = $data['description'];
            $pc->vedio_url = $data['vedio_url'];
            $pc->product_type = $data['product_type'];
            $pc->weight = $data['weight'];
            $pc->pack = $data['pack'];
            $pc->container_20 = $data['container_20'];
            $pc->container_40 = $data['container_40'];
            $pc->container_hc = $data['container_hc'];
            $pc->main_image = $errors['p_image'];
            $pc->is_active = $is_active;
            $pc->created_at = date('ymdHis');
            $pc->save();

            return $errors;
        }
    }

    public function updateProduct(array $data) {
        $errors = $this->__validateProduct($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $is_active = FALSE;
            if (isset($data['is_active'])) {
                $is_active = TRUE;
            }

            Doctrine_Query::create()
                    ->update('Products pc')
                    ->set('pc.cat_id', '?', $data['cat_id'])
                    ->set('pc.name', '?', $data['name'])
                    ->set('pc.description', '?', $data['description'])
                    ->set('pc.vedio_url', '?', $data['vedio_url'])
                    ->set('pc.product_type', '?', $data['product_type'])
                    ->set('pc.weight', '?', $data['weight'])
                    ->set('pc.pack', '?', $data['pack'])
                    ->set('pc.container_20', '?', $data['container_20'])
                    ->set('pc.container_40', '?', $data['container_40'])
                    ->set('pc.container_hc', '?', $data['container_hc'])
                    ->set('pc.main_image', '?', $errors['p_image'])
                    ->set('pc.is_active', '?', $is_active)
                    ->set('pc.updated_at', '?', date('ymdHis'))
                    ->where('pc.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    private function __validateProduct(array $data) {
        $error_flag = false;
        $errors = array();

        if (!required($data['name'])) {
            $error_flag = true;
            $errors['name'] = lang('name_field');
        }
        if (!required($data['description'])) {
            $error_flag = true;
            $errors['description'] = lang('description_field');
        }

        if (isset($data['id'])) {
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {
                $upload_data = upload_file('products', array('jpg|png|jpeg|gif'), '2028');
                if ($upload_data['error_flag']) {
                    $errors['main_image'] = $upload_data['errors'];
                    $error_flag = true;
                } else {
                    $errors['p_image'] = $upload_data['upload_data']['file_name'];
                }
            } else if ($data['image']) {
                $errors['p_image'] = $data['image'];
            }
        } else {
            $upload_data = upload_file('products', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['main_image'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['p_image'] = $upload_data['upload_data']['file_name'];
            }
        }

        $errors['error_flag'] = $error_flag;

        return $errors;
    }
    
    public function deleteProduct($id) {
        Doctrine_Query::create()
                ->update('Products p')
                ->set('p.deleted' , '?', TRUE)
                ->where('p.id =?', $id)
                ->execute();
    }
    
    public function switchStatus($id) {
        $cat = ProductsTable::getInstance()->findBy('id', $id, Doctrine_Core::HYDRATE_SCALAR);

        if ($cat[0]['dctrn_find_is_active'] == '1') {
            $this->updateStatus($id, FALSE);
        } else {
            $this->updateStatus($id, TRUE);
        }
    }       

    private function updateStatus($id, $new_status) {
        Doctrine_Query::create()
                ->update('Products p')
                ->set('p.is_active', '?', $new_status)
                ->where('p.id =?', $id)
                ->execute();
    }

}
