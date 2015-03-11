<?php

/**
 * ProductCategories
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ProductCategories extends BaseProductCategories {

    public function addProductCategory(array $data) {
        $errors = $this->__validateData($data);

        if ($errors['error_flag']) {
            return $errors;
        } else {
            $is_active = FALSE;
            if (isset($data['is_active'])) {
                $is_active = TRUE;
            }

            $pc = new ProductCategories();
            $pc->lang_id = $data['lang_id'];
            $pc->name = $data['name'];
            $pc->description = $data['description'];
            $pc->banner_file = $errors['cat_image'];
            $pc->is_active = $is_active;
            $pc->save();

            return $errors;
        }
    }    

    public function updateProductCategory(array $data) {
        $errors = $this->__validateData($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $is_active = FALSE;
            if (isset($data['is_active'])) {
                $is_active = TRUE;
            }

            Doctrine_Query::create()
                    ->update('ProductCategories pc')
                    ->set('pc.name', '?', $data['name'])
                    ->set('pc.description', '?', $data['description'])
                    ->set('pc.banner_file', '?', $errors['cat_image'])
                    ->set('pc.is_active', '?', $is_active)
                    ->where('pc.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function switchStatus($id) {
        $cat = ProductCategoriesTable::getInstance()->findBy('id', $id, Doctrine_Core::HYDRATE_SCALAR);

        if ($cat[0]['dctrn_find_is_active'] == '1') {
            $this->updateStatus($id, FALSE);
        } else {
            $this->updateStatus($id, TRUE);
        }
    }
    
    public function deleteCategory($id){
        Doctrine_Query::create()
                ->update('ProductCategories pc')
                ->set('pc.deleted', '?', TRUE)
                ->where('pc.id =?', $id)
                ->execute();
    } 

    private function updateStatus($id, $new_status) {
        Doctrine_Query::create()
                ->update('ProductCategories pc')
                ->set('pc.is_active', '?', $new_status)
                ->where('pc.id =?', $id)
                ->execute();
    }
    
    private function __validateData(array $data) {
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
                    $errors['banner_file'] = $upload_data['errors'];
                    $error_flag = true;
                } else {
                    $errors['cat_image'] = $upload_data['upload_data']['file_name'];
                }
            } else if ($data['image']) {
                $errors['cat_image'] = $data['image'];
            }
        } else {
            $upload_data = upload_file('products', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['banner_file'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['cat_image'] = $upload_data['upload_data']['file_name'];
            }
        }

        $errors['error_flag'] = $error_flag;

        return $errors;
    }

}
