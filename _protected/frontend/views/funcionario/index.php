<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use kartik\widgets\Typeahead;

$this->title = 'Atualização de cadastro funcional';
?>
<div class="row">
    <div class="col-md-12" style="margin-bottom: 30px">
            <?= Html::beginForm('', 'post', [
                'id' => 'form-funcionario', 
                'class' => 'form-inline',
                'enableClientValidation' => true,
                'enableAjaxValidation' => true,
            ]); ?>

            <?= Typeahead::widget([
                'id' => 'funcionario_id',
                'name' => 'funcionario_id',
                'options' => ['placeholder' => 'Digite o nome ou matrícula do servidor...', 'style' => 'width:100%', 'class' => 'input-lg', 'selected' => 200],
                'scrollable' => true,
                'pluginOptions' => ['highlight'=>true],
                'dataset' => [
                    [
                        'local' => $data,
                        'limit' => 10
                    ],
                ],
                'pluginEvents' => [
                    //evento disparado ao selecionar o item
                    "typeahead:selected" => "function(obj, item) { 
                        $.ajax({
                           url: 'funcionario/carrega-funcionario',
                           type: 'post',
                           data: { funcionario: item },
                           success: function (data) {
                                $('#content').html(data);
                           }
                        });
                        return true; }",
                    /* evento disparado ao digitar qqer valor
                    "typeahead:render" => "function() { 
                        console.log('Whatever...'); }",
                     * 
                     */
                ],
            ]);
            ?>
    </div>
    <?= Html::endForm() ?>
</div>
<div class="row">
    <div id="content" class="col-md-12"></div>
</div>