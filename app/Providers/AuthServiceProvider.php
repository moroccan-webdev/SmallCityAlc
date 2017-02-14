<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Roleplay;
use App\Policies\RoleplayPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Worksheet' => 'App\Policies\WorksheetPolicy',
        'App\Roleplay' => 'App\Policies\RoleplayPolicy',
        'App\Feedback' => 'App\Policies\FeedbackPolicy',
        'App\Contact' => 'App\Policies\ContactPolicy',
        //Worksheet::class => WorksheetPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
