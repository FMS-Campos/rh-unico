<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuncionarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pessoa_id') ?>

    <?= $form->field($model, 'CPF') ?>

    <?= $form->field($model, 'REGISTRO') ?>

    <?= $form->field($model, 'MATRICULA') ?>

    <?php // echo $form->field($model, 'EMPRESA_COD') ?>

    <?php // echo $form->field($model, 'divisao_id') ?>

    <?php // echo $form->field($model, 'subdivisao_id') ?>

    <?php // echo $form->field($model, 'local_trabalho_id') ?>

    <?php // echo $form->field($model, 'cargo_id') ?>

    <?php // echo $form->field($model, 'atividade_id') ?>

    <?php // echo $form->field($model, 'DIVISAO_COD') ?>

    <?php // echo $form->field($model, 'SUBDIVISAO_COD') ?>

    <?php // echo $form->field($model, 'LOCAL_TRABALHO_COD') ?>

    <?php // echo $form->field($model, 'CARGOATUAL_COD') ?>

    <?php // echo $form->field($model, 'ATIVIDADE_COD') ?>

    <?php // echo $form->field($model, 'VINCULO') ?>

    <?php // echo $form->field($model, 'CONTRATO') ?>

    <?php // echo $form->field($model, 'JORNADA') ?>

    <?php // echo $form->field($model, 'CARGOINICIAL') ?>

    <?php // echo $form->field($model, 'SITUACAO') ?>

    <?php // echo $form->field($model, 'CLT_OU_ESTATUTO') ?>

    <?php // echo $form->field($model, 'DTNOMEACAO') ?>

    <?php // echo $form->field($model, 'DTPOSSE') ?>

    <?php // echo $form->field($model, 'SUBDIVISAOITEM') ?>

    <?php // echo $form->field($model, 'NIVEL_CARGO') ?>

    <?php // echo $form->field($model, 'SITUACAO_FUNCIONAL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
