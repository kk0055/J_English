<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Language;

class ItemTest extends TestCase
{
    public function test_homepage_contains_5()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('5');
    }
    public function test_create_language()
    {
       $langs = Language::create([
          'user_id' => '2',
          'japanese' => 'テスト',
          'english' => 'Test',
        ]);
        $response = $this->get('/');
        $response->assertViewIs('language.index');
        $response->assertStatus(200);
        // $response->assertViewHas('Test', function($collecion)  use ($langs){
        //      return $collecion->contains($langs);
        // });
    }

}
