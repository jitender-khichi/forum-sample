<?php

class ThreadController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'create', 'update', 'reply'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {

        $criteria = array(
            'alias' => 'ThreadReplies',
            'select' => array('*'),
            'order' => 'reply_created  desc',
            'condition' => 'reply_is_active = "1" and reply_is_delete = "0" and thread_id = ' . $id,
            'group' => 'ThreadReplies.reply_id'
        );
        $dataProvider = new CActiveDataProvider('ThreadReplies', array(
            'criteria' => $criteria,
            'pagination' => [
                'pageSize' => 5,
            ],
        ));
        //$dataProvider = new CActiveDataProvider('ThreadMaster');
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new ThreadMaster;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ThreadMaster'])) {
            $model->attributes = $_POST['ThreadMaster'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->thread_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionReply($id) {
        $model = new ThreadReplies;

        // uncomment the following code to enable ajax-based validation
        /*
          if(isset($_POST['ajax']) && $_POST['ajax']==='thread-replies-_thread_reply-form')
          {
          echo CActiveForm::validate($model);
          Yii::app()->end();
          }
         */

        if (isset($_POST['ThreadReplies'])) {
            $model->attributes = $_POST['ThreadReplies'];
            $model->setAttribute("thread_id",$id);
           // echo '<pre>'; print_r($model); exit;
            if ($model->validate()) {
                if ($model->save())
                $this->redirect(array('view', 'id' => $id));
                return;
            }
        }
        $this->render('reply', array('model' => $model,'id'=>$id));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ThreadMaster'])) {
            $model->attributes = $_POST['ThreadMaster'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->thread_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $criteria = array(
            'alias' => 'thread',
            'select' => array('thread_title', 'thread_description'),
            'order' => 'thread_created  desc',
            'with' => array('threadReplies' => array(
                    'alias' => 'rep',
                    'select' => array('rep.thread_id'),
                )),
            'condition' => 'thread_is_active = "1" and thread_is_delete = "0"',
            'group' => 'thread.thread_id'
        );
        $dataProvider = new CActiveDataProvider('ThreadMaster', array(
            'criteria' => $criteria,
            'pagination' => [
                'pageSize' => 5,
            ],
        ));
        //$dataProvider = new CActiveDataProvider('ThreadMaster');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ThreadMaster('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ThreadMaster']))
            $model->attributes = $_GET['ThreadMaster'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ThreadMaster the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ThreadMaster::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ThreadMaster $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'thread-master-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
