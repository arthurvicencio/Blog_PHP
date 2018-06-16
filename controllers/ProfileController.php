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
 * Class ProfileController
 * @package app\controllers
 * @author Marylyn Lajato <eeyaotajal@gmail,com>
 * @version 1.0
 * @since June 16, 2018
 */
class ProfileController extends Controller
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
        $aListOfBloggers = [
            [
                'name' => 'Kurl Managat',
                'position_label' => 'Blogger (Professional)',
                'description' => 'This is a sample text just to fill this sample content all over again.  This is a sample text just to fill this sample content all over again....'
            ],
            [
                'name' => 'Damien Watchen',
                'position_label' => 'Accountant (Professional)',
                'description' => 'This is a sample text just to fill this sample content all over again.  This is a sample text just to fill this sample content all over again....'
            ],
            [
                'name' => 'Wilson Palomona',
                'position_label' => 'Blogger (Working Student)',
                'description' => 'This is a sample text just to fill this sample content all over again.  This is a sample text just to fill this sample content all over again....'
            ],
            [
                'name' => 'Arthur Vicencio',
                'position_label' => 'Developer (Professional)',
                'description' => 'This is a sample text just to fill this sample content all over again.  This is a sample text just to fill this sample content all over again....'
            ]
        ];

        $aAssignViewData = [
            'sSelectedMenuItem' => '',
            'aListOfBloggers' => $aListOfBloggers
        ];

        $this->layout = 'default';
        return $this->render('profile', $aAssignViewData);
    }

    /**
     * Display specific profile info
     * @return string
     */
    public function actionView()
    {
        $sBloggerName = Yii::$app->getRequest()->getQueryParam('name');
        $aAssignData = [
            'sBloggerName' => $sBloggerName
        ];

        $this->layout = 'default';
        return $this->render('profile/view', $aAssignData);
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

