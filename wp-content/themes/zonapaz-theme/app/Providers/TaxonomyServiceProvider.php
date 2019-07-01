<?php

namespace App\Providers;

class TaxonomyServiceProvider
{
    protected $taxonomies = [
        // Filtros por espacio
        \App\Taxonomies\Spaces\Media\MediaAuthor::class,
        \App\Taxonomies\Spaces\Media\MediaYear::class,
        \App\Taxonomies\Spaces\Media\MediaTypology::class,
        \App\Taxonomies\Spaces\Media\MediaPlace::class,
        \App\Taxonomies\Spaces\Media\MediaPeople::class,
        \App\Taxonomies\Spaces\Media\MediaTopics::class,
        \App\Taxonomies\Spaces\Bibliography\BibliographyAuthor::class,
        \App\Taxonomies\Spaces\Bibliography\BibliographyTypology::class,
        \App\Taxonomies\Spaces\Conversation\ConversationAuthor::class,
        \App\Taxonomies\Spaces\Conversation\ConversationTypology::class,
        \App\Taxonomies\Spaces\Correspondence\CorrespondenceAuthor::class,
        \App\Taxonomies\Spaces\Correspondence\CorrespondenceTypology::class,
        \App\Taxonomies\Spaces\Correspondence\CorrespondencePlace::class,
        \App\Taxonomies\Spaces\Invention\InventionAuthor::class,
        \App\Taxonomies\Spaces\Invention\InventionTypology::class,
        \App\Taxonomies\Spaces\Work\WorkAuthor::class,
        \App\Taxonomies\Spaces\Work\WorkTypology::class,
        // Filtros globales
        \App\Taxonomies\Theme::class,
        // Taxonomias de otros postypes
        \App\Taxonomies\ChronologyLustrum::class,
        \App\Taxonomies\PhotoAuthor::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach($this->taxonomies as $taxonomy){
            $taxonomy::registerTaxonomy();
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
