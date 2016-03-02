<?php

namespace app\modules\cabinet;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\cabinet\controllers';

    public function init()
    {
        parent::init();

        $this->setLayoutPath('@frontend/views/layouts');

        // custom initialization code goes here
    }
}
