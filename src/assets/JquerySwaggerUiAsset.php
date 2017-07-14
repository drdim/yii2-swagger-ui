<?php

namespace Drdim\Yii\Swagger;

use yii\web\AssetBundle;

class JquerySwaggerUiAsset extends AssetBundle
{
    public $sourcePath = '@bower/swagger-ui/dist';

    public $js = [
        'lib/jquery-1.8.0.min.js'
    ];
}
