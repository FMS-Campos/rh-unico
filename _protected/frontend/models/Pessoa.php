<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoa".
 *
 * @property integer $id
 * @property string $CPF
 * @property string $NOME
 * @property string $SEXO
 * @property integer $NACIONALIDADE
 * @property string $ANOCHEGADA
 * @property string $DTNASCIMENTO
 * @property integer $INSTRUCAO
 * @property integer $ESTADOCIVIL
 * @property string $NOMEPAI
 * @property string $NOMEMAE
 * @property string $CEP
 * @property string $ENDERECO
 * @property string $NUMERO
 * @property string $BAIRRO
 * @property string $COMPL
 * @property string $CIDADE
 * @property string $UF
 * @property string $TELEFONE
 * @property string $PIS
 * @property string $RG
 * @property string $CTPS
 * @property string $SERIE
 * @property string $UFCTPS
 * @property string $CNH_DTEXPEDIDA
 * @property string $CNH_NUMERO
 * @property string $CNH_UF
 * @property string $CNH_DTVALIDADE
 * @property string $ELEITOR
 * @property string $ZONAELEITORAL
 * @property string $SECAOELEITORAL
 * @property string $RESERVISTA
 * @property string $DTEMISSAOCTPS
 * @property string $RGORGAOEMISSOR
 * @property string $UFRG
 * @property string $ORGAOSIPREV
 * @property string $RN_CIDADE
 * @property string $RN_UF
 * @property string $DTRG
 * @property string $CATEGORIA_RESERVISTA
 * @property string $COROLHOS
 * @property string $CORCABELOS
 * @property string $CUTIS
 * @property string $DEFICIENCIAFISICA
 * @property string $ALERGIAMEDICAMENTOS
 * @property string $ALTURA
 * @property string $PESO
 * @property string $TIPOSANGUE
 * @property string $DOADOR
 * @property string $SINAIS
 * @property string $RN_REGISTRO_NASCIMENTO
 * @property string $RN_LIVRO
 * @property string $RN_FOLHA
 * @property string $LETRA_SEXO
 * @property string $CELULAR
 * @property string $DTTERMINO
 * @property integer $CATFUNCIONAL
 * @property string $CNH_CATEGORIA
 * @property string $EMAIL
 * @property string $SENHAWEB
 * @property string $TSREGISTROS_RESCINDIDOS
 * @property string $RN_CIDADE_TCEMS
 * @property string $NUMEROPROFISSIONAL
 * @property string $DOCADM_TIPODOC
 * @property string $LEGADM_TIPODOC
 * @property string $LEGADM_NUMERO
 * @property string $LEGADM_DATA
 * @property string $CPF_PAI
 * @property string $CPF_MAE
 * @property string $DOCUMENTO_NUMERO
 * @property string $DOCUMENTO_TIPO
 * @property string $DOCUMENTO_UF
 * @property string $REGISTRO_UNICO_CARTORIO
 * @property integer $REGISTROINT
 * @property string $PENSIONISTA_PARIDADE
 * @property string $UFELEITOR
 * @property integer $RACA
 * @property string $RESERVISTA_DTEXPEDICAO
 *
 * @property Funcionario[] $funcionarios
 */
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CPF', 'NACIONALIDADE', 'INSTRUCAO', 'ESTADOCIVIL', 'CATFUNCIONAL', 'REGISTROINT', 'RACA'], 'integer'],
            [['DTNASCIMENTO', 'DTRG'], 'safe'],
            [['NOME', 'NOMEPAI', 'NOMEMAE', 'NUMERO', 'PIS', 'EMAIL'], 'string', 'max' => 60],
            [['SEXO', 'ANOCHEGADA', 'UF', 'UFCTPS', 'CNH_DTEXPEDIDA', 'CNH_UF', 'CNH_DTVALIDADE', 'DTEMISSAOCTPS', 'RGORGAOEMISSOR', 'UFRG', 'ORGAOSIPREV', 'RN_UF', 'CATEGORIA_RESERVISTA', 'COROLHOS', 'CORCABELOS', 'CUTIS', 'DEFICIENCIAFISICA', 'ALERGIAMEDICAMENTOS', 'ALTURA', 'PESO', 'TIPOSANGUE', 'DOADOR', 'SINAIS', 'RN_LIVRO', 'RN_FOLHA', 'LETRA_SEXO', 'DTTERMINO', 'CNH_CATEGORIA', 'SENHAWEB', 'TSREGISTROS_RESCINDIDOS', 'RN_CIDADE_TCEMS', 'NUMEROPROFISSIONAL', 'DOCADM_TIPODOC', 'LEGADM_TIPODOC', 'LEGADM_NUMERO', 'LEGADM_DATA', 'DOCUMENTO_NUMERO', 'DOCUMENTO_TIPO', 'DOCUMENTO_UF', 'REGISTRO_UNICO_CARTORIO', 'PENSIONISTA_PARIDADE', 'UFELEITOR', 'RESERVISTA_DTEXPEDICAO'], 'string', 'max' => 10],
            [['CEP'], 'string', 'max' => 8],
            [['ENDERECO'], 'string', 'max' => 70],
            [['BAIRRO'], 'string', 'max' => 62],
            [['COMPL', 'TELEFONE', 'RESERVISTA'], 'string', 'max' => 20],
            [['CIDADE', 'RN_CIDADE'], 'string', 'max' => 30],
            [['RG', 'CNH_NUMERO', 'RN_REGISTRO_NASCIMENTO'], 'string', 'max' => 15],
            [['CTPS'], 'string', 'max' => 7],
            [['SERIE', 'SECAOELEITORAL'], 'string', 'max' => 5],
            [['ELEITOR'], 'string', 'max' => 16],
            [['ZONAELEITORAL'], 'string', 'max' => 3],
            [['CELULAR', 'CPF_PAI', 'CPF_MAE'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'SEXO' => 'Sexo',
            'NACIONALIDADE' => 'Nacionalidade',
            'ANOCHEGADA' => 'Anochegada',
            'DTNASCIMENTO' => 'Dtnascimento',
            'INSTRUCAO' => 'Instrucao',
            'ESTADOCIVIL' => 'Estadocivil',
            'NOMEPAI' => 'Nomepai',
            'NOMEMAE' => 'Nomemae',
            'CEP' => 'Cep',
            'ENDERECO' => 'Endereco',
            'NUMERO' => 'Numero',
            'BAIRRO' => 'Bairro',
            'COMPL' => 'Compl',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'TELEFONE' => 'Telefone',
            'PIS' => 'Pis',
            'RG' => 'Rg',
            'CTPS' => 'Ctps',
            'SERIE' => 'Serie',
            'UFCTPS' => 'Ufctps',
            'CNH_DTEXPEDIDA' => 'Cnh  Dtexpedida',
            'CNH_NUMERO' => 'Cnh  Numero',
            'CNH_UF' => 'Cnh  Uf',
            'CNH_DTVALIDADE' => 'Cnh  Dtvalidade',
            'ELEITOR' => 'Eleitor',
            'ZONAELEITORAL' => 'Zonaeleitoral',
            'SECAOELEITORAL' => 'Secaoeleitoral',
            'RESERVISTA' => 'Reservista',
            'DTEMISSAOCTPS' => 'Dtemissaoctps',
            'RGORGAOEMISSOR' => 'Rgorgaoemissor',
            'UFRG' => 'Ufrg',
            'ORGAOSIPREV' => 'Orgaosiprev',
            'RN_CIDADE' => 'Rn  Cidade',
            'RN_UF' => 'Rn  Uf',
            'DTRG' => 'Dtrg',
            'CATEGORIA_RESERVISTA' => 'Categoria  Reservista',
            'COROLHOS' => 'Corolhos',
            'CORCABELOS' => 'Corcabelos',
            'CUTIS' => 'Cutis',
            'DEFICIENCIAFISICA' => 'Deficienciafisica',
            'ALERGIAMEDICAMENTOS' => 'Alergiamedicamentos',
            'ALTURA' => 'Altura',
            'PESO' => 'Peso',
            'TIPOSANGUE' => 'Tiposangue',
            'DOADOR' => 'Doador',
            'SINAIS' => 'Sinais',
            'RN_REGISTRO_NASCIMENTO' => 'Rn  Registro  Nascimento',
            'RN_LIVRO' => 'Rn  Livro',
            'RN_FOLHA' => 'Rn  Folha',
            'LETRA_SEXO' => 'Letra  Sexo',
            'CELULAR' => 'Celular',
            'DTTERMINO' => 'Dttermino',
            'CATFUNCIONAL' => 'Catfuncional',
            'CNH_CATEGORIA' => 'Cnh  Categoria',
            'EMAIL' => 'Email',
            'SENHAWEB' => 'Senhaweb',
            'TSREGISTROS_RESCINDIDOS' => 'Tsregistros  Rescindidos',
            'RN_CIDADE_TCEMS' => 'Rn  Cidade  Tcems',
            'NUMEROPROFISSIONAL' => 'Numeroprofissional',
            'DOCADM_TIPODOC' => 'Docadm  Tipodoc',
            'LEGADM_TIPODOC' => 'Legadm  Tipodoc',
            'LEGADM_NUMERO' => 'Legadm  Numero',
            'LEGADM_DATA' => 'Legadm  Data',
            'CPF_PAI' => 'Cpf  Pai',
            'CPF_MAE' => 'Cpf  Mae',
            'DOCUMENTO_NUMERO' => 'Documento  Numero',
            'DOCUMENTO_TIPO' => 'Documento  Tipo',
            'DOCUMENTO_UF' => 'Documento  Uf',
            'REGISTRO_UNICO_CARTORIO' => 'Registro  Unico  Cartorio',
            'REGISTROINT' => 'Registroint',
            'PENSIONISTA_PARIDADE' => 'Pensionista  Paridade',
            'UFELEITOR' => 'Ufeleitor',
            'RACA' => 'Raca',
            'RESERVISTA_DTEXPEDICAO' => 'Reservista  Dtexpedicao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['pessoa_id' => 'id']);
    }
}
