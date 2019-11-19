<?php
/**
 * Created by PhpStorm.
 * User: graph
 * Date: 2019/11/19
 * Time: 16:08
 */

namespace yii\feiyu\behaviors;


use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\db\AfterSaveEvent;

class ConvertStateChangedBehavior extends Behavior
{
    public function events(){
        return [
            ActiveRecord::EVENT_AFTER_UPDATE => 'afterUpdate'
        ];
    }

    public function afterUpdate(AfterSaveEvent $afterSaveEvent){

    }

}