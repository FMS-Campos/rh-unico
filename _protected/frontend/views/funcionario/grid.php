<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FuncionarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funcionarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Funcionario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pessoa.NOME',
            'empresa.NOME',
            'divisao.NOME',
            'CPF',
            'REGISTRO',
            'MATRICULA',
            // 'EMPRESA_COD',
            // 'divisao_id',
            // 'subdivisao_id',
            // 'local_trabalho_id',
            // 'cargo_id',
            // 'atividade_id',
            // 'DIVISAO_COD',
            // 'SUBDIVISAO_COD',
            // 'LOCAL_TRABALHO_COD',
            // 'CARGOATUAL_COD',
            // 'ATIVIDADE_COD',
            // 'VINCULO',
            // 'CONTRATO',
            // 'JORNADA',
            // 'CARGOINICIAL',
            // 'SITUACAO',
            // 'CLT_OU_ESTATUTO',
            // 'DTNOMEACAO',
            // 'DTPOSSE',
            // 'SUBDIVISAOITEM',
            // 'NIVEL_CARGO',
            // 'SITUACAO_FUNCIONAL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
