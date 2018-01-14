<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 04-Jan-18
 * Time: 22:39
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    public static function tableName(){
        return 'product';
    }

    public function getCategory (){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}

