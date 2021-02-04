<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /*
    * Regist custom helper
    */
    public function register()
    {
        foreach (glob(app_path().'/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
