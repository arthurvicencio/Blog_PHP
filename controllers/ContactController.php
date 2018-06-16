<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/**
 * Class ContactController
 * @package app\controllers
 * @author Marylyn Lajato <eeyaotajal@gmail,com>
 * @version 1.0
 * @since June 16, 2018
 */
class ContactController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays profile index page
     * @return string
     */
    public function actionIndex()
    {
        $aAssignData = [
            'sSelectedMenuItem' => 'contact-us'
        ];


        $this->layout = 'default';
        return $this->render('contact-us', $aAssignData);
    }

    /**
     * Display specific profile info
     * @return string
     */
    public function actionView()
    {
        $aAssignData = [
            'sSelectedMenuItem' => 'contact-us'
        ];

        $this->layout = 'default';
        return $this->render('contact-us', $aAssignData);
    }

    /**
     * Override view path location
     * @return bool|string
     */
    public function getViewPath()
    {
        return Yii::getAlias('@app/views/site');
    }
}

