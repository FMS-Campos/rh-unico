<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionario-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= Html::activeLabel($model->pessoa, 'NOME'); ?>
            <?= $form->field($model->pessoa, 'NOME',['showLabels'=>false])
                    ->textInput(
                            ['maxlength' => true,],
                            ['placeholder'=>'Nome']); ?>
        </div>
        <div class="col-md-2">
            <?= Html::activeLabel($model, 'MATRICULA'); ?>
            <?= $form->field($model, 'MATRICULA',['showLabels'=>false])->
                 textInput( [
                        ['readonly' => true],
                    ]);?>
        </div>
    </div>
    
    <fieldset class="col-md-12">
        <legend style="padding: 30px 5px 8px;"><span class="glyphicon glyphicon-chevron-right"
                style="margin: 0 8px 0 0;"></span>Lotação / local de tabalho:</legend>
        
        <?php   $divisoes = ArrayHelper::map($model->divisao->divisoesEmpresa, 'CODIGO', 'NOME') ?>
        <?php   $i=0; $total = count($model->lotacao);
                foreach ( $model->lotacao as $lotacao ) : ?>
        <?php   $atividades = ArrayHelper::map($model->atividades, 'id', 'NOME') ?>
        <?php var_dump($model->lotacao);die(); ?>

        <div class="row">
            <div class="col-md-6">
                <p>
                    <span class="glyphicon glyphicon-chevron-right" style="margin: 0 8px 0 0;"></span>
                    <b>Vínculo: </b><span style="margin-right: 10px"><?php echo $i+1; ?></span>
                    <b>Matrícula: </b><span style="margin-right: 10px"><?php echo $lotacao->REGISTRO ?></span>
                    <b>Função: </b><?php echo $lotacao->funcao['NOME'] ?>
                </p>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <hr style="margin-top: 5px;margin-bottom: 15px;border: 0;border-top: 2px solid #aaa;">
        <div class="row" <?php echo (($total - $i) > 1)?'style="margin-bottom: 20px;"':'' ?>>
            <div class="row">
                <div class="col-md-4">
                    <?php 
                        echo Html::hiddenInput('Lotacao[' .$i. '][REGISTRO]', $lotacao->REGISTRO);
                        echo Html::activeLabel($lotacao, 'divisao', ['label'=>'Autarquia']);
                        echo Select2::widget([
                        //    'model' => $lotacao,
                        //    'attribute' => '[' .$i. ']divisao',
                            'name' => 'Lotacao[' .$i. '][divisao]',
                            'data' => $divisoes,
                            'options' => ['placeholder' => $lotacao->divisao['NOME']],
                            'pluginOptions' => [
                                'allowClear' => false,
                                //'minimumInputLength' => 2,
                            ],
                        ]);
                    ?>
                </div>
                <div class="col-md-4">
                    <?php 
                        $arraySubdivisao = \yii\helpers\ArrayHelper::map($lotacaoModel->subdivisoes,'id','NOME');
                        echo Html::activeLabel($lotacao, 'subdivisao', ['label'=>'Secretaria']);
                        //$lotacao->subdivisao['id'] = null;
                        echo Select2::widget([
                            'name' => 'Lotacao[' .$i. '][subdivisao]',
                            'data' => $arraySubdivisao,
                            'options' => ['placeholder' => $lotacao->subdivisao['NOME']],
                            'pluginOptions' => [
                                'allowClear' => false,
                                'minimumInputLength' => 2,
                            ],
                        ]);

                    ?>
                </div>
                <div class="col-md-4">
                    <?php 
                        $arrayLocal = \yii\helpers\ArrayHelper::map($lotacaoModel->locais,'id','NOME');
                        echo Html::activeLabel($lotacao, 'local_trabalho', ['label'=>'Local de trabalho']);
                        echo Select2::widget([
                            'name' => 'Lotacao[' .$i. '][local_trabalho]',
                            'data' => $arrayLocal,
                            'options' => ['placeholder' => $lotacao->local_trabalho['NOME']],
                            'pluginOptions' => [
                                'allowClear' => false,
                                'minimumInputLength' => 2,
                            ],
                        ]);
                    ?>
                </div>
            </div>
            <?php $idsMedicos = [129,352,620,748,749,750,889,908,1111,1255,1478,1746,1874,1875,1876,2015,2034,2237,2382,2605,2873,3001,3002,3003,3142,3161,3364,3509,3732,4000,4128,4129,4130,4269,4288,4491,4637,4860,5128,5256,5257,5258,5397,5416,5620,5796,6019,6287,6415,6416,6417,6556,6575,6778]; ?>
            <?php if(in_array($lotacao->funcao['id'], $idsMedicos)) : ?>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <?php 
                            echo Html::activeLabel($lotacao, 'atividade', ['label'=>'Atividade']);
                            echo Select2::widget([
                            //    'model' => $lotacao,
                            //    'attribute' => '[' .$i. ']divisao',
                                'name' => 'Lotacao[' .$i. '][atividade]',
                                'data' => $atividades,
                                'options' => ['placeholder' => $lotacao->atividade['NOME']],
                                'pluginOptions' => [
                                    'allowClear' => false,
                                    //'minimumInputLength' => 2,
                                ],
                            ]);
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php $i++; endforeach; ?>

    </fieldset>
    
    <?= var_dump($model->divisao->divisoesEmpresa); ?>

    <?= $form->field($model, 'MATRICULA')->textInput() ?>

    <?= $form->field($model, 'EMPRESA_COD')->textInput() ?>

    <?= $form->field($model, 'divisao_id')->textInput() ?>

    <?= $form->field($model, 'subdivisao_id')->textInput() ?>

    <?= $form->field($model, 'local_trabalho_id')->textInput() ?>

    <?= $form->field($model, 'cargo_id')->textInput() ?>

    <?= $form->field($model, 'atividade_id')->textInput() ?>

    <?= $form->field($model, 'DIVISAO_COD')->textInput() ?>

    <?= $form->field($model, 'SUBDIVISAO_COD')->textInput() ?>

    <?= $form->field($model, 'LOCAL_TRABALHO_COD')->textInput() ?>

    <?= $form->field($model, 'CARGOATUAL_COD')->textInput() ?>

    <?= $form->field($model, 'ATIVIDADE_COD')->textInput() ?>

    <?= $form->field($model, 'VINCULO')->textInput() ?>

    <?= $form->field($model, 'CONTRATO')->textInput() ?>

    <?= $form->field($model, 'JORNADA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CARGOINICIAL')->textInput() ?>

    <?= $form->field($model, 'SITUACAO')->textInput() ?>

    <?= $form->field($model, 'CLT_OU_ESTATUTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTNOMEACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTPOSSE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SUBDIVISAOITEM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIVEL_CARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SITUACAO_FUNCIONAL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
