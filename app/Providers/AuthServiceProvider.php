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
        'App\Models\Nomenclators\Agency' => 'App\Policies\Nomenclators\AgencyPolicy',
        'App\Models\Nomenclators\Category' => 'App\Policies\Nomenclators\CategoryPolicy',
        'App\Models\Nomenclators\TrackingType' => 'App\Policies\Nomenclators\TrackingTypePolicy',

        //MODELS
        'App\Models\Contact' => 'App\Policies\ContactPolicy',
        'App\Models\Missionary' => 'App\Policies\MissionaryPolicy',
        'App\Models\ForeignMission' => 'App\Policies\ForeignMissionPolicy',
        'App\Models\Sponsor' => 'App\Policies\SponsorPolicy',
        'App\Models\Offering' => 'App\Policies\OfferingPolicy',
        'App\Models\RelatedMinistry' => 'App\Policies\RelatedMinistryPolicy',

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

        // Passport::loadKeysFrom(__DIR__ . '/../storage/');
    }
}
