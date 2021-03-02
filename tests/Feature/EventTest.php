<?php

namespace Tests\Feature;

use App\Ads;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function add_event_to_sys()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/dashboard/events',[
            'name' => "Peace Event",
            'content' => "this best event ever",
            'place' => "componey",
            'date' => '1233'
        ]);

        // $response->assertOk();
        $this->assertCount(1 , Ads::all());
    }


    /** @test */
    public function edit_event_to_sys()
    {
        $this->withoutExceptionHandling();

        $ad = Ads::create([
            'name' => "Peace Event",
            'content' => "this best event ever",
            'place' => "componey",
            'date' => '1233'
        ]);

        $response = $this->put('/dashboard/events/'.$ad->id,[
            'name' => "Peace",
            'content' => "this best event ever",
            'place' => "componey",
            'date' => '1111'
        ]);

        // $response->assertOk();
        $this->assertCount(1 , Ads::all());
    }
}
