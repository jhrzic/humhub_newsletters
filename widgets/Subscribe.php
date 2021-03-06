<?php

namespace humhub\modules\newsletters\widgets;

use humhub\components\Widget;

class Subscribe extends Widget
{
    public $newsletter;
    public $subscription;

    public function run()
    {
        return $this->render('subscribe', array(
            'newsletter' => $this->newsletter,
            'subscription' => $this->subscription,
        ));
    }
}

?>
