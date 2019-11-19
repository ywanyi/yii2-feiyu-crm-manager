<?php

use yii\db\Migration;

/**
 * Class m191115_031415_create_crm_message
 */
class m191115_031415_create_crm_message extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%crm_message}}',[
            'id' => $this->primaryKey(),
            'clue_id' => $this->integer(),
            'adv_id' => $this->integer(),
            'adv_name' => $this->string(),
            'ad_plan_id' => $this->integer(),
            'ad_plan_name' => $this->string(),
            'site_id' => $this->integer(),
            'external_url' => $this->string(),
            'clue_type' => $this->integer(),
            'module_name' => $this->string(),
            'module_id' => $this->integer(),
            'create_time' => $this->string(),
            'clue_source' => $this->integer(),
            'name' => $this->string(),
            'telphone' => $this->string(),
            'gender' => $this->string(),
            'age' => $this->string(),
            'email' => $this->string(),
            'weixin' => $this->string(),
            'qq' => $this->string(),
            'province_name' => $this->string(),
            'city_name' => $this->string(),
            'address' => $this->string(),
            'remark' => $this->string(),
            'remark_dict' => $this->string(),
            'form_remark' => $this->string(),
            'appname' => $this->string(),
            'convert_status' => $this->string(),
            'location' => $this->string(),
//            'clue_convert_state' => $this->string(),
//            'other_dict' => $this->string(),
            'sort' => $this->integer()->notNull()->defaultValue(0),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
            'deleted_at' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%crm_message}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191115_031415_create_crm_message cannot be reverted.\n";

        return false;
    }
    */
}
