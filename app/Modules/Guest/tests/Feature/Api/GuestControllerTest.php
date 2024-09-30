<?php
namespace App\Modules\Guest\Tests\Feature\Api;

use App\Modules\Guest\Model\Guest;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GuestControllerTest extends TestCase
{
    use DatabaseTransactions;

    protected string $endpoint = '/api/guests';

    public function testIndex(): void
    {
        Guest::factory()->create();
        Guest::factory()->create();

        $response = $this->get($this->endpoint);
        $response = json_decode($response->getContent(), true);
        $this->assertCount(2, $response);
    }

    public function testShow(): void
    {
        $guest = Guest::factory()->create();

        $response = $this->get($this->endpoint . '/' . $guest->id);
        $response = json_decode($response->getContent(), true);
        $this->assertCount(8, $response);
        $this->assertEquals($guest->id, $response['id']);
        $this->assertEquals($guest->country, $response['country']);
        $this->assertEquals($guest->phone, $response['phone']);
    }

    public function testShowNotFound(): void
    {
        $response = $this->get($this->endpoint . '/122');
        $this->assertEquals(404, $response->getStatusCode());
    }
}
