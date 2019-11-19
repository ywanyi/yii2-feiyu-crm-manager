<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel yii\feiyu\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Messages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Message'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'clue_id',
            'adv_id',
            'adv_name',
            'ad_plan_id',
            //'ad_plan_name',
            //'site_id',
            //'external_url:url',
            //'clue_type',
            //'module_name',
            //'module_id',
            //'create_time',
            //'clue_source',
            //'name',
            //'telphone',
            //'gender',
            //'age',
            //'email:email',
            //'weixin',
            //'qq',
            //'province_name',
            //'city_name',
            //'address',
            //'remark',
            //'remark_dict',
            //'form_remark',
            //'appname',
            //'convert_status',
            //'location',
            //'sort',
            //'status',
            //'created_at',
            //'updated_at',
            //'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
