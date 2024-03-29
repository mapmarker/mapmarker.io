<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomeTest extends DuskTestCase
{
    public function test_homepage()
    {
        $this->browse(function (Browser $browser) {
            $expectedVersionString = 'v'.\Composer\InstalledVersions::getRootPackage()['pretty_version'];

            $browser->visit('/')
                ->screenshot('page.landing-page')
                ->assertSee($expectedVersionString);
        });
    }
}
