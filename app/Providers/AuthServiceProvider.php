<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD

use App\Models\Articles;
use App\Models\User;
use App\Policies\ArticlePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Gate;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        Articles::class =>ArticlePolicy::class
=======
        //
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        $this->registerPolicies();
        Gate::define('deleta-artigo', function(User $user, $permission){

            return $user->permission === $permission;

        });
=======
        //
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5
    }
}
