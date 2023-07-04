<?php

namespace app\controllers;

use alexantr\elfinder\CKEditorAction;
use alexantr\elfinder\ConnectorAction;
use alexantr\elfinder\InputFileAction;
use alexantr\elfinder\TinyMCEAction;
use Yii;

class FileManagerController extends \app\common\controllers\BaseWebController
{

    public function actions()
    {
        return [
            'connector' => [
                'class' => ConnectorAction::class,
                'options' => [
                    'rootsh' => [
                        [
                            'driver' => 'LocalFileSystem',
                            'path' => Yii::getAlias('@webroot') . DIRECTORY_SEPARATOR . 'uploads',
                            'URL' => Yii::getAlias('@web') . '/uploads/',
                            'tmbPath' => '.tmb',
                            'utf8fix' => true,
                            'tmbCrop' => false,
                            'tmbBgColor' => 'transparent',
                            'accessControl' => 'access',
                            'acceptedName' => '/^[^\.].*$/',
                            'disabled' => ['extract', 'archive', 'mkdir', 'copy'],
                            'tmbSize' => 128,
                            'attributes' => [
                                [
                                    'pattern' => '/^\/icons$/',
                                    'read' => true,
                                    'write' => false
                                ],
                                [
                                    'pattern' => '/\.json/',
                                    'read' => true,
                                    'write' => false
                                ],
                                [
                                    'pattern' => '/\.csv/',
                                    'read' => true,
                                    'write' => false
                                ]
                            ],
                            'uploadDeny' => ['text/php']
                        ]
                    ],
                    'roots' => [
                        [
                            'driver' => 'LocalFileSystem',
                            'path' => Yii::getAlias('@webroot') . DIRECTORY_SEPARATOR . 'uploads',
                            'URL' => Yii::getAlias('@web') . '/uploads/',
                            'mimeDetect' => 'internal',
                            'uploadAllow' => ['text/csv', 'application/json', 'image/png', 'image/jpeg'],
                            'uploadOrder' => ['allow', 'deny'],
                            'uploadMaxSize' => '20M',
//                            'copyOverwrite' => false,
//                            'allowShortcuts' => false,
//                            'dragUploadAllow' => true,
//                            'imgLib' => 'gd',
                            'disabled' => ['cut', 'copy', 'paste', 'delete', 'mkdir', 'empty', 'hide'],
                            'commands' => ['upload'],
                            'defaults' => ['read' => true, 'write' => false, 'locked' => true],
                            'accessControl' => function ($attr, $path) {
                                // hide files/folders which begins with dot
                                return (str_starts_with(basename($path), '.')) ?
                                    !($attr == 'read' || $attr == 'write') :
                                    null;
                            },
                        ],
                    ],
                ],
            ],
            'input' => [
                'class' => InputFileAction::class,
                'connectorRoute' => 'connector',
            ],
            'ckeditor' => [
                'class' => CKEditorAction::class,
                'connectorRoute' => 'connector',
            ],
            'tinymce' => [
                'class' => TinyMCEAction::class,
                'connectorRoute' => 'connector',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render(view: 'trial');
    }
}
