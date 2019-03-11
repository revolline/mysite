<?php
/**
 * Created by PhpStorm.
 * User: Coder
 * Date: 06.03.2019
 * Time: 13:57
 */

namespace frontend\modules\service\controllers;

use frontend\controllers\BaseController;

class DeveloperWebController extends BaseController
{

    public function init()
    {
        $this->view->registerJs("ServiceCtrl.actionIndex();", \yii\web\View::POS_END, 'actionIndex');
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}