<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yii\feiyu\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clue_id')->textInput() ?>

    <?= $form->field($model, 'adv_id')->textInput() ?>

    <?= $form->field($model, 'adv_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_plan_id')->textInput() ?>

    <?= $form->field($model, 'ad_plan_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_id')->textInput() ?>

    <?= $form->field($model, 'external_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clue_type')->textInput() ?>

    <?= $form->field($model, 'module_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'module_id')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clue_source')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weixin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark_dict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'convert_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'updated_at')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'deleted_at')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
