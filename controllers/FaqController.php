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
 * Class FaqController
 * @package app\controllers
 * @author Marylyn Lajato <eeyaotajal@gmail,com>
 * @version 1.0
 * @since June 16, 2018
 */
class FaqController extends Controller
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
        $this->layout = 'default';
        return $this->render('faq');
    }

    /**
     * Display specific profile info
     * @return string
     */
    public function actionView()
    {
        $this->layout = 'default';
        return $this->render('faq');
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

