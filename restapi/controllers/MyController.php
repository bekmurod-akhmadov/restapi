<?php


namespace restapi\controllers;


use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\web\Response;

class MyController extends ActiveController
{
    public $serializer = [

        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class,
            'cors' => [
                'Origin' => ['http://mini-crud'],

            ]
        ];

        $behaviors['formats'] = [

            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

//        $behaviors['authenticator'] = [
//            'class' => HttpBasicAuth::class,
//        ];

        return $behaviors;
    }

}