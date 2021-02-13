<?php

namespace Tests\Feature\Api;

use App\Models\Park;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spectator\Spectator;
use Tests\TestCase;

class ParksTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Spectator::using('openapi.yml');
    }

    public function testCanGetParks()
    {
        $res = $this->json(
            'GET',
            '/api/national-parks'
        );

        $res->assertValidRequest()
            ->assertValidResponse(200);
    }

    public function testCanGetPark()
    {
        $res = $this->json(
            'GET',
            '/api/national-parks'
        );

        $data = json_decode($res->getContent(), true);

        unset($res);

        $parkUuid = $data['data'][random_int(0, 14)]['parkUuid'];

        $res = $this->json('GET', sprintf('/api/national-parks/%s', $parkUuid));

        $res->assertValidRequest()
            ->assertValidResponse(200);
    }
}
