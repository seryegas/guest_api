<?php
namespace App\Modules\Guest\Tests\Feature\Api;

use App\Modules\Guest\Model\Guest;
use Tests\TestCase;

class GuestControllerTest extends TestCase
{
    public function testIndex()
    {
        $guest = Guest::factory()->create();
        dd($guest);
    }
}
