<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 04-Jan-18
 * Time: 22:39
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord{

    public static function tableName(){
    return 'category';
}

    public function getProducts (){
    return $this->hasMany(Product::className(), ['category_id' => 'id']);
}

}

