<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Funcionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pessoa_id',
            'CPF',
            'REGISTRO',
            'MATRICULA',
            'EMPRESA_COD',
            'divisao_id',
            'subdivisao_id',
            'local_trabalho_id',
            'cargo_id',
            'atividade_id',
            'DIVISAO_COD',
            'SUBDIVISAO_COD',
            'LOCAL_TRABALHO_COD',
            'CARGOATUAL_COD',
            'ATIVIDADE_COD',
            'VINCULO',
            'CONTRATO',
            'JORNADA',
            'CARGOINICIAL',
            'SITUACAO',
            'CLT_OU_ESTATUTO',
            'DTNOMEACAO',
            'DTPOSSE',
            'SUBDIVISAOITEM',
            'NIVEL_CARGO',
            'SITUACAO_FUNCIONAL',
        ],
    ]) ?>

</div>
