<?php

namespace Tests\Feature\app\Http\Controllers;

use Tests\TestCase;

class EditorControllerTest extends TestCase
{
    public function test_show_redirects_user_to_homepage()
    {
        $this->get('/editor')
            ->assertOk()
            ->assertSee('Editor');
    }
}
