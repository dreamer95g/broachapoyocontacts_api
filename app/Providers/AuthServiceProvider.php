<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',

        // NOMENCLADORES
        'App\Models\Nomenclators\Role' => 'App\Policies\Nomenclators\RolePolicy',
        'App\Models\Nomenclators\Category' => 'App\Policies\Nomenclators\CategoryPolicy',

        //MODELS
        'App\Models\Contact' => 'App\Policies\ContactPolicy',
        'App\Models\ForeignMission' => 'App\Policies\ForeignMissionPolicy',

        'App\Models\Organization' => 'App\Policies\OrganizationPolicy',

        // IMAGE
        'App\Models\Media\Image' => 'App\Policies\Media\ImagePolicy',

        //USER
        'App\Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();

        //esto da sus bateos hay q dejarlo comentareado
        //en deploy ejecutar
        //passport:keys o passport:install hasta que coja
        //Passport::loadKeysFrom(__DIR__ . '/storage');
    }
}
