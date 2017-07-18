<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pessoa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'CPF',
            'NOME',
            'SEXO',
            'NACIONALIDADE',
            // 'ANOCHEGADA',
            // 'DTNASCIMENTO',
            // 'INSTRUCAO',
            // 'ESTADOCIVIL',
            // 'NOMEPAI',
            // 'NOMEMAE',
            // 'CEP',
            // 'ENDERECO',
            // 'NUMERO',
            // 'BAIRRO',
            // 'COMPL',
            // 'CIDADE',
            // 'UF',
            // 'TELEFONE',
            // 'PIS',
            // 'RG',
            // 'CTPS',
            // 'SERIE',
            // 'UFCTPS',
            // 'CNH_DTEXPEDIDA',
            // 'CNH_NUMERO',
            // 'CNH_UF',
            // 'CNH_DTVALIDADE',
            // 'ELEITOR',
            // 'ZONAELEITORAL',
            // 'SECAOELEITORAL',
            // 'RESERVISTA',
            // 'DTEMISSAOCTPS',
            // 'RGORGAOEMISSOR',
            // 'UFRG',
            // 'ORGAOSIPREV',
            // 'RN_CIDADE',
            // 'RN_UF',
            // 'DTRG',
            // 'CATEGORIA_RESERVISTA',
            // 'COROLHOS',
            // 'CORCABELOS',
            // 'CUTIS',
            // 'DEFICIENCIAFISICA',
            // 'ALERGIAMEDICAMENTOS',
            // 'ALTURA',
            // 'PESO',
            // 'TIPOSANGUE',
            // 'DOADOR',
            // 'SINAIS',
            // 'RN_REGISTRO_NASCIMENTO',
            // 'RN_LIVRO',
            // 'RN_FOLHA',
            // 'LETRA_SEXO',
            // 'CELULAR',
            // 'DTTERMINO',
            // 'CATFUNCIONAL',
            // 'CNH_CATEGORIA',
            // 'EMAIL:email',
            // 'SENHAWEB',
            // 'TSREGISTROS_RESCINDIDOS',
            // 'RN_CIDADE_TCEMS',
            // 'NUMEROPROFISSIONAL',
            // 'DOCADM_TIPODOC',
            // 'LEGADM_TIPODOC',
            // 'LEGADM_NUMERO',
            // 'LEGADM_DATA',
            // 'CPF_PAI',
            // 'CPF_MAE',
            // 'DOCUMENTO_NUMERO',
            // 'DOCUMENTO_TIPO',
            // 'DOCUMENTO_UF',
            // 'REGISTRO_UNICO_CARTORIO',
            // 'REGISTROINT',
            // 'PENSIONISTA_PARIDADE',
            // 'UFELEITOR',
            // 'RACA',
            // 'RESERVISTA_DTEXPEDICAO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
