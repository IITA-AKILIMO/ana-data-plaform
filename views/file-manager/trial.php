<?= alexantr\elfinder\ElFinder::widget([
    'connectorRoute' => ['file-manager/connector'],
    'settings' => [
        'height' => 640,
//        'uploadMaxSize' => '1M',
        'onlyMimesf' => [
            'image/png'
        ]
    ],
    'buttonNoConflict' => true,
]) ?>


<!--?= alexantr\elfinder\InputFile::widget([
    'name' => 'attributeName',
    'clientRoute' => 'file-manager/input',
    'filter' => ['image'],
    'preview' => function ($value) {
        return yii\helpers\Html::img($value, ['width' => 200]);
    },
]) ?-->
