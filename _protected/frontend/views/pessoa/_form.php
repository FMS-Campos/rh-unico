<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CPF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEXO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NACIONALIDADE')->textInput() ?>

    <?= $form->field($model, 'ANOCHEGADA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTNASCIMENTO')->textInput() ?>

    <?= $form->field($model, 'INSTRUCAO')->textInput() ?>

    <?= $form->field($model, 'ESTADOCIVIL')->textInput() ?>

    <?= $form->field($model, 'NOMEPAI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMEMAE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ENDERECO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMERO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COMPL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CTPS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SERIE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UFCTPS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNH_DTEXPEDIDA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNH_NUMERO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNH_UF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNH_DTVALIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ELEITOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZONAELEITORAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SECAOELEITORAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESERVISTA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTEMISSAOCTPS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RGORGAOEMISSOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UFRG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ORGAOSIPREV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RN_CIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RN_UF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTRG')->textInput() ?>

    <?= $form->field($model, 'CATEGORIA_RESERVISTA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COROLHOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CORCABELOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CUTIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEFICIENCIAFISICA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALERGIAMEDICAMENTOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALTURA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PESO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPOSANGUE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOADOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SINAIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RN_REGISTRO_NASCIMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RN_LIVRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RN_FOLHA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LETRA_SEXO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CELULAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTTERMINO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CATFUNCIONAL')->textInput() ?>

    <?= $form->field($model, 'CNH_CATEGORIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SENHAWEB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TSREGISTROS_RESCINDIDOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RN_CIDADE_TCEMS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMEROPROFISSIONAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCADM_TIPODOC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEGADM_TIPODOC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEGADM_NUMERO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LEGADM_DATA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF_PAI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF_MAE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCUMENTO_NUMERO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCUMENTO_TIPO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCUMENTO_UF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REGISTRO_UNICO_CARTORIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REGISTROINT')->textInput() ?>

    <?= $form->field($model, 'PENSIONISTA_PARIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UFELEITOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RACA')->textInput() ?>

    <?= $form->field($model, 'RESERVISTA_DTEXPEDICAO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
