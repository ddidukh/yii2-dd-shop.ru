<?php

/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 05-Jan-18
 * Time: 01:01
 */

namespace app\components;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;
    public function init()
    {
        parent::init();
        if ($this->tpl === NULL) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
    return  $this->tpl;
    }
}
