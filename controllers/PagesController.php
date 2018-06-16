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
 * Class PagesController
 * @package app\controllers
 * @author Marylyn Lajato <eeyaotajal@gmail,com>
 * @version 1.0
 * @since June 16, 2018
 */
class PagesController extends Controller
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
     * Displays homepage.
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'default';
        return $this->render('index');
    }

    /**
     * Displays about page.
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'default';
        return $this->render('about');
    }

    /**
     * Displays profile index page.
     * @return string
     */
    public function actionProfile()
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
     * Displays FAQ page.
     * @return string
     */
    public function actionFaq()
    {
        $this->layout = 'default';
        return $this->render('faq');
    }

    /**
     * Displays Contact Us Page.
     * @return string
     */
    public function actionContactUs()
    {
        $this->layout = 'default';
        return $this->render('contact-us');
    }

    /**
     * Login action.
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     * @return string|Response
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
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

