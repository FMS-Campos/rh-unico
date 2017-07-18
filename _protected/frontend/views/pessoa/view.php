<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-view">

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
            'CPF',
            'NOME',
            'SEXO',
            'NACIONALIDADE',
            'ANOCHEGADA',
            'DTNASCIMENTO',
            'INSTRUCAO',
            'ESTADOCIVIL',
            'NOMEPAI',
            'NOMEMAE',
            'CEP',
            'ENDERECO',
            'NUMERO',
            'BAIRRO',
            'COMPL',
            'CIDADE',
            'UF',
            'TELEFONE',
            'PIS',
            'RG',
            'CTPS',
            'SERIE',
            'UFCTPS',
            'CNH_DTEXPEDIDA',
            'CNH_NUMERO',
            'CNH_UF',
            'CNH_DTVALIDADE',
            'ELEITOR',
            'ZONAELEITORAL',
            'SECAOELEITORAL',
            'RESERVISTA',
            'DTEMISSAOCTPS',
            'RGORGAOEMISSOR',
            'UFRG',
            'ORGAOSIPREV',
            'RN_CIDADE',
            'RN_UF',
            'DTRG',
            'CATEGORIA_RESERVISTA',
            'COROLHOS',
            'CORCABELOS',
            'CUTIS',
            'DEFICIENCIAFISICA',
            'ALERGIAMEDICAMENTOS',
            'ALTURA',
            'PESO',
            'TIPOSANGUE',
            'DOADOR',
            'SINAIS',
            'RN_REGISTRO_NASCIMENTO',
            'RN_LIVRO',
            'RN_FOLHA',
            'LETRA_SEXO',
            'CELULAR',
            'DTTERMINO',
            'CATFUNCIONAL',
            'CNH_CATEGORIA',
            'EMAIL:email',
            'SENHAWEB',
            'TSREGISTROS_RESCINDIDOS',
            'RN_CIDADE_TCEMS',
            'NUMEROPROFISSIONAL',
            'DOCADM_TIPODOC',
            'LEGADM_TIPODOC',
            'LEGADM_NUMERO',
            'LEGADM_DATA',
            'CPF_PAI',
            'CPF_MAE',
            'DOCUMENTO_NUMERO',
            'DOCUMENTO_TIPO',
            'DOCUMENTO_UF',
            'REGISTRO_UNICO_CARTORIO',
            'REGISTROINT',
            'PENSIONISTA_PARIDADE',
            'UFELEITOR',
            'RACA',
            'RESERVISTA_DTEXPEDICAO',
        ],
    ]) ?>

</div>
