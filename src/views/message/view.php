<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model yii\feiyu\models\Message */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'clue_id',
            'adv_id',
            'adv_name',
            'ad_plan_id',
            'ad_plan_name',
            'site_id',
            'external_url:url',
            'clue_type',
            'module_name',
            'module_id',
            'create_time',
            'clue_source',
            'name',
            'telphone',
            'gender',
            'age',
            'email:email',
            'weixin',
            'qq',
            'province_name',
            'city_name',
            'address',
            'remark',
            'remark_dict',
            'form_remark',
            'appname',
            'convert_status',
            'location',
            'sort',
            'status',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
