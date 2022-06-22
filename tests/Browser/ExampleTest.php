<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {

            $expectedVersionString = 'v' . \Composer\InstalledVersions::getRootPackage()['pretty_version'];

            $browser->visit('/')
                ->screenshot('landing-page')
                ->assertSee($expectedVersionString);
        });
    }
}