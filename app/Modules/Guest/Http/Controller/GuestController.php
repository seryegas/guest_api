<?php

namespace app\Modules\Guest\Http\Controller;

use App\Http\Controllers\Controller;
use App\Modules\Guest\Contract\GuestServiceContract;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function __construct(public GuestServiceContract $serviceContract)
    {
    }

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->serviceContract->index();
    }

    public function create()
    {
        //
    }

    public function store(int $id)
    {
        return $this->serviceContract->store();
    }

    public function show(string $id): \App\Modules\Guest\Model\Guest
    {
        return $this->serviceContract->show($id);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
