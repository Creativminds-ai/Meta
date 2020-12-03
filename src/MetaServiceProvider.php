<?php

namespace Creativminds\Meta;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/meta.php' => config_path('meta.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/create_metas_table.php' => $this->getMigrationFileName(),
        ],'migrations');
    }


    public function getMigrationFileName()
    {
        $timestamp = date('Y_m_d_His');
        return database_path('migrations/'.$timestamp.'_'.'create_meta_tables.php');
    }
}
