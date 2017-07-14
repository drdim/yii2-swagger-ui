<?php

namespace Drdim\Yii\Swagger\Assets;

use yii\web\AssetBundle;

class UnderscoreAsset extends AssetBundle
{
    public $sourcePath = '@bower/components-underscore';

    public $js = [
        'underscore-min.js'
    ];
}
