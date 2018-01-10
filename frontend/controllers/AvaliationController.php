<?php

namespace frontend\controllers;

use app\models\Movie;
use DeepCopy\f001\A;
use Yii;
use app\models\Avaliation;
use app\models\AvaliationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AvaliationController implements the CRUD actions for Avaliation model.
 */
class AvaliationController extends Controller
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
     * Lists all Avaliation models.
     * @param integer $id
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AvaliationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $avaliations = Avaliation::find()
            ->where(['fk_id_user' => Yii::$app->user->id])
            ->all();


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'avaliations' => $avaliations,
        ]);
    }

    /**
     * Displays a single Avaliation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $avaliation = Avaliation::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'avaliation' => $avaliation,
        ]);
    }

    /**
     * Creates a new Avaliation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Avaliation();

        $model->fk_id_user = Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Avaliation model.
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
     * Deletes an existing Avaliation model.
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
     * Finds the Avaliation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Avaliation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Avaliation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
