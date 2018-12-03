<?php 

namespace MarkVilludo\AdminLte;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MarkVilludo\AdminLte\AdminLte;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {      
        
        //publish views 
        $this->publishes([
           __DIR__.'/views' => resource_path('/views'),
        ],'views');

        //publish assets in public folder for the css and js plugins
         $this->publishes([
           __DIR__.'/../assets' => public_path('/assets'),
        ],'assets');
        //end
     
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    
    }

}
