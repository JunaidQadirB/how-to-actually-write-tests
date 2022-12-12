<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_it_shows_all_the_posts()
    {
        $posts = \App\Models\Post::factory()->count(5)->create();

        $this->get('/posts')
            ->assertStatus(200)
            ->assertSee('Posts')
            ->assertSee($posts[0]->title)
            ->assertSee($posts[1]->title)
            ->assertSee($posts[2]->title)
            ->assertSee($posts[3]->title)
            ->assertSee($posts[4]->title);
    }
}
