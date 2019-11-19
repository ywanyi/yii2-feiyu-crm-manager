<?php

namespace yii\feiyu\models;

use Yii;

/**
 * This is the model class for table "{{%crm_message}}".
 *
 * @property int $id
 * @property int $clue_id
 * @property int $adv_id
 * @property string $adv_name
 * @property int $ad_plan_id
 * @property string $ad_plan_name
 * @property int $site_id
 * @property string $external_url
 * @property int $clue_type
 * @property string $module_name
 * @property int $module_id
 * @property string $create_time
 * @property int $clue_source
 * @property string $name
 * @property string $telphone
 * @property string $gender
 * @property string $age
 * @property string $email
 * @property string $weixin
 * @property string $qq
 * @property string $province_name
 * @property string $city_name
 * @property string $address
 * @property string $remark
 * @property string $remark_dict
 * @property string $form_remark
 * @property string $appname
 * @property string $convert_status
 * @property string $location
 * @property int $sort
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_at
 */
class Message extends \yii\db\ActiveRecord
{
    const CLUE_CONVERT_STATE_INVALID = 1;
    const CLUE_CONVERT_STATE_POTENTIAL_CUSTOMER = 2;
    const CLUE_CONVERT_STATE_HIGH_VALUE_CUSTOMER = 3;
    const CLUE_CONVERT_STATE_PAID = 4;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%crm_message}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clue_id', 'adv_id', 'ad_plan_id', 'site_id', 'clue_type', 'module_id', 'clue_source', 'sort', 'status', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['adv_name', 'ad_plan_name', 'external_url', 'module_name', 'create_time', 'name', 'telphone', 'gender', 'age', 'email', 'weixin', 'qq', 'province_name', 'city_name', 'address', 'remark', 'remark_dict', 'form_remark', 'appname', 'convert_status', 'location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'clue_id' => Yii::t('app', 'Clue ID'),
            'adv_id' => Yii::t('app', 'Adv ID'),
            'adv_name' => Yii::t('app', 'Adv Name'),
            'ad_plan_id' => Yii::t('app', 'Ad Plan ID'),
            'ad_plan_name' => Yii::t('app', 'Ad Plan Name'),
            'site_id' => Yii::t('app', 'Site ID'),
            'external_url' => Yii::t('app', 'External Url'),
            'clue_type' => Yii::t('app', 'Clue Type'),
            'module_name' => Yii::t('app', 'Module Name'),
            'module_id' => Yii::t('app', 'Module ID'),
            'create_time' => Yii::t('app', 'Create Time'),
            'clue_source' => Yii::t('app', 'Clue Source'),
            'name' => Yii::t('app', 'Name'),
            'telphone' => Yii::t('app', 'Telphone'),
            'gender' => Yii::t('app', 'Gender'),
            'age' => Yii::t('app', 'Age'),
            'email' => Yii::t('app', 'Email'),
            'weixin' => Yii::t('app', 'Weixin'),
            'qq' => Yii::t('app', 'Qq'),
            'province_name' => Yii::t('app', 'Province Name'),
            'city_name' => Yii::t('app', 'City Name'),
            'address' => Yii::t('app', 'Address'),
            'remark' => Yii::t('app', 'Remark'),
            'remark_dict' => Yii::t('app', 'Remark Dict'),
            'form_remark' => Yii::t('app', 'Form Remark'),
            'appname' => Yii::t('app', 'Appname'),
            'convert_status' => Yii::t('app', 'Convert Status'),
            'location' => Yii::t('app', 'Location'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return MessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MessageQuery(get_called_class());
    }
}
