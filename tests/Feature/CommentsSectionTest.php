<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentsSectionTest extends TestCase
{
    // ! not tested.
    /** @test */
    public function comments_section_presence()
    {
        $this->get('/posts/1')->assertSeeLivewire('comments-section');
    }
}
