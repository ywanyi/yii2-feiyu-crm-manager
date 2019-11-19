<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yii\feiyu\models\MessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'clue_id') ?>

    <?= $form->field($model, 'adv_id') ?>

    <?= $form->field($model, 'adv_name') ?>

    <?= $form->field($model, 'ad_plan_id') ?>

    <?php // echo $form->field($model, 'ad_plan_name') ?>

    <?php // echo $form->field($model, 'site_id') ?>

    <?php // echo $form->field($model, 'external_url') ?>

    <?php // echo $form->field($model, 'clue_type') ?>

    <?php // echo $form->field($model, 'module_name') ?>

    <?php // echo $form->field($model, 'module_id') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'clue_source') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'telphone') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'weixin') ?>

    <?php // echo $form->field($model, 'qq') ?>

    <?php // echo $form->field($model, 'province_name') ?>

    <?php // echo $form->field($model, 'city_name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'remark_dict') ?>

    <?php // echo $form->field($model, 'form_remark') ?>

    <?php // echo $form->field($model, 'appname') ?>

    <?php // echo $form->field($model, 'convert_status') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
