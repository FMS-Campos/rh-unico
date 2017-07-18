<?php

namespace frontend\controllers;

use Yii;
use app\models\Funcionario;
use app\models\Pessoa;
use app\models\FuncionarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FuncionarioController implements the CRUD actions for Funcionario model.
 */
class FuncionarioController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Funcionario models.
     * @return mixed
     */
    public function actionIndex()
    {
       
        $query = new \yii\db\Query();
        $query->select(['concat(f.MATRICULA,"- ",UPPER(p.NOME)) nome'])
                ->from('funcionario f')
                ->leftJoin('pessoa p', 'p.id = F.pessoa_ID')
                ->where(['in', 'f.SITUACAO', [1,3,4,5]])
                ->orderBy('p.nome ASC');
        
        $command = $query->createCommand();
        $result = $command->queryAll();
        $data = \yii\helpers\ArrayHelper::getColumn($result,'nome');

        return $this->render('index', [
            'data' => $data
        ]);
    }
    
    /*
     * Rerorna os dados da substituicao para preebcher o novo pagamento
     */
    public function actionCarregaFuncionario()
    {

        // quebrando a string para pegar o id_substituicao
        $data = Yii::$app->request->post();
        $func_array = explode("-", $data['funcionario']);
        $model = Funcionario::find()
                ->where(['MATRICULA' => $func_array[0]])
                ->andWhere(['in', 'SITUACAO', [1,3,4,5]])
                ->one();
        $pessoa = Pessoa::findOne($model->pessoa_id);
        
        echo $this->renderAjax('_form', [
            'model' => $model,
            'pessoa' => $pessoa,
        ]);
                
    }

    /**
     * Displays a single Funcionario model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Funcionario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Funcionario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Funcionario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Funcionario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Funcionario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Funcionario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Funcionario::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
