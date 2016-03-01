<?php
namespace frontend\components;

use yii\base\Component;
use Yii;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subject, $text, $emailFrom='slayer_dead@rambler.ru',$nameFrom=''){
        if(Yii::$app->mail->compose()
            ->setFrom(['igorivchenko@inbox.ru' => 'Advert'])
            ->setTo([$emailFrom => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()){
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function notifyAdmin($event){

    }
}