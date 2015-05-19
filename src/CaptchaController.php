<?php namespace Mews\Captcha;

use Illuminate\Routing\Controller as BaseController;

class CaptchaController extends BaseController
{

    public function draw($config = 'default')
    {
        return app('captcha')->create($config);
    }
}
