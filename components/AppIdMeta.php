<?php namespace Alxy\Facebook\Components;

use Cms\Classes\ComponentBase;
use HTML;
use Alxy\Facebook\Models\Settings;

class AppIdMeta extends ComponentBase
{

    public $appId;

    public function componentDetails()
    {
        return [
            'name'        => 'App id meta tag',
            'description' => 'Prints the fb:app_id meta tag.'
        ];
    }

    public function onRun() {
        $this->appId = Settings::get('app_id');
    }

}
