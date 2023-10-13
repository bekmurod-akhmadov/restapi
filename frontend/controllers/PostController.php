<?php


namespace frontend\controllers;


use GuzzleHttp\Client;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $client = new Client();
        $response = $client->request('GET' , 'http://restapi.api/user');
        $responseBody = $response->getBody()->getContents();
        $data = json_decode($responseBody, true);

        return $this->render('index' , [
            'models' => $data
        ]);
    }

    public function actionLogin()
    {
        
    }
}