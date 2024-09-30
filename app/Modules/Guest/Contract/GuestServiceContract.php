<?php

namespace App\Modules\Guest\Contract;

use App\Modules\Guest\Model\Guest;
use Illuminate\Database\Eloquent\Collection;

interface GuestServiceContract
{
    public function index(): Collection;

    public function show(int $id): Guest;
}
