<?php


namespace restapi\controllers;


use common\models\Post;
use yii\data\ActiveDataProvider;

class PostController extends MyController
{
    public $modelClass = Post::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
    }

    public function actionIndex()
    {
        $models = Post::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $models,
            'pagination' => [
                'pageSize' => 5
            ]
        ]);

        return $dataProvider;
    }

}