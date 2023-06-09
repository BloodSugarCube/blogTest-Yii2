<?php

use common\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'articleId',
                'format' => 'html',
                'value' => function (Article $model) {
                    return Html::a($model->primaryKey, ['view', 'articleId' => $model->primaryKey]);
                },
            ],
            [
                'attribute' => 'User',
                'format' => 'html',
                'value' => function (Article $model) {
                    return (!empty($model->user)) ? Html::a($model->user->username, ['user/view', 'userId' => $model->userId]) : null;
                },
            ],
            'text:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Article $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'articleId' => $model->articleId]);
                 }
            ],
        ],
    ]); ?>


</div>
