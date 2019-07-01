<?php

namespace App\Providers;

class CustomPostTypeServiceProvider
{
    protected $posttypes = [
        \App\Quote::class,
        \App\Biography::class,
        \App\Spaces\Media::class,
        \App\Spaces\Bibliography::class,
        \App\Spaces\Bibliohemerography::class,
        \App\Spaces\Work::class,
        \App\Spaces\Correspondence::class,
        \App\Spaces\Conversation::class,
        \App\Spaces\Invention::class,
        //\App\Chronology::class,
        \App\Photo::class,

    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach($this->posttypes as $file){
            $file::registerPostype();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
