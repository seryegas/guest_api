<?php

namespace App\Modules\Guest;

use App\Modules\Guest\Contract\GuestServiceContract;
use App\Modules\Guest\Service\GuestService;

class Provider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(GuestServiceContract::class, GuestService::class);
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
