<?php

namespace App\Modules\Guest\Service;

use App\Modules\Guest\Contract\GuestServiceContract;
use App\Modules\Guest\Model\Guest;
use Illuminate\Database\Eloquent\Collection;

class GuestService implements GuestServiceContract
{
    public function index(): Collection
    {
        return Guest::all();
    }

    public function show(int $id): Guest
    {
        return Guest::query()->findOrFail($id);
    }

    private function validate()
    {
    }
}
