<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PessoaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'CPF') ?>

    <?= $form->field($model, 'NOME') ?>

    <?= $form->field($model, 'SEXO') ?>

    <?= $form->field($model, 'NACIONALIDADE') ?>

    <?php // echo $form->field($model, 'ANOCHEGADA') ?>

    <?php // echo $form->field($model, 'DTNASCIMENTO') ?>

    <?php // echo $form->field($model, 'INSTRUCAO') ?>

    <?php // echo $form->field($model, 'ESTADOCIVIL') ?>

    <?php // echo $form->field($model, 'NOMEPAI') ?>

    <?php // echo $form->field($model, 'NOMEMAE') ?>

    <?php // echo $form->field($model, 'CEP') ?>

    <?php // echo $form->field($model, 'ENDERECO') ?>

    <?php // echo $form->field($model, 'NUMERO') ?>

    <?php // echo $form->field($model, 'BAIRRO') ?>

    <?php // echo $form->field($model, 'COMPL') ?>

    <?php // echo $form->field($model, 'CIDADE') ?>

    <?php // echo $form->field($model, 'UF') ?>

    <?php // echo $form->field($model, 'TELEFONE') ?>

    <?php // echo $form->field($model, 'PIS') ?>

    <?php // echo $form->field($model, 'RG') ?>

    <?php // echo $form->field($model, 'CTPS') ?>

    <?php // echo $form->field($model, 'SERIE') ?>

    <?php // echo $form->field($model, 'UFCTPS') ?>

    <?php // echo $form->field($model, 'CNH_DTEXPEDIDA') ?>

    <?php // echo $form->field($model, 'CNH_NUMERO') ?>

    <?php // echo $form->field($model, 'CNH_UF') ?>

    <?php // echo $form->field($model, 'CNH_DTVALIDADE') ?>

    <?php // echo $form->field($model, 'ELEITOR') ?>

    <?php // echo $form->field($model, 'ZONAELEITORAL') ?>

    <?php // echo $form->field($model, 'SECAOELEITORAL') ?>

    <?php // echo $form->field($model, 'RESERVISTA') ?>

    <?php // echo $form->field($model, 'DTEMISSAOCTPS') ?>

    <?php // echo $form->field($model, 'RGORGAOEMISSOR') ?>

    <?php // echo $form->field($model, 'UFRG') ?>

    <?php // echo $form->field($model, 'ORGAOSIPREV') ?>

    <?php // echo $form->field($model, 'RN_CIDADE') ?>

    <?php // echo $form->field($model, 'RN_UF') ?>

    <?php // echo $form->field($model, 'DTRG') ?>

    <?php // echo $form->field($model, 'CATEGORIA_RESERVISTA') ?>

    <?php // echo $form->field($model, 'COROLHOS') ?>

    <?php // echo $form->field($model, 'CORCABELOS') ?>

    <?php // echo $form->field($model, 'CUTIS') ?>

    <?php // echo $form->field($model, 'DEFICIENCIAFISICA') ?>

    <?php // echo $form->field($model, 'ALERGIAMEDICAMENTOS') ?>

    <?php // echo $form->field($model, 'ALTURA') ?>

    <?php // echo $form->field($model, 'PESO') ?>

    <?php // echo $form->field($model, 'TIPOSANGUE') ?>

    <?php // echo $form->field($model, 'DOADOR') ?>

    <?php // echo $form->field($model, 'SINAIS') ?>

    <?php // echo $form->field($model, 'RN_REGISTRO_NASCIMENTO') ?>

    <?php // echo $form->field($model, 'RN_LIVRO') ?>

    <?php // echo $form->field($model, 'RN_FOLHA') ?>

    <?php // echo $form->field($model, 'LETRA_SEXO') ?>

    <?php // echo $form->field($model, 'CELULAR') ?>

    <?php // echo $form->field($model, 'DTTERMINO') ?>

    <?php // echo $form->field($model, 'CATFUNCIONAL') ?>

    <?php // echo $form->field($model, 'CNH_CATEGORIA') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'SENHAWEB') ?>

    <?php // echo $form->field($model, 'TSREGISTROS_RESCINDIDOS') ?>

    <?php // echo $form->field($model, 'RN_CIDADE_TCEMS') ?>

    <?php // echo $form->field($model, 'NUMEROPROFISSIONAL') ?>

    <?php // echo $form->field($model, 'DOCADM_TIPODOC') ?>

    <?php // echo $form->field($model, 'LEGADM_TIPODOC') ?>

    <?php // echo $form->field($model, 'LEGADM_NUMERO') ?>

    <?php // echo $form->field($model, 'LEGADM_DATA') ?>

    <?php // echo $form->field($model, 'CPF_PAI') ?>

    <?php // echo $form->field($model, 'CPF_MAE') ?>

    <?php // echo $form->field($model, 'DOCUMENTO_NUMERO') ?>

    <?php // echo $form->field($model, 'DOCUMENTO_TIPO') ?>

    <?php // echo $form->field($model, 'DOCUMENTO_UF') ?>

    <?php // echo $form->field($model, 'REGISTRO_UNICO_CARTORIO') ?>

    <?php // echo $form->field($model, 'REGISTROINT') ?>

    <?php // echo $form->field($model, 'PENSIONISTA_PARIDADE') ?>

    <?php // echo $form->field($model, 'UFELEITOR') ?>

    <?php // echo $form->field($model, 'RACA') ?>

    <?php // echo $form->field($model, 'RESERVISTA_DTEXPEDICAO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
